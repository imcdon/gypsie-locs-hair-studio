<?php
require_once dirname(__DIR__) . '/includes/config.php';

$page_title = 'Services | ' . $site_name;
$page_description = 'Cuts, color, locs, extensions, styling, and waxing at Gypsie Locs Hair Studio in Waterford, MI. Prices starting at — book online.';
$body_class = 'page-services';
$canonical_path = '/services/';

require dirname(__DIR__) . '/includes/header.php';
?>

<header class="page-hero">
    <div class="wrap">
        <h1 class="page-title">Services</h1>
        <p class="page-lead">Starting prices — final quotes may vary. Consultation required where noted. Book to see live availability.</p>
        <a class="btn btn-book" <?= booking_attrs() ?>>Book Now</a>
    </div>
</header>

<div class="wrap section">
    <?php foreach ($service_groups as $group): ?>
        <section class="service-group" id="<?= htmlspecialchars($group['id']) ?>" aria-labelledby="svc-<?= htmlspecialchars($group['id']) ?>">
            <div class="service-group-head">
                <h2 class="service-group-title" id="svc-<?= htmlspecialchars($group['id']) ?>"><?= htmlspecialchars($group['title']) ?></h2>
                <a class="link-book" <?= booking_attrs() ?>>Book</a>
            </div>
            <ul class="service-list">
                <?php foreach ($group['items'] as $item): ?>
                    <li class="service-row">
                        <div class="service-info">
                            <span class="service-name"><?= htmlspecialchars($item['name']) ?></span>
                            <?php if ($item['note'] !== ''): ?>
                                <span class="service-note"><?= htmlspecialchars($item['note']) ?></span>
                            <?php endif; ?>
                        </div>
                        <span class="service-price"><?= htmlspecialchars($item['price']) ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    <?php endforeach; ?>

    <p class="price-disclaimer">Prices and services are subject to change. See GlossGenius at booking for current options.</p>
</div>

<?php require dirname(__DIR__) . '/includes/footer.php'; ?>
