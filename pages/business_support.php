<?php include 'header.php'; ?>
<?php include 'templates/card.php'; ?>

<div class="container">
    <h3 class="page-header">Business IT Support</h3>
    <p class="para">
       Veteran Computer Solutions offers IT Solutions for businesses and organizations of all sizes. Our experienced professionals have the knowledge to diagnose and resolve your IT issues efficiently and effectively, so you can get back to focusing on your business goals. With us, you can be sure your technology is working for you and will recognize opportunities to not only keep your business running efficiently, but also help take your organization to the next level.
    </p>
    <div class="row">
        <?php 
            echo card(
                'assets/image/on_site_tech_support.webp', 
                'On-Site Tech Support', 
                'We are here to get your technology functioning quickly again. Our team provides services tailored to your business’s unique needs.'
            );

            echo card(
                'assets/image/networking.webp', 
                'Networking', 
                'New network installs, upgrades or preventative maintenance, your network is the backbone to your business connectivity.'
            );

            echo card(
                'assets/image/backup_solutions.webp', 
                'Backup Solutions & Recovery', 
                'Protect your data from accidental loss or technology crashes. Loss data and downtime cost lost time and revenue.'
            );

            // Add more cards for the remaining items
        ?>
    </div>
</div>

<?php include 'footer.php'; ?>
