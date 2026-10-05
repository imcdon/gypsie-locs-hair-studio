<?php
require_once dirname(__DIR__) . '/includes/config.php';

$page_title = 'Portfolio | ' . $site_name;
$page_description = 'See locs, color, cuts, and styles from Gypsie Locs Hair Studio in Waterford, MI.';
$body_class = 'page-portfolio';
$canonical_path = '/portfolio/';

$filters = [
    'all'    => 'All',
    'locs'   => 'Locs',
    'color'  => 'Color',
    'cuts'   => 'Cuts',
    'styles' => 'Styles',
];

require dirname(__DIR__) . '/includes/header.php';
?>

<header class="page-hero">
    <div class="wrap">
        <h1 class="page-title">Portfolio</h1>
        <p class="page-lead">Real client work — photos coming soon from Joanna. Filters ready for the full gallery.</p>
    </div>
</header>

<div class="wrap section">
    <div class="portfolio-filters" role="group" aria-label="Filter portfolio">
        <?php foreach ($filters as $key => $label): ?>
            <button type="button" class="filter-btn<?= $key === 'all' ? ' is-active' : '' ?>" data-filter="<?= htmlspecialchars($key) ?>">
                <?= htmlspecialchars($label) ?>
            </button>
        <?php endforeach; ?>
    </div>

    <ul class="portfolio-grid" id="portfolio-grid">
        <?php foreach ($portfolio_items as $item): ?>
            <li class="portfolio-item" data-category="<?= htmlspecialchars($item['category']) ?>">
                <button type="button" class="portfolio-tile" data-lightbox="<?= htmlspecialchars($item['alt']) ?>" aria-label="<?= htmlspecialchars($item['alt']) ?>">
                    <span class="portfolio-placeholder cat-<?= htmlspecialchars($item['category']) ?>"></span>
                    <span class="portfolio-label"><?= htmlspecialchars($item['label']) ?></span>
                </button>
            </li>
        <?php endforeach; ?>
    </ul>

    <div class="section-cta-inline">
        <p>Love what you see? Reserve your chair.</p>
        <a class="btn btn-book btn-lg" <?= booking_attrs() ?>>Book Now</a>
    </div>
</div>

<dialog class="lightbox" id="lightbox" aria-label="Portfolio image">
    <button type="button" class="lightbox-close" id="lightbox-close" aria-label="Close">&times;</button>
    <div class="lightbox-body" id="lightbox-body"></div>
</dialog>

<?php require dirname(__DIR__) . '/includes/footer.php'; ?>
