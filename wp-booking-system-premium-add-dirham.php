<?php

/**
 * Plugin Name: WP Booking System - Add UAE Dirham Currency
 * Plugin URI: https://wpbookingcalendar.com/
 * Description: Adds the UAE Dirham currency to the WP Booking System plugin
 * Version: 1.0
 * Author: trueqap
 * Author URI: https://github.com/trueqap
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wpbs
 * Domain Path: /languages
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Check if the WP Booking System - Add UAE Dirham Currency plugin is installed and active
 *
 */
if (! function_exists('wpbs_add_dirham_currency') || ! function_exists('wpbs_add_dirham_currency_symbol')) {
    return;
}

/**
 * Add the UAE Dirham currency to the list of available currencies
 *
 * @param array $currencies
 *
 * @return array
 *
 */
function wpbs_add_dirham_currency($currencies)
{
    $currencies['AED'] = 'United Arab Emirates dirham';
    return $currencies;
}

/**
 * Add the UAE Dirham currency symbol to the list of available currency symbols
 *
 * @param array $currencies
 *
 * @return array
 *
 */
function wpbs_add_dirham_currency_symbol($currencies)
{
    $currencies['AED'] = 'AED';
    return $currencies;
}

/**
 * Adds the UAE Dirham currency to the WP Booking System plugin
 *
 */
function wpbs_add_uae_dirham_currency_init()
{
    add_filter('wpbs_currencies', 'wpbs_add_dirham_currency', 10, 1);
    add_filter('wpbs_currency_symbol', 'wpbs_add_dirham_currency_symbol', 10, 1);
}

add_action('plugins_loaded', 'wpbs_add_uae_dirham_currency_init');
