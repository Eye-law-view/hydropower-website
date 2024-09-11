<style>
    /* Company name styling */
.company-name {
    font-weight: bold; /* Makes text bold */
    display: flex;
    font-size: 1.25rem; /* Adjusts font size to make it stand out */
    color: #007bff; /* Change to your preferred color */
    text-transform: uppercase; /* Makes text uppercase for emphasis */
    margin-left: -120px; /* Space between company name and other nav items */
}

.company-name .nav-link {
    text-decoration: none; /* Removes underline from link */
    color: inherit; /* Inherits color from .company-name */
    padding: 10px 15px; /* Adjust padding as needed */
    transition: color 0.3s ease; /* Smooth color transition on hover */
}

.company-name .nav-link:hover {
    color: #0056b3; /* Change to a darker shade for hover effect */
    border-radius: 4px; /* Rounded corners for the hover effect */
}

</style>

<nav class="navbar">
    <a href="index.php" class="navbar-brand">
        <img src="./images/logo.png" alt="Logo" class="logo">
    </a>
    <span class="company-name">
    <a class="nav-link" href="index.php">PANCHKHAPAN<br>Hydropower</a>
</span>

    <ul class="navbar-nav">
    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="#about-us">About Us</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#company-overview">Company Overview</a></li>
                <li><a class="dropdown-item" href="#vision-mission">Vision & Mission</a></li>
                <li><a class="dropdown-item" href="#ceo-message">CEO Messages</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="#projects">Projects</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#project1">Sagar Hydropower 3.2 MW</a></li>
                <li><a class="dropdown-item" href="#project2">Parajuli Hydropower 4.5MW</a></li>
                
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="#reports">Reports</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#annual-reports">Annual Reports</a></li>
                <li><a class="dropdown-item" href="#financial-reports">Financial Reports</a></li>
                <li><a class="dropdown-item" href="#progress-reports">Progress Reports</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="#news">News & Events</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#publication-notice">Publication Notice</a></li>
                <li><a class="dropdown-item" href="#vacancy">Vacancy</a></li>
                <li><a class="dropdown-item" href="#media-news-events">Media News & Events</a></li>
                <li><a class="dropdown-item" href="#hydropower-interview">Hydropower Interview</a></li>
            </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact</a></li>
        <li class="nav-item ml-auto">
            <?php include 'onoff.php'; ?>
        </li>
    </ul>
</nav>
