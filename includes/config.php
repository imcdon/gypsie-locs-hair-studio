<?php
/*
 * Site-wide settings. GlossGenius URL is the single source for all Book Now CTAs.
 */
require_once __DIR__ . '/paths.php';
require_once __DIR__ . '/services-data.php';

$site_name = 'Gypsie Locs Hair Studio';
$site_domain = 'gypsielocshairstudio.com'; // TBD — update when domain is confirmed
$site_url = 'https://gypsielocshairstudio.com';
$site_tagline = 'Locs, color, and custom hair care in Waterford, MI.';
$site_description = 'Gypsie Locs Hair Studio — Joanna Shaver. Locs, cuts, color, and styling at Ultra Salon Suites in Waterford, Michigan. Book online.';
$owner_name = 'Joanna Shaver';

$phone = '(248) 425-5110';
$phone_href = 'tel:+12484255110';
$email = ''; // TBD
$email_href = '';

$address = [
    'line1'      => '5066 Highland Rd',
    'line2'      => 'Ultra Salon Suites #11',
    'city'       => 'Waterford',
    'region'     => 'MI',
    'postal_code' => '48327',
    'country'    => 'US',
];

$hours_note = 'Hours vary — book online for available times.';

$social = [
    // Confirm Instagram handle with Joanna
    'instagram' => '',
];

// GlossGenius — all Book Now buttons use these
$booking_url = 'https://gypsielocshairstudio.glossgenius.com/';
$booking_services_url = 'https://gypsielocshairstudio.glossgenius.com/services';

$ultra_listing_url = 'https://www.ultrasalonsuites.com/gypsie-locs-hair-studio';

$nav_links = [
    'Services'  => 'services/',
    'Portfolio' => 'portfolio/',
    'About'     => 'about/',
    'Contact'   => 'contact/',
];

/**
 * Book Now anchor attributes.
 */
function booking_attrs(string $url = ''): string
{
    global $booking_services_url;
    $href = $url !== '' ? $url : $booking_services_url;
    return 'href="' . htmlspecialchars($href) . '" target="_blank" rel="noopener noreferrer"';
}

function address_lines(): string
{
    global $address;
    $parts = array_filter([
        $address['line1'] ?? '',
        $address['line2'] ?? '',
        trim(($address['city'] ?? '') . ', ' . ($address['region'] ?? '') . ' ' . ($address['postal_code'] ?? '')),
    ]);
    return implode("\n", $parts);
}

function maps_url(): string
{
    global $address;
    $q = urlencode(trim(($address['line1'] ?? '') . ', ' . ($address['city'] ?? '') . ', ' . ($address['region'] ?? '') . ' ' . ($address['postal_code'] ?? '')));
    return 'https://www.google.com/maps/search/?api=1&query=' . $q;
}
