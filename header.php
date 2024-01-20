<?php include 'pages.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IT Consulting</title>
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/layout.css">
    <link rel="stylesheet" href="assets/css/navigation.css">
    <link rel="stylesheet" href="assets/css/utilities.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/header.css">
    
    <!-- pages -->
    <link rel="stylesheet" href="assets/css/about.css">
</head>
<body>
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light top-nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <!-- Add your site logo here -->
                <img src="path-to-your-logo.svg" alt="Logo" class="logo">
            </a>
            <button class="navbar-toggler menu-button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
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