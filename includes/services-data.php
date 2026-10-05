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
 * Portfolio placeholders until Joanna supplies photos.
 * category: locs | color | cuts | styles
 */
$portfolio_items = [
    ['id' => 1, 'category' => 'locs', 'label' => 'Locs', 'alt' => 'Locs work placeholder'],
    ['id' => 2, 'category' => 'locs', 'label' => 'Locs', 'alt' => 'Locs work placeholder'],
    ['id' => 3, 'category' => 'color', 'label' => 'Color', 'alt' => 'Color work placeholder'],
    ['id' => 4, 'category' => 'color', 'label' => 'Color', 'alt' => 'Color work placeholder'],
    ['id' => 5, 'category' => 'cuts', 'label' => 'Cuts', 'alt' => 'Cut work placeholder'],
    ['id' => 6, 'category' => 'styles', 'label' => 'Styles', 'alt' => 'Styling work placeholder'],
    ['id' => 7, 'category' => 'locs', 'label' => 'Locs', 'alt' => 'Locs work placeholder'],
    ['id' => 8, 'category' => 'styles', 'label' => 'Styles', 'alt' => 'Styling work placeholder'],
];
