<?php
require_once dirname(__DIR__) . '/includes/config.php';

$page_title = 'Contact | ' . $site_name;
$page_description = 'Visit Gypsie Locs Hair Studio at Ultra Salon Suites #11, 5066 Highland Rd, Waterford, MI. Call or book online.';
$body_class = 'page-contact';
$canonical_path = '/contact/';

require dirname(__DIR__) . '/includes/header.php';
?>

<header class="page-hero">
    <div class="wrap">
        <h1 class="page-title">Contact</h1>
        <p class="page-lead">Suite #11 at Ultra Salon Suites — Waterford, MI</p>
    </div>
</header>

<div class="wrap section contact-grid">
    <div class="contact-block">
        <h2 class="section-title-sm">Visit</h2>
        <address class="contact-address">
            <?= htmlspecialchars($site_name) ?><br>
            <?= htmlspecialchars($address['line2']) ?><br>
            <?= htmlspecialchars($address['line1']) ?><br>
            <?= htmlspecialchars($address['city'] . ', ' . $address['region'] . ' ' . $address['postal_code']) ?>
        </address>
        <a class="btn btn-ghost" href="<?= htmlspecialchars(maps_url()) ?>" target="_blank" rel="noopener noreferrer">Open in Maps</a>
    </div>

    <div class="contact-block">
        <h2 class="section-title-sm">Call</h2>
        <a class="contact-phone" href="<?= htmlspecialchars($phone_href) ?>"><?= htmlspecialchars($phone) ?></a>
        <p class="contact-hours"><?= htmlspecialchars($hours_note) ?></p>
        <?php if (!empty($social['instagram'])): ?>
            <p><a href="<?= htmlspecialchars($social['instagram']) ?>" target="_blank" rel="noopener noreferrer">Instagram</a></p>
        <?php endif; ?>
    </div>

    <div class="contact-block contact-book">
        <h2 class="section-title-sm">Book</h2>
        <p>Appointments are scheduled online.</p>
        <a class="btn btn-book btn-lg" <?= booking_attrs() ?>>Book Now</a>
    </div>
</div>

<?php require dirname(__DIR__) . '/includes/footer.php'; ?>
