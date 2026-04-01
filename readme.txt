=== WebMetro WordPress Theme ===

Theme Name:   WebMetro
Version:      1.0.0
Author:       Web Metro Limited
Author URI:   https://webmetro.co.ke
License:      Proprietary
Requires WP:  6.0
Requires PHP: 8.0

== DESCRIPTION ==

Official WordPress theme for Web Metro Limited (webmetro.co.ke).
White/light design with bold Outfit typography, smooth scroll animations,
and full admin control over all homepage sections.

== INSTALLATION ==

1. Go to Appearance → Themes → Add New → Upload Theme
2. Upload webmetro.zip and click Install Now
3. Activate the theme
4. Install required plugins (see PLUGINS section below)
5. Go to Settings → Reading → set "Your homepage displays" to a static page
6. Create a page titled "Home" and set it as the static front page
7. Customise via Appearance → Customize → WebMetro Settings

== REQUIRED PLUGINS ==

Install these from Plugins → Add New before adding content:

1. Classic Editor
   - Slug: classic-editor
   - Why: Cleaner editing for Services, Portfolio, Testimonials CPTs

2. Contact Form 7 (optional — theme has built-in AJAX form)
   - Slug: contact-form-7
   - Why: Backup contact form with spam protection

3. Yoast SEO
   - Slug: wordpress-seo
   - Why: SEO meta tags, XML sitemap, Open Graph for social sharing

4. WP Mail SMTP
   - Slug: wp-mail-smtp
   - Why: Ensures contact form emails are delivered reliably
   - Configure with: Gmail SMTP, Zoho Mail, or SendGrid

5. Smush (Image Optimisation)
   - Slug: wp-smushit
   - Why: Auto-compress portfolio and blog images on upload

6. W3 Total Cache or WP Super Cache
   - Slug: w3-total-cache
   - Why: Page caching for faster load times on DigitalOcean

7. UpdraftPlus (Backup)
   - Slug: updraftplus
   - Why: Automated backups to Google Drive or Dropbox

== ADDING CONTENT ==

--- HERO SECTION ---
Appearance → Customize → WebMetro Settings → Hero Section
Edit headline lines, description, button text/URLs, and badge text live.

--- SERVICES ---
Services → Add New
- Title = service name
- Content/Excerpt = description paragraph
- Service Details metabox:
  * Font Awesome Icon Class (e.g. fa-code, fa-mobile-alt, fa-chart-line)
  * Tech Stack Tags (comma-separated: React, Next.js, Laravel)
  * Display Order (1, 2, 3...)
- Publish

--- PORTFOLIO ---
Portfolio → Add New
- Title = project name
- Excerpt = short project description
- Featured Image = project thumbnail (recommended: 800×600px)
- Project Details metabox:
  * Client Name
  * Project URL (links from "View Project" button)
  * Thumbnail Emoji (fallback if no featured image)
  * Background Gradient (CSS gradient for emoji fallback)
- Project Categories → Add category (e.g. Web, App, Marketing)
  These become the filter tabs on the homepage automatically.
- Publish

--- TESTIMONIALS ---
Testimonials → Add New
- Title = client's full name
- Content = the testimonial quote text
- Testimonial Details metabox:
  * Company name
  * Star rating (1–5)
  * Avatar colour (hex colour for initials circle)
- Publish

--- BLOG POSTS ---
Posts → Add New (standard WordPress posts)
- Add Featured Image for best appearance
- Assign a Category (appears as coloured label on card)
- Latest 3 posts auto-appear on the homepage blog preview

--- STATS BAR ---
Appearance → Customize → WebMetro Settings → Stats Bar
Edit all 4 stat numbers and labels directly.

--- CONTACT DETAILS ---
Appearance → Customize → WebMetro Settings → Contact Details
Edit address, email, phone, WhatsApp number.
Note: WhatsApp number must be in format 254XXXXXXXXX (no + or spaces).

--- SOCIAL MEDIA LINKS ---
Appearance → Customize → WebMetro Settings → Social Media Links
Paste full profile URLs for LinkedIn, Twitter/X, Instagram, Facebook.

--- KUZAERP SECTION ---
Appearance → Customize → WebMetro Settings → KuzaERP Section
Edit title, description, URL, button text.

--- FOOTER ---
Appearance → Customize → WebMetro Settings → Footer
Edit tagline text and copyright line.
Year is auto-updated — no need to change it each year.

== NAVIGATION MENU ==

1. Go to Appearance → Menus
2. Create a menu named "Primary Navigation"
3. Add pages/custom links for: Services, Products, Work, Process, Blog, Contact
4. Assign to "Primary Navigation" location
5. Save Menu

For one-page anchor links, use Custom Links with URL: #services, #portfolio, etc.

== EMAIL SETUP ==

The contact form uses WordPress wp_mail() function.
For reliable email delivery, install WP Mail SMTP and configure it with:

Option A — Gmail SMTP (free):
  Host: smtp.gmail.com | Port: 587 | Auth: TLS
  Requires a Gmail App Password (not your regular password)

Option B — Zoho Mail (recommended for info@webmetro.co.ke):
  Host: smtp.zoho.com | Port: 587 | Auth: TLS
  Set up a Zoho Mail account for the webmetro.co.ke domain

Option C — SendGrid (best deliverability):
  Free tier: 100 emails/day
  Uses API key, no SMTP configuration needed with WP Mail SMTP

== FILE STRUCTURE ==

webmetro/
├── style.css                    WordPress theme header
├── functions.php                CPTs, Customizer, AJAX, meta boxes
├── front-page.php               Homepage template
├── header.php                   Site header + nav
├── footer.php                   Site footer
├── index.php                    Blog listing
├── single.php                   Single blog post
├── screenshot.png               Theme preview (1200×900)
├── readme.txt                   This file
├── assets/
│   ├── css/
│   │   └── main.css             All theme styles
│   └── js/
│       └── main.js              Animations + AJAX contact form
└── template-parts/
    ├── hero.php                 Hero section
    ├── stats.php                Stats counter bar
    ├── services.php             Services cards
    ├── kuza.php                 KuzaERP spotlight
    ├── portfolio.php            Portfolio grid + filter
    ├── process.php              4-step process
    ├── testimonials.php         Testimonial carousel
    ├── blog-preview.php         Latest 3 blog posts
    └── contact.php              Contact form + details

== SUPPORT ==

Web Metro Limited
Email: info@webmetro.co.ke
WhatsApp: +254 700 000 000
Website: https://webmetro.co.ke
