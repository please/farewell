# How to add your card

## Option 1 — Fill in the form (easiest, no GitHub knowledge required)

[**→ Open the card form**](../../issues/new?template=farewell-card.yml)

Fill in your name, a message, and optionally your role, GitHub username, color, and emoji. Submit the issue — a pull request will be created automatically. No fork needed.

Need to change something? Edit the issue and your card will be updated automatically.

---

## Option 2 — Create a file directly (for git users)

1. **Navigate to the [`content/cards/`](content/cards/) folder** on GitHub.

2. Click **"Add file" → "Create new file"**.

3. Name your file `your-name.md` (e.g. `alice-smith.md`). Use only lowercase letters, numbers, and hyphens.

4. **Copy the template below** and fill in your details:

   ```markdown
   ---
   author: Your Full Name
   role: Your Job Title           # optional
   github: your-github-username   # optional — displays your profile picture
   color: yellow                  # yellow | blue | green | pink | purple | orange
   emoji: 🎉                      # optional
   ---

   Write your message to Andreas here.
   ```

5. Click **"Propose new file"** then **"Create pull request"**.

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
