<?php
// Get the path from the URL
$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Convert path to lowercase and replace hyphens with underscores
$path = str_replace('-', '_', strtolower($path));

// Check for specific file requests like favicon.ico
if ($path === 'favicon.ico') {
    $filePath = __DIR__ . '/public/' . $path;
} else {
    // Construct the file path for other requests
    $filePath = __DIR__ . '/pages/' . $path . '.php';

    // Default path for home
    if (empty($path)) {
        $filePath = __DIR__ . '/pages/home.php';
    }
}

// Sanitize the file path
$filePath = sanitize($filePath);

// Check if the file exists and is not a directory
if (file_exists($filePath) && is_file($filePath)) {
    require $filePath;
} else {
    // Handle 404 Not Found
    header("HTTP/1.0 404 Not Found");
    echo '404 Not Found';
}

function sanitize($path) {
    return create_xplat_path($path);
}

// Creates a path safe for Windows and Linux
function create_xplat_path($path) {
    $path = str_replace('\\', '/', $path);
    $path = str_replace('/', DIRECTORY_SEPARATOR, $path);
    return strtolower($path);
}
?>
