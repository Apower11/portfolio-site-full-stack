<?php
session_start();

date_default_timezone_set('Europe/London');

$date = time();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

$postTitle = $postTextContent = "";

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $postTitle = $_GET['title'];
    $postTextContent = $_GET['blog-text'];
}

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
    <div class="blog preview-blog" id="preview-blog">
        <br />
        <div class="preview-post-buttons">
            <button class="site-button edit-post-button"><a href="./addPost.php">Edit Post</a></button>
            <form action="./addPost.php" class="preview-to-submit-form" method="POST">
                <input type="hidden" name="title" value="<?php echo $postTitle ?>">
                <input type="hidden" name="blog-text" value="<?php echo $postTextContent ?>">
                <button type="submit" id="preview-submit-post-button" class="site-button preview-submit-post-button">Submit Post</button>
            </form>
        </div>
        <br />
        <br />
        <div class="blog-post blog-post-preview">
            <span class="date-posted"><i class="fa fa-clock-o"></i> &nbsp; <?php echo date("Y-m-d H:i:s", $date) ?></span>
            <h3 class="blog-post-preview-heading"></h3>
            <p class="blog-post-preview-content"></p>
        </div>
    </div>
    <script src="./script.js"></script>
    <script src="./previewPost.js"></script>
</body>
</html>