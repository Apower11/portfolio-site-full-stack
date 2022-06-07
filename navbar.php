<header class="header">
    <nav class="navbar">
        <a class="nav-brand" href="./index.php"><img class="nav-logo" src="./images/Adam-Power-Logo.png" alt="Adam Power"></a>
        <ul>
            <li class="nav-item"><a class="nav-link" href="./index.php#about-me">About Me</a></li>
            <li class="nav-item"><a class="nav-link" href="./index.php#skills">Skills</a></li>
            <li class="nav-item"><a class="nav-link" href="./index.php#experience">Experience</a></li>
            <li class="nav-item"><a class="nav-link" href="./index.php#education">Education</a></li>
            <li class="nav-item"><a class="nav-link" href="./index.php#projects">Projects</a></li>
            <li class="nav-item"><a class="nav-link" href="./blog.php">Blog</a></li>
        </ul>
        <?php
            if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                echo '<button id="logout-button" class="site-button"> <a href="./logout.php">Logout</a></button>';
            }
            else {
                echo '<button class="site-button"> <a href="./login.php">Login</a></button>';
            }
        ?>
            
    </nav>
</header>