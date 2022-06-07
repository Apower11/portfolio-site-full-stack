<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}

require_once "config.php";

$username = $password = "";
$username_err = $password_err = $login_err = "";
$successfullyLoggedIn = FALSE;

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty($username_err) && empty($password_err)){
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            $param_username = $username;
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    mysqli_stmt_bind_result($stmt, $id, $username, $user_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if($password === $user_password){
                            session_start();
                            
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            header("location: addPost.php");
                        } else{
                            $login_err = "Invalid password.";
                        }
                    }
                } else{
                    $login_err = "Invalid username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
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
    <title>Adam Power Portfolio Site - Login</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles2.css">
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="./images/favicon.webp" >
</head>
<body>
    <?php
        require_once "navbar.php";
    ?>
    <div class="placeholder"></div>
    <div class="login" id="login-form">
        <h1 class="section-heading">Login Page</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="login-form" method="post">
            <h3>Login</h3>
            <?php 
            if(!empty($login_err)){
                echo '<div class="login-error-message">' . $login_err . '</div>';
            }        
            ?>
            <input type="text" name="username" id="username" placeholder="Username">
            <span class="invalid-username-message"><?php echo $username_err; ?></span>
            <input type="password" name="password" id="password" placeholder="Password">
            <span class="invalid-password-message"><?php echo $password_err; ?></span>
            <div class="login-form-buttons">
                <button class="post-button" type="submit">Login</button>
            </div>
        </form>
    </div>
    <script src="./logoutScript.js"></script>
</body>
</html>