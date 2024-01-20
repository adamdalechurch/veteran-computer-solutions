<?php include 'header.php'; ?>
<?php include 'templates/card.php'; ?>
<?php include 'templates/infobox.php'; ?>

<link rel="stylesheet" href="assets/css/home.css">
<style>
.card {
    font-family: "Roboto", "Helvetica", "Arial", sans-serif;
    width: calc(100% / 2 - 20px) !important; /* Adjust the division value based on the number of cards per row */
}

.info-box {
    font-family: "Roboto", "Helvetica", "Arial", sans-serif;
    width: calc(100% / 3 - 20px) !important; /* Adjust the division value based on the number of info boxes per row */
}

.row{
    margin-top: 30px;
}

@media only screen and (max-width: 1200px) {
    .card {
        width: calc(100% / 2 - 20px) !important;
    }
}

@media only screen and (max-width: 786px) {
    .card, .info-box {
        width: 100% !important;
    }
}
</style>
<div class="parallax-background">
    <div class="container">
        <div class="row">
            <?php 
                echo card(
                    'assets/image/female_using_laptop.webp', 
                    'Home Computer Solutions', 
                    'We specialize in providing reliable, cost-effective computer repair services. We understand the importance of having reliable, efficient technology, and believe that technology should enhance your life and not be a source of frustration. Our experienced technicians are dedicated to helping you get the most from your technology.', 
                    '#',
                    6
                );

                echo card(
                    'assets/image/tech_people_working.webp', 
                    'Business IT Support', 
                    "We provide comprehensive Business IT Support services to help companies of all sizes stay ahead in today's digital landscape. Our team of experienced IT professionals are available to ensure your systems are always up and running, and can provide tailored solutions to meet your specific business needs. We believe that all businesses should have access to quality IT Support, and we are here to help you succeed.", 
                    '#linkToMoreInfo',
                    6
                );
            ?>
        </div>
        <div class="row">
            <button class="schedule-button" onclick="location.href='/contact'">&#128197; Schedule an Appointment</button>
        </div>

        <div class="row">
            <?php 
                infoBox(
                    "About Us", 
                    "At Veteran Computer Solutions, we are passionate about providing quality IT support for all. Our team has extensive experience in IT management we work closely with our clients to understand their unique challenges and provide customized solutions to meet their needs no matter how small or large.",
                    false
                );

                infoBox(
                    "Our Vision", 
                    "At Veteran Computer Solutions, our vision is two-fold. To provide cost-effective computer solutions for home users, and to provide quality IT support for businesses of all sizes. We believe that technology should enhance your life, not be a source of frustration. Our team of experienced IT professionals is dedicated to helping you get the most from your technology.",
                    false
                );

                infoBox(
                    "Services", 
                    "We specialize in providing reliable, cost-effective computer repair services. We understand the importance of having reliable, efficient technology, and believe that technology should enhance your life and not be a source of frustration. Our experienced technicians are dedicated to helping you get the most from your technology.",
                    false
                );
            ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
