# How to add your card

Adding your farewell message to Andreas is done by opening a Pull Request with a new file. No command line required — you can do it entirely from GitHub's web interface.

---

## Option 1 — GitHub web interface (easiest)

1. **Navigate to the `_cards/` folder** in this repository on GitHub.

2. Click **"Add file" → "Create new file"**.

3. Name your file `your-name.md` (e.g. `alice-smith.md`). Use only lowercase letters, numbers, and hyphens.

4. **Copy the template below** into the editor and fill in your details:

   ```markdown
   ---
   author: Your Full Name
   role: Your Job Title           # optional
   github: your-github-username   # optional — displays your profile picture
   color: yellow                  # choose: yellow | blue | green | pink | purple | orange
   emoji: 🎉                      # optional — appears at the top of your card
   ---

   Write your message to Andreas here.

   You can write multiple paragraphs — each one will be separated automatically.
   ```

5. Scroll down and click **"Propose new file"**.

6. On the next screen, click **"Create pull request"**. Done!

---

## Option 2 — Git workflow

```bash
# 1. Fork & clone the repository
git clone https://github.com/YOUR-USERNAME/THIS-REPO.git
cd THIS-REPO

# 2. Create a branch
git checkout -b card/your-name

# 3. Create your card file
cp _cards/jerome-tamarelle.md _cards/your-name.md
# Edit _cards/your-name.md with your details

# 4. Commit and push
git add _cards/your-name.md
git commit -m "Add farewell card from Your Name"
git push origin card/your-name

# 5. Open a Pull Request on GitHub
```

---

## Card fields reference

| Field    | Required | Description |
|----------|----------|-------------|
| `author` | Yes      | Your name as it will appear on the card |
| `role`   | No       | Your job title or team |
| `github` | No       | Your GitHub username — used to show your avatar |
| `color`  | No       | Card background color (default: cycles automatically) |
| `emoji`  | No       | A single emoji shown at the top of your card |

**Available colors:** `yellow` · `blue` · `green` · `pink` · `purple` · `orange`

---

## Tips

- Your message can be as long or as short as you like.
- Markdown is supported: **bold**, *italic*, line breaks between paragraphs.
- If you skip `color`, one will be assigned automatically.
- Your card will appear on the site as soon as the PR is merged.
