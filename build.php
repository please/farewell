<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use League\CommonMark\CommonMarkConverter;
use Symfony\Component\Yaml\Yaml;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$baseUrl = rtrim((string) getenv('BASE_URL'), '/');
$outputDir = __DIR__ . '/public';

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader, ['strict_variables' => true]);

$converter = new CommonMarkConverter();

$cards = [];
$cardFiles = glob(__DIR__ . '/_cards/*.md');
sort($cardFiles);

foreach ($cardFiles as $file) {
    $raw = file_get_contents($file);

    if (preg_match('/^---\s*\n(.*?)\n---\s*\n(.*)/s', $raw, $matches)) {
        $card = Yaml::parse($matches[1]);
        $card['content'] = $converter->convert(trim($matches[2]))->getContent();
    } else {
        $card = [];
        $card['content'] = $converter->convert(trim($raw))->getContent();
    }

    $cards[] = $card;
}

if (!is_dir($outputDir)) {
    mkdir($outputDir, 0755, true);
}

$html = $twig->render('index.html.twig', [
    'cards'    => $cards,
    'base_url' => $baseUrl,
    'title'    => 'Farewell, Andreas Braun!',
    'repo_url' => 'https://github.com/please/farewell',
]);

file_put_contents($outputDir . '/index.html', $html);

copyDirectory(__DIR__ . '/assets', $outputDir . '/assets');

echo sprintf("Built %d card(s) → %s\n", count($cards), $outputDir);

function copyDirectory(string $src, string $dst): void
{
    foreach (new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($src, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST,
    ) as $item) {
        $target = $dst . substr($item->getPathname(), strlen($src));
        if ($item->isDir()) {
            if (!is_dir($target)) {
                mkdir($target, 0755, true);
            }
        } else {
            copy($item->getPathname(), $target);
        }
    }
}
