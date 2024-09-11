<link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bundle.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="fonts/css/all.min.css">


    <link rel="stylesheet" href="./css/styles.css">

<?php include 'topbar.php' ?>
<?php include 'navbar.php' ?>
<?php include 'jscss.php' ?>


<div class="contact-section" id="contact-us" style="padding: 40px 0; background-color: #f9f9f9;">
    <div class="container" style="max-width: 900px; margin: 0 auto;">

        <!-- Contact Info -->
        <div class="contact-info" style="text-align: center; margin-bottom: 30px;">
            <h2 style="font-size: 32px; color: #333; margin-bottom: 15px;">Contact Us</h2>
            <p style="font-size: 18px; color: #666; margin-bottom: 10px;">Feel free to contact us for any inquiries or support.</p>
            <p style="font-size: 16px; color: #333;"><strong>Phone:</strong> +977-51-2100985-6</p>
            <p style="font-size: 16px; color: #333;"><strong>Email:</strong> softminds@company-power.com</p>
            <p style="font-size: 16px; color: #333;"><strong>Address:</strong> 123 Hydropower Street, Kathmandu, Nepal</p>
        </div>

        <!-- Contact Form -->
        <div class="contact-form" style="max-width: 600px; margin: 0 auto;">
            <form action="send_contact.php" method="POST">
                <div style="margin-bottom: 15px;">
                    <input type="text" name="name" placeholder="Your Name" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px;" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <input type="email" name="email" placeholder="Your Email" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px;" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <input type="text" name="subject" placeholder="Subject" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px;" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <textarea name="message" rows="5" placeholder="Message" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px;" required></textarea>
                </div>
                <div>
                    <button type="submit" style="width: 100%; padding: 12px; background-color: #333; color: white; border: none; border-radius: 5px;">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>
