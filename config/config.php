<?php

/**
 * DCLL Configuration File
 * Path constants for consistent includes across features
 */

// Base paths
define('ROOT_PATH', dirname(__DIR__));
define('SHARED_PATH', ROOT_PATH . '/shared');
define('ASSETS_PATH', ROOT_PATH . '/assets');
define('FEATURES_PATH', ROOT_PATH . '/features');

// Shared resource paths
define('LAYOUTS_PATH', SHARED_PATH . '/layouts');
define('COMPONENTS_PATH', SHARED_PATH . '/components');

// Helper function to get relative path from root for URLs
function asset_url($path)
{
    return './assets/' . ltrim($path, '/');
}

function feature_url($feature, $path = '')
{
    return './features/' . $feature . '/' . ltrim($path, '/');
}
