# WebMetro — Web Metro Limited

**Official website for [Web Metro Limited](https://webmetro.co.ke) — Building Digital Africa**

Nairobi-based digital agency offering web development, app development, and digital marketing for Kenyan and African businesses.

---

## 🌐 Live Preview

This repository is published on **GitHub Pages**:
**[https://YOUR-USERNAME.github.io/webmetro](https://YOUR-USERNAME.github.io/webmetro)**

> Replace `YOUR-USERNAME` with your GitHub username after setup.

---

## 📁 Repository Structure

```
webmetro/
├── index.html          ← Full website (GitHub Pages entry point)
├── css/
│   └── main.css        ← All styles
├── js/
│   └── main.js         ← Animations, scroll effects, contact form
├── webmetro.zip        ← WordPress theme (upload to WP to go live)
├── _config.yml         ← GitHub Pages configuration
└── README.md           ← This file
```

---

## 🚀 GitHub Pages Setup (3 Steps)

### Step 1 — Push to GitHub

```bash
# Clone or create your repo, then:
git add .
git commit -m "Initial commit — WebMetro website"
git push origin main
```

### Step 2 — Enable GitHub Pages

1. Go to your repository on GitHub
2. Click **Settings** → **Pages** (left sidebar)
3. Under **Source** → select **Deploy from a branch**
4. Set branch to `main` and folder to `/ (root)`
5. Click **Save**

### Step 3 — Visit your site

GitHub will give you a URL like:
`https://YOUR-USERNAME.github.io/webmetro`

It may take 1–2 minutes to go live after first publish.

---

## 🔧 WordPress Deployment

The `webmetro.zip` file in this repository is the **complete WordPress theme**.

To deploy to production on `webmetro.co.ke`:

1. Log into WordPress admin
2. Go to **Appearance → Themes → Add New → Upload Theme**
3. Upload `webmetro.zip` → Install → Activate
4. Go to **Appearance → Customize → WebMetro Settings**
5. Edit hero text, contact details, social links, stats

> Full deployment instructions are in `webmetro.zip` → `readme.txt`

---

## ✏️ Making Changes

### Update contact details
Edit `index.html` and search for:
- `info@webmetro.co.ke` — email address
- `+254 700 000 000` — phone number
- `254700000000` — WhatsApp number (in the wa.me link)

### Update social media links
Search for `fab fa-linkedin-in` in `index.html` and update the `href="#"` placeholders.

### Update hero text
Search for `We Grow` in `index.html` — the headline lines are right there.

### Update stats
Search for `data-t=` in `index.html` — e.g. `data-t="50"` controls the counter target.

---

## 🎨 Design

- **Headings:** Outfit (900 weight) — bold, geometric
- **Body:** Inter — clean, highly legible
- **Icons:** Font Awesome 6.5
- **Theme:** White/light with black text, green (`#00C853`) and blue (`#1A73E8`) accents
- **Animations:** Scroll-triggered reveals, line-by-line hero entrance, infinite marquee, stat counters, testimonial carousel

---

## 📦 Tech Stack

| Layer | Technology |
|---|---|
| Frontend | Vanilla HTML5 / CSS3 / JavaScript |
| Fonts | Google Fonts CDN |
| Icons | Font Awesome 6.5 CDN |
| Hosting (preview) | GitHub Pages |
| Hosting (production) | DigitalOcean + Nginx |
| CMS | WordPress 6.x |
| SSL | Let's Encrypt via Certbot |

---

## 📞 Contact

**Web Metro Limited**
- 🌐 [webmetro.co.ke](https://webmetro.co.ke)
- 📧 info@webmetro.co.ke
- 📱 +254 700 000 000
- 💬 [WhatsApp](https://wa.me/254700000000)
- 🚀 [KuzaERP](https://kuzaerp.com) — ERP built for African businesses

---

*Building Digital Africa 🇰🇪*
