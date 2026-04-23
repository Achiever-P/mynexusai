# NexusAI — Responsive PHP Landing Page

A fully responsive, multi-page landing page built with **PHP 8+**, vanilla CSS3, and vanilla JavaScript. No frameworks, no build tools — just drop it on any Apache/Nginx server.

---

## 📁 Project Structure

```
nexusai/
├── index.php               ← Main landing page
├── 404.php                 ← Custom error page
├── config.php              ← Site-wide configuration
├── .htaccess               ← Apache rules (security, 404, compression)
│
├── includes/
│   ├── header.php          ← Shared <head> + navbar
│   └── footer.php          ← Shared footer + scripts
│
├── pages/
│   ├── about.php           ← About / Team page
│   └── contact.php         ← Contact page with PHP form
│
├── handlers/
│   ├── subscribe.php       ← AJAX early-access email capture
│   └── contact.php         ← Contact form POST processor
│
├── assets/
│   ├── css/style.css       ← All styles (CSS variables, responsive)
│   └── js/main.js          ← Navbar, FAQ, counters, reveal animations
│
└── data/                   ← Auto-created on first run (gitignore me!)
    ├── leads.json          ← Email subscribers
    └── contact_messages.json ← Contact form submissions
```

---

## 🚀 Quick Start

### Requirements
- PHP 8.0 or higher
- Apache (with `mod_rewrite`) or Nginx

### Local Development with PHP's built-in server

```bash
cd nexusai
php -S localhost:8000
```

Then open: http://localhost:8000

### Deploy to Apache

1. Copy the `nexusai/` folder to your web root (e.g. `/var/www/html/nexusai`)
2. Ensure `mod_rewrite` is enabled: `sudo a2enmod rewrite`
3. Ensure your `VirtualHost` has `AllowOverride All`
4. Update `SITE_URL` in `config.php`
5. Visit `http://yourdomain.com/nexusai/`

### Deploy to Nginx

Add a location block:
```nginx
location /nexusai/ {
    try_files $uri $uri/ /nexusai/404.php;
}
```

---

## ✨ Features

| Feature | Details |
|---------|---------|
| **Responsive** | Mobile-first, tested from 320px to 4K |
| **PHP Data-Driven** | All features, pricing, FAQs driven by PHP arrays |
| **Email Capture** | AJAX form → stored in `data/leads.json` |
| **Contact Form** | POST → validation → stored in `data/contact_messages.json` |
| **Flash Messages** | PHP session-based flash messages on contact page |
| **FAQ Accordion** | CSS + JS accordion, accessible |
| **Counter Animation** | Intersection Observer triggered number counters |
| **Scroll Reveal** | Staggered fade-up on scroll |
| **404 Page** | Custom branded error page |
| **Security** | `.htaccess` protects `/data/`, sets security headers |

---

## 🛠 Customisation

### Change site name / email
Edit `config.php`:
```php
define('SITE_NAME',  'YourBrand');
define('SITE_EMAIL', 'hello@yourbrand.com');
```

### Change theme colours
Edit `assets/css/style.css` `:root {}` block:
```css
:root {
  --accent:  #00e5a0;   /* primary green */
  --accent2: #7c6cff;   /* violet */
  --bg:      #0a0a0f;   /* dark background */
}
```

### Update features / pricing / testimonials
All content is driven by PHP arrays at the top of `index.php`. No HTML to touch.

---

## 📦 Pages

| URL | Description |
|-----|-------------|
| `/index.php` | Full landing page (hero, features, pricing, FAQ, CTA) |
| `/pages/about.php` | Team, values, hiring CTA |
| `/pages/contact.php` | Contact form with server-side validation |
| `/404.php` | Custom 404 error page |

---

## 🔒 Security Notes

- All user inputs are sanitised with `htmlspecialchars()` and `filter_var()`
- The `/data/` directory is blocked via `.htaccess`
- In production, consider adding CSRF tokens to forms and rate-limiting the handlers
- For production email, replace the flat-file storage in handlers with `mail()` or an SMTP library (PHPMailer)

