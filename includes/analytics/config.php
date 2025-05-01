<?php

/**
 * Ultimate Cursor Analytics Configuration
 *
 * @package UltimateCursor
 * @since 1.3.7
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get analytics configuration parameters
 *
 * @return array Analytics configuration
 */
function uc_get_analytics_config() {
    return array(
        'sdk_version'   => '1.0.0',
        'product_id'    => '3',
        'plugin_name'   => 'Photo Sphere Viewer',
        'plugin_title'  => 'Greetings from WPXERO! 🌟',
        'api_endpoint'  => 'https://wpxero.com/wp-json/dci/v1/data-insights',
        'slug'          => 'photo-sphere-viewer',
        'core_file'     => false,
        'plugin_deactivate_id' => false,
        'public_key'    => 'pk_yjEJkOlcy88n4UAgdjdt4YjgXx4rxmf3',
        'is_premium'    => false,
        'popup_notice'  => false,
        'deactivate_feedback' => true,
        'text_domain'   => 'photo-sphere-viewer',
        'plugin_msg'    => 'Make a big impact on WordPress by sharing non-sensitive plugin data. Get valuable updates and be part of something amazing!',
    );
}
