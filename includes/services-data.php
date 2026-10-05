<?php
/*
 * Service menu seeded from Ultra Salon Suites listing.
 * Prices are "starting at" — confirm against GlossGenius before launch.
 */
$service_groups = [
    [
        'id'    => 'cuts',
        'title' => 'Cuts',
        'items' => [
            ['name' => "Women's Cuts", 'price' => '$40', 'note' => ''],
            ['name' => "Men's Cuts", 'price' => '$25', 'note' => ''],
            ['name' => "Girls' Cuts", 'price' => '$25', 'note' => ''],
            ['name' => "Boys' Cuts", 'price' => '$20', 'note' => ''],
        ],
    ],
    [
        'id'    => 'color',
        'title' => 'Color',
        'items' => [
            ['name' => 'Color Retouch', 'price' => 'from $50', 'note' => ''],
            ['name' => 'Partial Highlight', 'price' => 'from $70', 'note' => ''],
            ['name' => 'Full Highlight', 'price' => 'from $90', 'note' => ''],
            ['name' => 'Balayage', 'price' => 'from $150', 'note' => ''],
            ['name' => 'Gloss and Shine', 'price' => 'from $25', 'note' => ''],
            ['name' => 'Color Corrections', 'price' => 'Consultation', 'note' => 'Consultation required'],
        ],
    ],
    [
        'id'    => 'extensions',
        'title' => 'Locs & Extensions',
        'items' => [
            ['name' => 'Extension Installation and Maintenance', 'price' => 'Consultation', 'note' => 'Consultation required'],
        ],
    ],
    [
        'id'    => 'styling',
        'title' => 'Styling & Treatments',
        'items' => [
            ['name' => 'Blow Out', 'price' => 'from $25', 'note' => ''],
            ['name' => 'Upstyle', 'price' => 'from $45', 'note' => ''],
            ['name' => 'Malibu', 'price' => 'from $30', 'note' => ''],
            ['name' => 'Conditioning / Protein Treatment', 'price' => 'from $25', 'note' => ''],
            ['name' => 'Perm', 'price' => 'from $60', 'note' => ''],
            ['name' => 'Rusk Anticurl Straightening / Smoothing', 'price' => 'from $250', 'note' => ''],
        ],
    ],
    [
        'id'    => 'wax',
        'title' => 'Waxing',
        'items' => [
            ['name' => 'Eyebrow Wax', 'price' => 'from $15', 'note' => ''],
            ['name' => 'Lip Wax', 'price' => '$15', 'note' => ''],
            ['name' => 'Chin Wax', 'price' => '$15', 'note' => ''],
            ['name' => 'Nose Wax', 'price' => '$15', 'note' => ''],
        ],
    ],
];

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
