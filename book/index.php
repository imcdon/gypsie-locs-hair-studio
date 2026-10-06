<?php
require_once dirname(__DIR__) . '/includes/config.php';

$page_title = 'Reserve | ' . $site_name;
$page_description = 'Reserve your appointment at Gypsie Locs Hair Studio via our private GlossGenius scheduler.';
$body_class = 'page-book';
$canonical_path = '/book/';

require dirname(__DIR__) . '/includes/header.php';
?>

<section class="book-handoff">
    <div class="wrap wrap-narrow">
        <p class="section-eyebrow">Private scheduling</p>
        <h1 class="page-title">Reserve your time</h1>
        <p class="page-lead">You’ll complete your reservation on our secure scheduler — choose a service, select a time, and confirm.</p>
        <a class="btn btn-book btn-lg" id="book-primary" <?= booking_attrs() ?>>Continue to reserve</a>
        <p class="book-note">Opens in a new tab. This site remains available behind it.</p>
        <p class="book-alt"><a href="<?= htmlspecialchars(url('services/')) ?>">Review the service menu</a></p>
    </div>
</section>

<?php require dirname(__DIR__) . '/includes/footer.php'; ?>
