<?php
$page_title = $page_title ?? $site_name;
$page_description = $page_description ?? $site_description;
$body_class = $body_class ?? '';
$canonical_path = $canonical_path ?? current_path();
$canonical_url = absolute_url(ltrim($canonical_path === '/' ? '' : $canonical_path, '/'));
$og_image = $og_image ?? absolute_url('assets/img/hero/cover.jpg');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="description" content="<?= htmlspecialchars($page_description) ?>">
    <title><?= htmlspecialchars($page_title) ?></title>
    <link rel="canonical" href="<?= htmlspecialchars($canonical_url) ?>">
    <meta property="og:site_name" content="<?= htmlspecialchars($site_name) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page_description) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical_url) ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?= htmlspecialchars($og_image) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="theme-color" content="#1a1410">
    <link rel="icon" href="<?= htmlspecialchars(url('assets/img/favicon.svg')) ?>" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500&family=Figtree:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= htmlspecialchars(url('assets/css/main.css')) ?>">
</head>
<body<?= $body_class !== '' ? ' class="' . htmlspecialchars($body_class) . '"' : '' ?>>
    <a class="skip-link" href="#main">Skip to content</a>

    <header class="site-header" id="site-header">
        <div class="header-inner">
            <a class="logo" href="<?= htmlspecialchars(url()) ?>">
                <img class="logo-img" src="<?= htmlspecialchars(url('assets/img/logo/gypsie-locs-logo.jpg')) ?>" alt="" width="44" height="44" decoding="async">
                <span class="logo-text">
                    <span class="logo-mark">Gypsie Locs</span>
                    <span class="logo-sub">Hair Studio</span>
                </span>
            </a>

            <div class="header-actions">
                <a class="btn btn-book btn-book-header" <?= booking_attrs() ?>>Book Now</a>
                <button type="button" class="nav-toggle" id="nav-toggle" aria-expanded="false" aria-controls="nav-menu">
                    <span class="nav-toggle-bars" aria-hidden="true"><span></span><span></span><span></span></span>
                    <span class="visually-hidden">Menu</span>
                </button>
            </div>

            <nav class="header-nav" id="nav-menu" aria-label="Main" hidden>
                <ul class="nav-list">
                    <?php foreach ($nav_links as $label => $href): ?>
                        <li><a href="<?= htmlspecialchars(url($href)) ?>"><?= htmlspecialchars($label) ?></a></li>
                    <?php endforeach; ?>
                    <li class="nav-book-mobile">
                        <a class="btn btn-book" <?= booking_attrs() ?>>Book Now</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main id="main">
