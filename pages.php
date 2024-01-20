<?php

// $files = scandir('pages');
// $menu = [];
// foreach ($files as $page) {
//     if (strpos($page, '.php') !== false) {
//         $page = strtolower(str_replace('.php', '', $page));
//         $pages[] = [
//             'link' => '/' . $page != 'home' ? $page : '',
//             'title' => ucfirst($page)
//         ];
//     }
// }
$pages = [
    [
        'link' => '/',
        'title' => 'Home',
        'showInMenu' => true
    ],
    [
        'link' => '/about',
        'title' => 'About',
        'showInMenu' => true
    ],
    [
        'link' => '/business-support',
        'title' => 'Business Support',
        'showInMenu' => true
    ],
    [
        'link' => '/home-solutions',
        'title' => 'Home Solutions',
        'showInMenu' => true
    ],
    [
        'link' => '/it-consulting',
        'title' => 'IT Consulting',
        'showInMenu' => true
    ],
    [
        'link' => '/contact',
        'title' => 'Contact',
        'showInMenu' => true
    ],
    [
        'link' => '/privacy-policy',
        'title' => 'Privacy Policy',
        'showInMenu' => false
    ],
    [
        'link' => '/terms-of-service',
        'title' => 'Terms of Service',
        'showInMenu' => false
    ]
];
?>