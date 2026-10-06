<?php
/*
 * Service menu seeded from Ultra Salon Suites listing.
 * Prices are starting points — confirm against GlossGenius before launch.
 */
$service_groups = [
    [
        'id'    => 'color',
        'title' => 'Color',
        'lede'  => 'Dimensional color, precise retouches, and custom formulations — Wella, Redken, and Rusk certified.',
        'items' => [
            ['name' => 'Color Retouch', 'price' => 'from $50', 'note' => ''],
            ['name' => 'Partial Highlight', 'price' => 'from $70', 'note' => ''],
            ['name' => 'Full Highlight', 'price' => 'from $90', 'note' => ''],
            ['name' => 'Balayage', 'price' => 'from $150', 'note' => ''],
            ['name' => 'Gloss and Shine', 'price' => 'from $25', 'note' => ''],
            ['name' => 'Color Corrections', 'price' => 'By consultation', 'note' => 'Consultation required'],
        ],
    ],
    [
        'id'    => 'extensions',
        'title' => 'Locs & Extensions',
        'lede'  => 'Dream Catchers extension specialist — installation, maintenance, and loc care tailored to your hair.',
        'items' => [
            ['name' => 'Extension Installation & Maintenance', 'price' => 'By consultation', 'note' => 'Consultation required'],
        ],
    ],
    [
        'id'    => 'cuts',
        'title' => 'Cuts',
        'lede'  => 'Thoughtful shaping for every age — cut to fit your texture, lifestyle, and face.',
        'items' => [
            ['name' => "Women's Cut", 'price' => '$40', 'note' => ''],
            ['name' => "Men's Cut", 'price' => '$25', 'note' => ''],
            ['name' => "Girls' Cut", 'price' => '$25', 'note' => ''],
            ['name' => "Boys' Cut", 'price' => '$20', 'note' => ''],
        ],
    ],
    [
        'id'    => 'styling',
        'title' => 'Styling & Treatments',
        'lede'  => 'Occasion styling, restorative treatments, and smoothing — finished with care.',
        'items' => [
            ['name' => 'Blow Out', 'price' => 'from $25', 'note' => ''],
            ['name' => 'Upstyle', 'price' => 'from $45', 'note' => ''],
            ['name' => 'Malibu Treatment', 'price' => 'from $30', 'note' => ''],
            ['name' => 'Conditioning / Protein Treatment', 'price' => 'from $25', 'note' => ''],
            ['name' => 'Perm', 'price' => 'from $60', 'note' => ''],
            ['name' => 'Rusk Anticurl Straightening / Smoothing', 'price' => 'from $250', 'note' => ''],
        ],
    ],
    [
        'id'    => 'wax',
        'title' => 'Waxing',
        'lede'  => 'Clean, precise detailing for brows and face.',
        'items' => [
            ['name' => 'Eyebrow Wax', 'price' => 'from $15', 'note' => ''],
            ['name' => 'Lip Wax', 'price' => '$15', 'note' => ''],
            ['name' => 'Chin Wax', 'price' => '$15', 'note' => ''],
            ['name' => 'Nose Wax', 'price' => '$15', 'note' => ''],
        ],
    ],
];

/** Featured categories for the home page (order = display). */
$home_service_spotlight = ['color', 'extensions', 'cuts', 'styling'];

/*
 * Portfolio from Ultra Salon Suites public listing.
 * category: locs | color | cuts | styles
 */
$portfolio_items = [
    [
        'id'       => 1,
        'category' => 'styles',
        'label'    => 'Extensions',
        'alt'      => 'Before and after hair extensions with long wavy honey-brown style',
        'src'      => 'assets/img/portfolio/work-01.jpg',
    ],
    [
        'id'       => 2,
        'category' => 'color',
        'label'    => 'Color',
        'alt'      => 'Blonde color guide — ash, honey, sandy, metallic, pearl, beige, ice, bronde',
        'src'      => 'assets/img/portfolio/work-02.jpg',
    ],
    [
        'id'       => 3,
        'category' => 'color',
        'label'    => 'Color',
        'alt'      => 'Deep burgundy red hair color with glossy finish',
        'src'      => 'assets/img/portfolio/work-03.jpg',
    ],
    [
        'id'       => 4,
        'category' => 'color',
        'label'    => 'Balayage',
        'alt'      => 'Red to copper to blonde balayage waves',
        'src'      => 'assets/img/portfolio/work-04.jpg',
    ],
];

function service_group_by_id(string $id): ?array
{
    global $service_groups;
    foreach ($service_groups as $group) {
        if (($group['id'] ?? '') === $id) {
            return $group;
        }
    }
    return null;
}
