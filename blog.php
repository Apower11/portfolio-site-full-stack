<?php
session_start();

require_once "blogPostClass.php";
require_once "monthAndYearClass.php";

$blogPostsArray = array();
$blogPostDatesArray = array();

function isDateAlreadyAddedToArray($date, $datesArray){
    $dateIsAlreadyAdded = false;
    foreach($datesArray as $blogPostDate){
        if(($date->get_month() == $blogPostDate->get_month()) && ($date->get_year() == $blogPostDate->get_year())){
            $dateIsAlreadyAdded = true;
        }
    }

    return $dateIsAlreadyAdded;
}

$servername = "localhost";
$username = "root";
$password = "hello123";
$dbname = "fundamentals-of-web-technology-portfolio-site";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, title, content, created_at FROM blogposts";

$result = $conn->query($sql);

if ($result->num_rows <= 0) {
    header("location: login.php");
    exit;
}

while($row = $result->fetch_assoc()) {
    $blogPost = new BlogPost();
    $monthOfPost = "";
    $yearOfPost = "";
    $dateOfPost = "";

    $blogPost->set_id($row['id']);
    $blogPost->set_title($row['title']);
    $blogPost->set_content($row['content']);
    $blogPost->set_created_at($row['created_at']);

    if(isset($_GET['month']) && isset($_GET['year'])){
        $monthOfPost = strval($_GET['month']);
        $yearOfPost = strval($_GET['year']);
    }

    $fullDateOfPost = new MonthAndYear();
    $fullDateOfPost->set_month(strval(explode("-", $row['created_at'])[1]));
    $fullDateOfPost->set_year(strval(explode("-", $row['created_at'])[0]));
        
    if(!isDateAlreadyAddedToArray($fullDateOfPost, $blogPostDatesArray)){
        array_push($blogPostDatesArray, $fullDateOfPost);
    }

    if(($monthOfPost == strval(explode("-", $row['created_at'])[1])) && ($yearOfPost == strval(explode("-", $row['created_at'])[0]))){
        array_push($blogPostsArray, $blogPost);
    }
    else if(($monthOfPost == "") && ($yearOfPost == "")){
        array_push($blogPostsArray, $blogPost);
    }
}

function blogPostSortingFunction($a, $b){
    return $a->createdAtInMilliseconds < $b->createdAtInMilliseconds;
}

usort($blogPostsArray, 'blogPostSortingFunction');

function blogDatesSortingFunction($a, $b){
    return (($a->get_year() * 100) + $a->get_month()) < (($b->get_year() * 100) + $b->get_month());
}

usort($blogPostDatesArray, 'blogDatesSortingFunction');

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adam Power - Blog</title>
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
        <?php 
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            echo '<div class="add-blog-post-button">';
            echo '<br />';
            echo '<button class="site-button"><a href="./addPost.php">Add Blog Post</a></button>';
            echo '</div>';
        }
        ?>
    <div class="blog" id="blog">
        <br />
        <br />
        <div class="blog-posts">
            <h1 class="section-heading">Blog Feed</h1>
            <?php
                foreach($blogPostsArray as $post) {
                    echo '<div class="blog-post">';
                    echo '<span class="date-posted">' . '<i class="fa fa-clock-o"></i> &nbsp;' . $post->createdAt . '</span>';
                    echo '<h3 class="blog-post-heading">' . $post->title . '</h3>';
                    echo '<p class="blog-post-content">' . $post->content . '</p>';
                    echo '</div>';
                }
            ?>
        </div>
        <div class="blog-posts-archive">
            <h1 class="archive-section-heading">Archive</h1>
            <div class="select-by-month">
                <h3 class="archive-selection-heading">By Month</h3>
                <ul class="month-selection">
                    <li class="month-choice"><a href="./blog.php">Any Month</a></li>
                    <?php 
                        foreach($blogPostDatesArray as $blogPostDate){
                            echo '<li class="month-choice">';
                            echo '<a href="./blog.php?month=' . strval($blogPostDate->get_month()) . '&year=' . strval($blogPostDate->get_year()) . '"> ' . $blogPostDate->get_month_word() . ' ' . strval($blogPostDate->get_year()) . '</a>';
                            echo '</li>';
                        }
                    
                    ?>
                    
                </ul>
            </div>
        </div>
    </div>
    <script src="./script.js"></script>
</body>
</html>