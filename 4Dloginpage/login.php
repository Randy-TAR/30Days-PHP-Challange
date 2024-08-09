<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="process.php" method="post">
        <label for="username">User name:</label>
        <input type="text" name="username" placeholder="Enter User name"><br>
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Password"><br>
        <small style="color: red">
        <?php 
            if(isset($_SESSION['passwordLower'])){
                echo $_SESSION['passwordLower'].'<br>';
                unset($_SESSION['passwordLower']);
            }
            if(isset($_SESSION['passwordUpper'])){
                echo $_SESSION['passwordUpper'].'<br>';
                unset($_SESSION['passwordUpper']);
            }
            if(isset($_SESSION['passwordNumber'])){
                echo $_SESSION['passwordNumber'].'<br>';
                unset($_SESSION['passwordNumber']);
            }
            if(isset($_SESSION['length'])){
                echo $_SESSION['length'].'<br>';
                unset($_SESSION['length']);
            }
        ?> 
        </small>
        <small style="color: red">
        <?php 
            if(isset($_SESSION['username_and_password'])){
                echo $_SESSION['username_and_password'].'<br>';
                unset($_SESSION['username_and_password']);
            }

            if(isset($_SESSION['length'])){
                echo $_SESSION['length'];
            }
        ?>   
        </small>
        <button type="submit" name="login">Login</button>
    </form>

    <?php
    // if(isset($_SESSION['passwordNumber'])||isset($_SESSION['length'])||isset($_SESSION['username_and_password'])||isset($_SESSION['passwordUpper'])||isset($_SESSION['passwordLower']))
    // {
    //     header("location:home_page.php");
    // }
    ?>
</body>
</html>