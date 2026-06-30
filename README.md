# Farewell, Andreas Braun! 👋

A collaborative farewell board for [Andreas Braun](https://github.com/alcaeus), built as a GitHub Pages site powered by Jekyll.

Colleagues leave messages by opening a Pull Request — each card is a single Markdown file. No build tools, no login, no external service.

## Live site

> **Set up GitHub Pages first** (see below), then update this link.
>
> `https://please.github.io/farewell/`

## How to add a card

See [CONTRIBUTING.md](CONTRIBUTING.md) for step-by-step instructions (web UI or git).

## Set up GitHub Pages

1. Push this repository to GitHub.
2. Go to **Settings → Pages**.
3. Under "Source", select **Deploy from a branch** → `main` → `/ (root)`.
4. Save. Your site will be live in ~60 seconds.
5. Update `repository_url` in `_config.yml` with your actual repo URL.

## Local development

```bash
gem install bundler jekyll
bundle init
bundle add jekyll github-pages
bundle exec jekyll serve
```

Then visit `http://localhost:4000`.

## Transfer the repo to Andreas

Once the board is ready, go to **Settings → Danger Zone → Transfer ownership** and enter `alcaeus` as the new owner.
