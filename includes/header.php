<?php
// includes/header.php  – shared <head> + nav
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/../config.php';
}
$page_title = $page_title ?? SITE_NAME . ' — ' . SITE_TAGLINE;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?= htmlspecialchars(SITE_TAGLINE) ?>" />
  <title><?= htmlspecialchars($page_title) ?></title>
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'><text y='26' font-size='28'>⚡</text></svg>" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="/nexusai/assets/css/style.css" />
</head>
<body>

<!-- ═══ NAVBAR ═══════════════════════════════════════════════════════════════ -->
<nav id="navbar">
  <a href="index.php" class="nav-logo"><?= SITE_NAME ?><span>.</span></a>

  <ul class="nav-links">
    <li><a href="index.php#features">Features</a></li>
    <li><a href="index.php#how">How It Works</a></li>
    <li><a href="index.php#pricing">Pricing</a></li>
    <li><a href="index.php#testimonials">Reviews</a></li>
    <li><a href="pages/about.php">About</a></li>
  </ul>

  <a href="index.php#cta" class="nav-cta">Get Early Access</a>

  <button class="hamburger" id="hamburger" aria-label="Toggle menu">
    <span></span><span></span><span></span>
  </button>
</nav>

<!-- Mobile menu -->
<div class="mobile-menu" id="mobileMenu">
  <a href="index.php#features">Features</a>
  <a href="index.php#how">How It Works</a>
  <a href="index.php#pricing">Pricing</a>
  <a href="index.php#testimonials">Reviews</a>
  <a href="pages/about.php">About</a>
  <a href="index.php#cta" class="accent">Get Early Access →</a>
</div>
