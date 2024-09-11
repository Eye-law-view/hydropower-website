<?php
include 'jscss.php'; 
?>

</head>
<body>
    
<?php
include 'header.php';
?>

<?php
include 'slider.php';
?>

<div class="container">
<section id="about-us">  <!-- Assign id="about-us" -->
        <?php include 'about-us.php'; ?>
    </section>
    <div class="content-wrapper">
        
        <!-- Team Section -->
        <div class="team-section" id="projects">  <!-- Assign id="projects" -->
            <?php include 'team.php';  // Include the team section ?>
            <?php include 'projects.php'; ?>
        </div>

        <!-- News Section -->
        <div class="news-section" id="news">  <!-- Assign id="news" -->
            <?php include 'news.php';  // Include the news section ?>
        </div>
    </div>

    <!-- About Us Section -->

</div>

<?php
include 'footer.php';
?>

