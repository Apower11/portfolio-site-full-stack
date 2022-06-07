<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adam Power</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="./images/favicon.webp" >
</head>
<body>
    <?php
        require_once "navbar.php";
    ?>
    <div class="placeholder"></div>
    <main class="landing-page">
        <div class="landing-page-description">
            <h3 class="my-name-heading">Adam Power</h3>
            <p class="my-description">
                A motivated and enthusiatic tech professional looking
                to land a position in software engineering or development
                to best utilise the different skills that I’ve developed over
                the last couple of years.
            </p>
            <button class="read-more-button">
                <a href="#about-me">Read More</a>
            </button>
        </div>
        <div class="landing-page-image">
            <img src="./images/Adam-Power.png" alt="">
        </div>
    </main>
    <div id="about-me" class="about-me-section">
        <figure class="about-me-picture">
            <img src="./images/Adam-Power.png" alt="Adam Power" class="about-me-image">
            <figcaption>Aspiring Software Engineer</figcaption>
        </figure>
        <article class="about-me-description">
            <h3>About Me</h3>
            <section class="about-me-description-text">
                <b>Software Engineering for Business undergraduate student studying
                    at Queen Mary University of London.</b>
                <p>My professional aim is to become a software engineer or developer. I will
                    achieve this goal by completing my bachelor’s degree while taking online
                    courses and doing internships to gain the skills necessary to excel in
                    this field of work and add as much value as I can in my field.</p>
            </section>
            <div class="social-media-icons">
                <a target="_blank" href="https://www.linkedin.com/in/adam-power-926759193/"><i class="fa fa-linkedin-square"></i></a>
                <a target="_blank" href="https://github.com/Apower11"><i class="fa fa-github"></i></a>
            </div>
            <div class="contact-details">
                <p>Email Address: adampower45@hotmail.com</p>
                <p>Mobile Number: 07505006856</p>
            </div>
        </article>
    </div>
    <div id="skills" class="skills-and-achievements">
        <h1 class="section-heading">Skills and Achievements</h1>
        <div class="skills-and-achievements-content">
            <aside class="skills">
                <h3>Skills</h3>
                <div class="skills-lists">
                    <ul class="skills-list-1">
                        <li class="skill">
                            <img src="./images/html-logo-transparent-background.png" alt="HTML">
                            <p>HTML</p>
                        </li>
                        <li class="skill">
                            <img src="./images/css-logo-transparent-background.png" alt="HTML">
                            <p>CSS</p>
                        </li>
                        <li class="skill">
                            <img src="./images/javascript-logo-transparent-background-3.png" alt="HTML">
                            <p>Javacsript</p>
                        </li>
                        <li class="skill">
                            <img src="./images/nodejs-logo-transparent-background.png" alt="HTML">
                            <p>NodeJS</p>
                        </li>
                    </ul>
                    <ul class="skills-list-2">
                        <li class="skill">
                            <img src="./images/wordpress-logo-transparent-background.png" alt="HTML">
                            <p>Wordpress</p>
                        </li>
                        <li class="skill">
                            <img src="./images/mongodb-logo-transparent.png" alt="HTML">
                            <p>MongoDB</p>
                        </li>
                        <li class="skill">
                            <img src="./images/python-logo-transparent-background.jpg" alt="HTML">
                            <p>Python</p>
                        </li>
                        <li class="skill">
                            <img src="./images/react-logo-transparent-background.png" alt="HTML">
                            <p>React</p>
                        </li>
                    </ul>
                </div>
            </aside>
            <aside class="certificates">
                <h3>Certificates</h3>
                <ul class="certificates-list">
                    <li class="certificate">
                        <div class="certificate-details">
                            <img src="./images/udemy-logo-transparent-background.png" alt="NodeJS-certificate">
                            <p>NodeJS - The Complete Guide</p>
                        </div>
                        <a target="_blank" class="certificate-button" href="https://www.udemy.com/certificate/UC-f72acaea-9d91-495c-93ae-26f4cfaf9975/">Show Credential</a>
                    </li>
                    <li class="certificate">
                        <div class="certificate-details">
                            <img src="./images/udemy-logo-transparent-background.png" alt="CSS-certificate">
                            <p>CSS - The Complete Guide</p>
                        </div>
                        <a target="_blank" class="certificate-button" href="https://www.udemy.com/certificate/UC-e872fe9c-d120-4047-840a-4536f8de6304/">Show Credential</a>
                    </li>
                </ul>
            </aside>
        </div>
    </div>
    <div id="experience" class="experience">
        <h1 class="section-heading">Experience</h1>
        <div class="experiences">
            <div class="individual-experience">
                <div class="experience-heading">
                    <h3>InvestIN (Aug 2020 - Aug 2020)</h3>
                    <img src="./images/investin-logo.webp" alt="InvestIN">
                </div>
                <p>I worked in a team to develop an app, with me as the leader and we successfully built an aesthetically pleasing and also functionally brilliant scheduling app in Javascript. We also got some experience in cyber security as we also discussed potential measures we could take to reduce cyber crime in corporations.</p>
            </div>
            <div class="individual-experience">
                <div class="experience-heading">
                    <h3>Library Assistant (Jan 2020 - Present)</h3>
                    <img src="./images/richmond-and-wandsworth-logo.png" alt="InvestIN">
                </div>
                <p>I work in teams with many different people so this has greatly helped improve my communication and teamwork skills, and I work in a variety of different environments so I have learned to adapt quickly to changes in a work environment. I also have to solve complex customer queries and help them with any IT issues they may have.</p>
            </div>
        </div>
    </div>
    <div class="education" id="education">
        <h1 class="section-heading">Education</h1>
        <div class="education-places">
            <div class="education-place">
                <div class="education-place-heading">
                    <h3>St Richard Reynolds (Sep 2014 - July 2021)</h3>
                    <img src="./images/srrcc-logo.png" alt="SRRCC">
                </div>
                <p>GCSEs: 7 Grade 9s (A**), 3 Grade 8s (A*) and 1 Grade A^.</p>
                <p>A Levels: A* (Mathematics), A* (Economics), A (Chemistry).</p>
            </div>
            <div class="education-place">
                <div class="education-place-heading">
                    <h3>Queen Mary University of London (Sep 2021 - Present)</h3>
                    <img src="./images/qmul-logo.webp" alt="QMUL">
                </div>
                <p>Currently studying a BSc Software Engineering for Business with one year’s industrial experience.</p>
                <p></p>
            </div>
        </div>
    </div>
    <div class="portfolio" id="projects">
        <h1 class="section-heading">Portfolio</h1>
        <div class="site-row">
            <div class="portfolio-site">
                <img src="./images/techboy-blog.png" alt="Techboy">
                <h5>Techboy</h5>
                <p>A technology blog site built with Wordpress.</p>
                <a target="_blank" href="https://techboy-blog.co.uk/">Visit Site</a>
            </div>
            <div class="portfolio-site">
                <img src="./images/lucky-lotus.png" alt="Lucky Lotus">
                <h5>Lucky Lotus</h5>
                <p>A full stack restaurant website built using React, Express, NodeJS and the MongoDB database.</p>
                <a target="_blank" href="https://lucky-lotus-204b0.web.app/">Visit Site</a>
            </div>
        </div>
        <div class="site-row">
            <div class="portfolio-site">
                <img src="./images/premier-league-team-searcher.png" alt="Premier League Team Searcher">
                <h5>Premier League Team Searcher</h5>
                <p>Allows you to use a searchbar to look up any premier league team from the 2019/2020 season and it filters the list depending on what you type in. Built using HTML, CSS and Javascript.</p>
                <a target="_blank" href="https://premier-league-filter.netlify.app/">Visit Site</a>
            </div>
            <div class="portfolio-site">
                <img src="./images/form-validator.png" alt="Form Validator">
                <h5>Form Validator</h5>
                <p>A form which validates the different fields that are passed to it. Built using HTML, CSS and Javascript.</p>
                <a target="_blank" href="https://adampower-validator.netlify.app/">Visit Site</a>
            </div>
        </div>
    </div>
    
    <script src="./script.js"></script>
</body>
</html>