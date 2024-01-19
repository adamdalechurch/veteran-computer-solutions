<?php include 'pages.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IT Consulting</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="header">
    <nav class="top-nav">
        <!-- Navigation links here -->
        <!-- <a href="#" class="nav-link">Link 1</a> -->
        <?php foreach ($pages as $link):?>
            <a href="<?php echo $link['link']; ?>" class="nav-link"><?php echo $link['title']; ?></a>
        <?php endforeach; ?>
        <!-- More links -->
        <button class="menu-button">Menu</button>
    </nav>
    <div class="subheader">
        <!-- Subheader content -->
    </div>
</div>