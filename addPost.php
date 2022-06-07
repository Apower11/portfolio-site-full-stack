<?php 
    session_start();

    require_once "config.php";
    
    $blogPostTitle = $blogPostText = "";
    $blogPostTitle_err = $blogPostText_err = "";

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: index.php");
        exit;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $blogPostTitle = $_POST['title'];
        $blogPostText = $_POST['blog-text'];

        $sql = "INSERT INTO blogposts (title, content) VALUES (?, ?)";
        
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "ss", $param_title, $param_content);
            
            $param_title = $blogPostTitle;
            $param_content = $blogPostText; 
            
            if(mysqli_stmt_execute($stmt)){
                header("location: blog.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
        mysqli_close($link);
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
    <div class="blog blog-form" id="blog">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="add-blog-form" method="post">
            <h3>Add Blog Form</h3>
            <input type="text" required name="title" id="blog-post-title" placeholder="Title">
            <span class="invalid-blog-post-title-input-message"></span>
            <textarea required maxlength="255" placeholder="Enter your text here..." name="blog-text" id="blog-text" cols="30" rows="10"></textarea>
            <span class="invalid-blog-post-content-input-message"></span>
            <div class="blog-form-buttons">
                <button class="post-button" type="submit">Post</button>
                <button class="preview-button" type="submit">Preview Post</button>
                <button class="clear-button">Clear</button>
            </div>
        </form>
    </div>
    <script src="./script.js"></script>
</body>
</html>