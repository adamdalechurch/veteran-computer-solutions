<?php 
// Include header
include 'header.php';
?>
<link rel="stylesheet" href="assets/css/contact.css">
<div class="form-container">
    <form class="form" method="POST" action="https://formsubmit.co/d9f7bd7facf3e405ec380c04ea5ab323">
        <h2 class="page-header">Contact Us</h2>
        <p class="para">
            At Veteran Computer Solutions our first priority 
            is ensuring your technology works for you
            and that we offer the best support possible.
        </p>
        <p class="para">
            Fill out the form according to your 
            needs and we will answer your inquiry the same 
            business day.
        </p>
        <input type="text" class="input" name="name" placeholder="Name" required />
        <input type="email" class="input" name="email" placeholder="Email" required />
        <textarea class="input" name="message" placeholder="Message" rows="4" required></textarea>

        <button type="submit" class="submit-button">
            Submit
        </button>
    </form>
</div>

<!-- Include your footer here -->
<?php include 'footer.php'; ?>
