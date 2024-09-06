<?php
include 'jscss.php'; 
include 'topbar.php';
include 'navbar.php';
include 'slider.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hydropower Website</title>
    <!-- <style>
        /* Custom container styles */
        .container-custom {
            max-width: 1200px; /* Limit width for better readability */
            margin: 0 auto; /* Center the content */
            padding: 20px; /* Add some padding inside the container */
        }

        /* Additional styling for sections */
        .section {
            margin-bottom: 40px; /* Add space between sections */
            padding: 20px; /* Inner padding for better spacing */
            background-color: #f9f9f9; /* Slightly different background to separate sections visually */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            border-radius: 8px; /* Rounded corners for a modern look */
        }

        .section h1 {
            margin-bottom: 15px; /* Add space below the headings */
            font-size: 2em; /* Increase heading size */
        }

        .section p {
            line-height: 1.6; /* Better line height for readability */
            font-size: 1.1em; /* Slightly larger text for readability */
        }
    </style> -->
</head>
<body>

<div class="container">
    <div class="content-wrapper">
        <!-- Team Section -->
        <div class="team-section">
            <?php include 'team.php';  // Include the team section ?>
        </div>

        <!-- News Section -->
        <div class="news-section">
            <?php include 'news.php';  // Include the news section ?>
        </div>
    </div>
</div>

<?php include 'projects.php' ?>


<?php
include 'footer.php';?>