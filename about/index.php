<?php
require_once dirname(__DIR__) . '/includes/config.php';

$page_title = 'About | ' . $site_name;
$page_description = 'Meet Joanna Shaver at Gypsie Locs Hair Studio — Dream Catchers extension specialist and certified colorist in Waterford, Michigan.';
$body_class = 'page-about';
$canonical_path = '/about/';

require dirname(__DIR__) . '/includes/header.php';
?>

<header class="page-hero">
    <div class="wrap">
        <h1 class="page-title">About</h1>
        <p class="page-lead">Joanna Shaver — Gypsie Locs Hair Studio</p>
    </div>
</header>

<div class="wrap section about-layout">
    <figure class="about-photo">
        <img
            src="<?= htmlspecialchars(url('assets/img/about/joanna.jpg')) ?>"
            alt="Joanna Shaver of Gypsie Locs Hair Studio"
            width="640"
            height="640"
            loading="lazy"
            decoding="async"
        >
    </figure>
    <div class="about-body">
        <p>I’m a Dream Catchers extension specialist with 20 years of experience. I’m also a Wella, Redken, and Rusk certified colorist.</p>
        <p>Gypsie Locs Hair Studio is Joanna’s suite practice inside <strong>Ultra Salon Suites #11</strong> in Waterford, Michigan — locs, color, cuts, and custom styling, with online booking so you can lock in a time that works.</p>
        <p>You’ll finish scheduling on our GlossGenius calendar — the same tools Joanna uses for payments and reminders.</p>

        <?php if (!empty($social['instagram'])): ?>
            <p><a href="<?= htmlspecialchars($social['instagram']) ?>" target="_blank" rel="noopener noreferrer">Follow on Instagram</a></p>
        <?php endif; ?>

        <h2 class="section-title-sm">Policies</h2>
        <p>A 50% cancellation fee applies for no-shows or cancellations without 48 hours’ notice. Full details appear when you book.</p>
        <p><a class="link-book" <?= booking_attrs($booking_url) ?>>Open booking site</a> for services and policies.</p>

        <div class="section-cta-inline">
            <a class="btn btn-book btn-lg" <?= booking_attrs() ?>>Book with Joanna</a>
        </div>
    </div>
</div>

<?php require dirname(__DIR__) . '/includes/footer.php'; ?>
