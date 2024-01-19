<?php

// get all files from /pages and build a menu array:
$files = scandir('pages');
$menu = [];
foreach ($files as $page) {
    if (strpos($page, '.php') !== false) {
        $page = strtolower(str_replace('.php', '', $page));
        $pages[] = [
            'link' => '/' . $page != 'home' ? $page : '',
            'title' => ucfirst($page)
        ];
    }
}

?>