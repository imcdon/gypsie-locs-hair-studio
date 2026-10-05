<?php
require_once dirname(__DIR__) . '/includes/config.php';

$page_title = 'About | ' . $site_name;
$page_description = 'Meet Joanna Shaver at Gypsie Locs Hair Studio — Ultra Salon Suites #11 in Waterford, Michigan.';
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

<div class="wrap wrap-narrow section about-body">
    <p>Gypsie Locs Hair Studio is Joanna’s suite practice inside <strong>Ultra Salon Suites #11</strong> in Waterford, Michigan. She focuses on locs, color, cuts, and custom styling — with online booking so you can lock in a time that works.</p>
    <p>Whether you’re maintaining locs, refreshing color, or booking a cut and style, you’ll finish scheduling on our GlossGenius calendar — same tools Joanna uses for payments and reminders.</p>

    <h2 class="section-title-sm">Policies</h2>
    <p>Cancellation and deposit details live with your booking. Review them when you schedule, or ask Joanna when you arrive.</p>
    <p><a class="link-book" <?= booking_attrs($booking_url) ?>>Open booking site</a> for full service details and policies.</p>

    <div class="section-cta-inline">
        <a class="btn btn-book btn-lg" <?= booking_attrs() ?>>Book with Joanna</a>
    </div>
</div>

<?php require dirname(__DIR__) . '/includes/footer.php'; ?>
