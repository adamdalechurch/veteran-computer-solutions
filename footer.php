</div> <!-- end of main -->
<link rel="stylesheet" href="assets/css/footer.css">

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Bottom Menu -->
                <div class="bottom-menu">
                    <?php foreach ($pages as $link): if(!$link['showInMenu']) continue; ?>
                        <a class="link" href="<?php echo $link['link']; ?>"><?php echo $link['title']; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-6" style='text-align:center'>
                <img src="assets/image/vob.webp" alt="Veteran Owned Business" class="avatar">
                <div class="policy-links">
                    <a href="/privacy-policy" class="white-hyperlink">Privacy Policy</a> / <a href="/terms-of-service" class="white-hyperlink">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        © <?php echo date('Y'); ?> Veteran Computer Solutions
            <a href="https://www.facebook.com/veterancomputersolutions">
            <img src="assets/image/facebook.svg" alt="Facebook" class="social-media-icon">
        </a>
    </div>
</div>
