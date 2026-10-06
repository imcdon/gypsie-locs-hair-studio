<?php
require_once dirname(__DIR__) . '/includes/config.php';

$page_title = 'Services | ' . $site_name;
$page_description = 'Luxury color, locs, extensions, cuts, and treatments at Gypsie Locs Hair Studio in Waterford, MI. Starting prices — reserve online.';
$body_class = 'page-services';
$canonical_path = '/services/';

require dirname(__DIR__) . '/includes/header.php';
?>

<header class="page-hero page-hero-services">
    <div class="wrap wrap-menu">
        <p class="section-eyebrow">Gypsie Locs Hair Studio</p>
        <h1 class="page-title">Service menu</h1>
        <p class="page-lead">Starting prices. Final investment confirmed in consultation. Live availability is held in our scheduler.</p>
        <a class="btn btn-book" <?= booking_attrs() ?>>Reserve</a>
    </div>
</header>

<nav class="service-jump wrap wrap-menu" aria-label="Service categories">
    <?php foreach ($service_groups as $group): ?>
        <a href="#<?= htmlspecialchars($group['id']) ?>"><?= htmlspecialchars($group['title']) ?></a>
    <?php endforeach; ?>
</nav>

<div class="wrap wrap-menu section section-menu">
    <?php
    $gi = 0;
    foreach ($service_groups as $group):
        $gi++;
    ?>
        <section class="menu-group" id="<?= htmlspecialchars($group['id']) ?>" aria-labelledby="svc-<?= htmlspecialchars($group['id']) ?>">
            <header class="menu-group-head">
                <span class="menu-group-index" aria-hidden="true"><?= str_pad((string) $gi, 2, '0', STR_PAD_LEFT) ?></span>
                <div>
                    <h2 class="menu-group-title" id="svc-<?= htmlspecialchars($group['id']) ?>"><?= htmlspecialchars($group['title']) ?></h2>
                    <?php if (!empty($group['lede'])): ?>
                        <p class="menu-group-lede"><?= htmlspecialchars($group['lede']) ?></p>
                    <?php endif; ?>
                </div>
            </header>
            <ul class="menu-list">
                <?php foreach ($group['items'] as $item): ?>
                    <li class="menu-row">
                        <div class="menu-info">
                            <span class="menu-name"><?= htmlspecialchars($item['name']) ?></span>
                            <?php if ($item['note'] !== ''): ?>
                                <span class="menu-note"><?= htmlspecialchars($item['note']) ?></span>
                            <?php endif; ?>
                        </div>
                        <span class="menu-rule" aria-hidden="true"></span>
                        <span class="menu-price"><?= htmlspecialchars($item['price']) ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
            <p class="menu-group-cta">
                <a class="text-link" <?= booking_attrs() ?>>Reserve <?= htmlspecialchars($group['title']) ?></a>
            </p>
        </section>
    <?php endforeach; ?>

    <p class="price-disclaimer">Prices and services are subject to change. Current options appear when you reserve.</p>
</div>

<?php require dirname(__DIR__) . '/includes/footer.php'; ?>
