<!-- projects.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hydropower Projects</title>
    <link rel="stylesheet" href="styles.css"> <!-- Ensure your styles are linked -->
    <style>
        /* Inline CSS */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .projects {
            margin: 0;
        }

        .projects h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .projects-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px; /* Space between projects */
        }

        .project {
            flex: 1;
            min-width: 300px; /* Minimum width to ensure responsiveness */
            max-width: 45%; /* Adjust width as needed */
            display: flex;
            flex-direction: column;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .project-photo {
            height: 200px;
            width: 100%;
            overflow: hidden;
        }

        .project-photo img {
            height: 100%;
            width: 100%;
            object-fit: cover; /* Ensures image covers the container */
            display: block;
        }

        .project-info {
            padding: 15px;
        }

        .project-info h3 {
            margin: 0 0 10px;
            font-size: 20px;
            color: #333;
        }

        .project-info p {
            margin-bottom: 10px;
            font-size: 14px;
            color: #666;
        }

        .project-details {
            font-size: 14px;
            color: #555;
        }

        .project-details div {
            margin-bottom: 5px;
        }

        .project-details strong {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <section class="projects">
            <h2>Running Projects</h2>
            <div class="projects-wrapper">
                <div class="project">
                    <div class="project-photo">
                        <img src="./images/photo3.webp" alt="Charnawati Hydropower 3.52 MW">
                    </div>
                    <div class="project-info">
                        <h3>Charnawati Hydropower 3.52 MW</h3>
                        <p>Charnawati Khola Hydroelctric Project at Bhimeswor Municipality of Dolkha district is developed by Nepal Hydro Developer Limited. It is a run of river type project in operation since June 2013.</p>
                        <div class="project-details">
                            <div><strong>Project Type:</strong> RoR</div>
                            <div><strong>Installed Capacity:</strong> 3.52 MW</div>
                            <div><strong>Design Discharge:</strong> 2.19 m<sup>3</sup>/s</div>
                            <div><strong>Gross Head:</strong> 199 m</div>
                            <div><strong>Net Head:</strong> 191.99 m</div>
                        </div>
                    </div>
                </div>

                <div class="project">
                    <div class="project-photo">
                        <img src="./images/photo4.webp" alt="Lower Charnawati Project 6.8 MW">
                    </div>
                    <div class="project-info">
                        <h3>Lower Charnawati Project 6.8 MW</h3>
                        <p>Charnawati Khola Hydroelctric Project at Bhimeswor Municipality of Dolkha district is developed by Nepal Hydro Developer Limited. It is a run of river type project in operation since June 2013.</p>
                        <div class="project-details">
                            <div><strong>Project Type:</strong> RoR</div>
                            <div><strong>Installed Capacity:</strong> 6.8 MW</div>
                            <div><strong>Design Discharge:</strong> 4.19 m<sup>3</sup>/s</div>
                            <div><strong>Gross Head:</strong> 203 m</div>
                            <div><strong>Net Head:</strong> 194.15 m</div>
                        </div>
                    </div>
                </div>
                <!-- Add more project items as needed -->
            </div>
        </section>
    </div>
</body>
</html>
