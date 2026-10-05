<?php
require_once __DIR__ . '/includes/config.php';

header('Content-Type: application/xml; charset=UTF-8');

$pages = [
    ['path' => '', 'priority' => '1.0'],
    ['path' => 'services/', 'priority' => '0.9'],
    ['path' => 'portfolio/', 'priority' => '0.8'],
    ['path' => 'about/', 'priority' => '0.7'],
    ['path' => 'contact/', 'priority' => '0.7'],
    ['path' => 'book/', 'priority' => '0.9'],
];

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($pages as $page): ?>
  <url>
    <loc><?= htmlspecialchars(absolute_url($page['path'])) ?></loc>
    <changefreq>weekly</changefreq>
    <priority><?= htmlspecialchars($page['priority']) ?></priority>
  </url>
<?php endforeach; ?>
</urlset>
