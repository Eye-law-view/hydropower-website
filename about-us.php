<?php include "jscss.php" ?>

<style>
    .about-section {
        padding: 80px 20px;
        background-color: #f1f1f1;
        text-align: center;
    }

    .about-section h1 {
        font-size: 36px;
        color: #2c3e50;
        margin-bottom: 20px;
        font-weight: 600;
        text-transform: uppercase;
    }

    .about-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 1100px;
        margin: 0 auto;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        padding: 40px;
    }

    .about-img {
        width: 100%;
        height: auto;
        max-width: 700px;
        border-radius: 10px;
        margin-bottom: 30px;
    }

    .about-text {
        margin-top: 20px;
        text-align: center;
    }

    .about-text h2 {
        font-size: 30px;
        color: #2c3e50;
        margin-bottom: 20px;
        font-weight: 600;
    }

    .about-text p {
        font-size: 18px;
        color: #7f8c8d;
        line-height: 1.8;
        margin-bottom: 15px;
    }

    @media (min-width: 768px) {
        .about-content {
            flex-direction: row;
            text-align: left;
        }

        .about-img {
            margin-right: 40px;
            margin-bottom: 0;
        }

        .about-text {
            max-width: 600px;
        }

        .about-text h2 {
            text-align: left;
        }
    }
</style>
<section id="about-us" class="about-section">

    <h1>About Us</h1>
    <div class="about-content">
        <img src="./images/photo1.jpeg" class="about-img" alt="Lower Modi Khola Hydroelectric Project">
        <div class="about-text">
            <h2>Modi Khola Hydroelectric</h2>
            <p>The Lower Modi Khola Hydroelectric Project, with a capacity of 20 MW, aims to harness the power of the Modi River. This project contributes to clean, sustainable energy for the region, ensuring both economic growth and environmental protection.</p>
            <p>With state-of-the-art technology and dedicated teams, this hydroelectric project ensures efficiency and minimal environmental impact while supporting the energy needs of the local population.</p>
        </div>
    </div>
</section>
