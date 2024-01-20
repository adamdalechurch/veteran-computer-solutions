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

<style>
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
    border: none;
    border-radius: 4px;
}

.call-button:hover {
    background-color: #9a0007;
}

</style>
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