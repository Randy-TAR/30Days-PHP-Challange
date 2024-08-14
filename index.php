<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>
    This is a guessing Game
    </h1>
    <a href="guessgame.php">Start Game</a>
</body>
</html>
<?php
if(isset($_GET['msg'])){
    $message = $_GET['msg'];
    echo''.$message.'';
    urldecode($_GET['msg']);
}
session_destroy();
?>
