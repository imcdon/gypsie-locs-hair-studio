<?php
require_once __DIR__ . '/includes/config.php';

$page_title = $site_name . ' | Waterford, MI';
$page_description = $site_description;
$body_class = 'page-home';
$canonical_path = '/';

require __DIR__ . '/includes/header.php';
?>

<section class="hero" aria-label="<?= htmlspecialchars($site_name) ?>">
    <div class="hero-media" aria-hidden="true">
        <img
            class="hero-photo"
            src="<?= htmlspecialchars(url('assets/img/hero/cover.jpg')) ?>"
            alt=""
            width="1200"
            height="800"
            fetchpriority="high"
            decoding="async"
        >
        <div class="hero-overlay"></div>
    </div>
    <div class="hero-content">
        <p class="hero-brand">Gypsie Locs Hair Studio</p>
        <h1 class="hero-title">Hair that moves with you</h1>
        <p class="hero-lead">Locs, color, and custom styling with Joanna Shaver — Ultra Salon Suites, Waterford, MI.</p>
        <div class="hero-actions">
            <a class="btn btn-book btn-lg" <?= booking_attrs() ?>>Book Now</a>
            <a class="btn btn-ghost btn-lg" href="<?= htmlspecialchars(url('portfolio/')) ?>">View work</a>
        </div>
    </div>
</section>

<section class="section section-intro">
    <div class="wrap">
        <h2 class="section-title">Crafted for your texture</h2>
        <p class="section-lead">From loc care and extensions to color and everyday cuts — book online in minutes.</p>
        <div class="intro-links">
            <a href="<?= htmlspecialchars(url('services/')) ?>">Services &amp; pricing</a>
            <a href="<?= htmlspecialchars(url('about/')) ?>">Meet Joanna</a>
            <a href="<?= htmlspecialchars(url('contact/')) ?>">Find the suite</a>
        </div>
    </div>
</section>

<section class="section section-home-work" aria-labelledby="home-work-title">
    <div class="wrap">
        <h2 class="section-title" id="home-work-title">Recent work</h2>
        <p class="section-lead">Color, extensions, and custom styles from the chair.</p>
        <ul class="portfolio-grid portfolio-grid-home">
            <?php foreach (array_slice($portfolio_items, 0, 4) as $item): ?>
                <li class="portfolio-item">
                    <a class="portfolio-tile" href="<?= htmlspecialchars(url('portfolio/')) ?>">
                        <img
                            src="<?= htmlspecialchars(url($item['src'])) ?>"
                            alt="<?= htmlspecialchars($item['alt']) ?>"
                            width="640"
                            height="800"
                            loading="lazy"
                            decoding="async"
                        >
                        <span class="portfolio-label"><?= htmlspecialchars($item['label']) ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<section class="section section-cta">
    <div class="wrap wrap-narrow">
        <h2 class="section-title">Ready when you are</h2>
        <p class="section-lead">Choose a service and time on our secure scheduler.</p>
        <a class="btn btn-book btn-lg" <?= booking_attrs() ?>>Book an appointment</a>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
