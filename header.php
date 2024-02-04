<?php include 'pages.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="HandheldFriendly" content="True">
    <meta name="keywords" content="Veteran Computer Solutions, computer repair services, computer repair, technology, IT support, small businesses, St Petersburg, Clearwater, Tampa Bay, IT consulting, cyber security">
    <link rel="canonical" href="https://veterancomputersolutions.com<?php echo $canonical ?>">
    <meta property="og:locale" content="en_US">
    <meta name="application-name" content="Veteran Computer Solutions">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Veteran Computer Solutions">
    <meta name="subject" content="Computer Repair and Full IT Services">
    <meta name="description" content="Veteran Computer Solutions - Serving Home & Business Technology Needs & Computer Repair">
    <meta name="language" content="English">
    <meta name="google-site-verification" content="<GOOGLE-SITE-VERIFICATION-CODE>">
    <script src="https://www.google.com/recaptcha/api.js?render=<RECAPTCHA-V3-SITE-KEY>" async defer></script>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/image/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/image/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/image/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/image/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/image/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/image/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/image/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/image/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/image/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/image/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/image/favicon-16x16.png">
    <!-- favicon is a png -->
    <link rel="icon" type="image/x-icon" href="assets/image/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="assets/image/favicon.ico">

    <link rel="manifest" href="assets/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/image/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Veteran Computer Solutions - St Petersburg Computer Repair</title>
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/layout.css">
    <link rel="stylesheet" href="assets/css/utilities.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <style>
        @font-face {
            font-family: 'roboto,sans-serif Sans';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: local('Martel Sans Regular'), local('MartelSans-Regular'), url(https://fonts.gstatic.com/s/martelsans/v6/h0GsssGi7VdzDgKjM-4d8hjYx-4.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        * {
            font-family: 'Martel Sans', sans-serif !important;
        }
        body {
            margin: 0;
            overflow-x: hidden;
            width: 100%;
        }
        .grecaptcha-badge {
            visibility: hidden;
        }
        .call-button {
            background-color: #d32f2f;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            position: absolute;
            right: 0;
            top: 0;
            margin: 10px;
            border-radius: 4px;
        }
        .call-button:hover {
            background-color: #9a0007;
        }
</style>
<!-- Body content goes here -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RXPEP94WWH"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-RXPEP94WWH');
</script>
</head>
<body>
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light top-nav">
        <div class="container-fluid">
            <button class="navbar-toggler menu-button" onclick='toggleMobileMenu()' type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                &#9776;
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php foreach ($pages as $link): if(!$link['showInMenu']) continue; ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $link['link']; ?>"><?php echo $link['title']; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- call button that floats right -->
            <button class="call-button" onclick="location.href='tel:727-232-4473'">
                <span class="phone-number" style="color:white!important">&#9743;</span>
                727-232-4473
            </button>
        </div>
    </nav>
    <div class="subheader">
        <!-- Subheader content -->
        <div class="container">
            <div class="brand-container">
                <div class="logo-container">
                    <img src="assets/image/logo.svg" alt="Logo" class="logo">
                </div>
                <div class="title-container">
                    <h2>Veteran Computer Solutions</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function toggleMobileMenu() {
    var x = document.getElementById("navbarNav");
    if (x.className === "collapse navbar-collapse") {
        x.className += " show";
    } else {
        x.className = "collapse navbar-collapse";
    }
}
</script>
<div class="main">
