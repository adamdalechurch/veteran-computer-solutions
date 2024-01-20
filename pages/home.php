<?php include 'header.php'; ?>
<?php include 'templates/card.php'; ?>
<?php include 'templates/infobox.php'; ?>

<link rel="stylesheet" href="path/to/home.css">

<div class="parallax-background">
    <div class="container">
        <div class="row">
            <?php 
                echo card(
                    'assets/image/female_using_laptop.webp', 
                    'Home Computer Solutions', 
                    'We specialize in providing reliable, cost-effective computer repair services...', 
                    '#',
                    6
                );

                echo card(
                    'assets/image/tech_people_working.webp', 
                    'Business IT Support', 
                    'We provide comprehensive Business IT Support services to help companies...', 
                    '#linkToMoreInfo',
                    6
                );
            ?>
        </div>
        <div class="row">
            <button class="schedule-button" onclick="location.href='/contact'">Schedule an Appointment</button>
        </div>

        <div class="row">
            <?php 
                infoBox("About Us", "At Veteran Computer Solutions, we are passionate about providing quality IT support for all. Our team has extensive experience in IT management...", false);
                infoBox("Our Vision", "At Veteran Computer Solutions, our vision is two-fold. To provide cost-effective computer solutions for home users...", true);
                infoBox("Services", "We specialize in providing reliable, cost-effective computer repair services...", false);
            ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
