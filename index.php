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
            src="<?= htmlspecialchars(url('assets/img/hero/atelier.jpg')) ?>"
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
        <h1 class="hero-title">Color, locs &amp; custom artistry</h1>
        <p class="hero-lead">A private suite experience with Joanna Shaver — Ultra Salon Suites, Waterford.</p>
        <div class="hero-actions">
            <a class="btn btn-book btn-lg" <?= booking_attrs() ?>>Reserve</a>
            <a class="btn btn-ghost btn-lg" href="<?= htmlspecialchars(url('services/')) ?>">View services</a>
        </div>
    </div>
</section>

<section class="section section-services-home" aria-labelledby="services-home-title">
    <div class="wrap">
        <header class="section-head">
            <p class="section-eyebrow">The menu</p>
            <h2 class="section-title" id="services-home-title">Services</h2>
            <p class="section-lead">Curated offerings for color, extensions, cuts, and finishing — priced from, finalized in chair.</p>
        </header>

        <ol class="service-spotlight">
            <?php
            $n = 0;
            foreach ($home_service_spotlight as $sid):
                $group = service_group_by_id($sid);
                if (!$group) {
                    continue;
                }
                $n++;
                $from = '';
                foreach ($group['items'] as $item) {
                    if ($item['price'] !== '' && stripos($item['price'], 'consultation') === false) {
                        $from = $item['price'];
                        break;
                    }
                }
                if ($from === '' && !empty($group['items'][0]['price'])) {
                    $from = $group['items'][0]['price'];
                }
            ?>
                <li class="service-spotlight-item">
                    <a class="service-spotlight-link" href="<?= htmlspecialchars(url('services/#' . $group['id'])) ?>">
                        <span class="service-spotlight-index" aria-hidden="true"><?= str_pad((string) $n, 2, '0', STR_PAD_LEFT) ?></span>
                        <span class="service-spotlight-body">
                            <span class="service-spotlight-title"><?= htmlspecialchars($group['title']) ?></span>
                            <span class="service-spotlight-lede"><?= htmlspecialchars($group['lede']) ?></span>
                        </span>
                        <?php if ($from !== ''): ?>
                            <span class="service-spotlight-price"><?= htmlspecialchars($from) ?></span>
                        <?php endif; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ol>

        <p class="section-foot">
            <a class="text-link" href="<?= htmlspecialchars(url('services/')) ?>">Full service menu</a>
            <span class="sep" aria-hidden="true">·</span>
            <a class="text-link" <?= booking_attrs() ?>>Reserve an appointment</a>
        </p>
    </div>
</section>

<section class="section section-home-work" aria-labelledby="home-work-title">
    <div class="wrap">
        <header class="section-head">
            <p class="section-eyebrow">Selected work</p>
            <h2 class="section-title" id="home-work-title">Atelier</h2>
            <p class="section-lead">Color, extensions, and finish — photographed from the suite.</p>
        </header>
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
        <p class="section-eyebrow">Appointments</p>
        <h2 class="section-title">Reserve your time</h2>
        <p class="section-lead">Select a service and time through our private scheduler. Deposits and policies appear at booking.</p>
        <a class="btn btn-book btn-lg" <?= booking_attrs() ?>>Reserve</a>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
