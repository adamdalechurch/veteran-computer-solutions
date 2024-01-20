<?php include 'header.php'; ?>
<?php include 'templates/card.php'; ?>

<div class="container">
    <h3 class="page-header">IT Consulting</h3>
    <p class="para">Veteran Computer Solutions is here to help take the guesswork out of your tech challenges. With years of experience in a wide range of technical domains, our team of experts are ready to offer you the highest quality IT consulting services. From IT strategy and planning to IT project management, assessments, budgeting and auditing, we’ve got you covered! Let us help simplify your IT needs and solve your technical challenges today.</p>

    <div class="row">
        <?php 
            echo card(
                'assets/image/it_assessments.webp', 
                'IT Assessments', 
                'We will assess your entire IT system including staff to determine any area of deficiencies and ensuring everything is up to date and running efficiently while maximizing your bottom line.', 
            );

            echo card(
                'assets/image/it_strategy_and_planning.webp', 
                'IT Strategy & Planning', 
                'We have many years of experience managing IT projects from start to finish and ensuring each project meets scope, time, and budget while ensuring all stakeholders are happy.', 
            );

            echo card(
                'assets/image/it_project_management.webp', 
                'IT Project Management', 
                "With years of experience we will ensure you get what your company needs with an eye on future growth. We excel in making sure you don't pay for more than you need.",
            );

            echo card(
                'assets/image/business_continuity.webp', 
                'Business Continuity & Disaster Recovery', 
                'Everything works great until it doesn\'t. We specialize in ensuring your systems are available when you need them while limiting business downtime.', 
            );
        ?>
    </div>
</div>

<?php include 'footer.php'; ?>
