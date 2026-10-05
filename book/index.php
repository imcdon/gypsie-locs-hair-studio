<?php
require_once dirname(__DIR__) . '/includes/config.php';

$page_title = 'Book | ' . $site_name;
$page_description = 'Book your appointment at Gypsie Locs Hair Studio via GlossGenius.';
$body_class = 'page-book';
$canonical_path = '/book/';

require dirname(__DIR__) . '/includes/header.php';
?>

<section class="book-handoff">
    <div class="wrap wrap-narrow">
        <h1 class="page-title">Book your appointment</h1>
        <p class="page-lead">You’ll finish booking on our secure GlossGenius scheduler — pick a service, choose a time, and you’re set.</p>
        <a class="btn btn-book btn-lg" id="book-primary" <?= booking_attrs() ?>>Continue to booking</a>
        <p class="book-note">Opens in a new tab. Your place on this site stays open.</p>
        <p class="book-alt"><a href="<?= htmlspecialchars(url('services/')) ?>">Browse services first</a></p>
    </div>
</section>

<?php require dirname(__DIR__) . '/includes/footer.php'; ?>
