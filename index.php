<?php
// Get the path from the URL
$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Convert path to lowercase
$path = strtolower($path);

// Construct the file path
$filePath = __DIR__ . '/pages/' . $path . '.php';

// Check if the file exists and is not a directory
if (file_exists($filePath) && is_file($filePath)) {
    require $filePath;
} else {
    // Handle 404 Not Found
    header("HTTP/1.0 404 Not Found");
    echo '404 Not Found';
}
?>