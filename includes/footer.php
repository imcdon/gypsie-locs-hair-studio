<?php
$json_ld = [
    '@context' => 'https://schema.org',
    '@type' => 'HairSalon',
    'name' => $site_name,
    'description' => $site_description,
    'url' => rtrim($site_url, '/') . '/',
    'telephone' => $phone,
    'image' => absolute_url('assets/img/hero/atelier.jpg'),
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => trim(($address['line1'] ?? '') . ', ' . ($address['line2'] ?? ''), ', '),
        'addressLocality' => $address['city'] ?? '',
        'addressRegion' => $address['region'] ?? '',
        'postalCode' => $address['postal_code'] ?? '',
        'addressCountry' => $address['country'] ?? 'US',
    ],
    'geo' => [
        '@type' => 'GeoCoordinates',
        'latitude' => 42.6578,
        'longitude' => -83.3852,
    ],
];
if (!empty($social['instagram'])) {
    $json_ld['sameAs'] = [$social['instagram']];
}
?>
    </main>

    <footer class="site-footer">
        <div class="footer-inner">
            <div class="footer-brand">
                <p class="footer-name"><?= htmlspecialchars($site_name) ?></p>
                <p class="footer-tag"><?= htmlspecialchars($site_tagline) ?></p>
            </div>
            <div class="footer-contact">
                <a href="<?= htmlspecialchars($phone_href) ?>"><?= htmlspecialchars($phone) ?></a>
                <a href="<?= htmlspecialchars(maps_url()) ?>" target="_blank" rel="noopener noreferrer">
                    <?= htmlspecialchars($address['line2'] ?? '') ?><br>
                    <?= htmlspecialchars(($address['line1'] ?? '') . ', ' . ($address['city'] ?? '') . ', ' . ($address['region'] ?? '')) ?>
                </a>
                <?php if (!empty($social['instagram'])): ?>
                    <a href="<?= htmlspecialchars($social['instagram']) ?>" target="_blank" rel="noopener noreferrer">Instagram</a>
                <?php endif; ?>
            </div>
            <div class="footer-cta">
                <a class="btn btn-book" <?= booking_attrs() ?>>Reserve</a>
                <p class="footer-note">Private scheduling powered by GlossGenius</p>
            </div>
        </div>
        <p class="footer-copy">&copy; <?= date('Y') ?> <?= htmlspecialchars($site_name) ?></p>
    </footer>

    <div class="sticky-book" id="sticky-book">
        <a class="btn btn-book btn-book-sticky" <?= booking_attrs() ?>>Reserve</a>
    </div>

    <script type="application/ld+json"><?= json_encode($json_ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
    <script src="<?= htmlspecialchars(url('assets/js/main.js')) ?>" defer></script>
</body>
</html>
