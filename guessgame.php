
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>guessing game</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="#" method="post">
        <label for="guess">Enter a Guess: </label>
        <input type="number" name="num" value="">
        <button type="submit" name="guess">Submit guess</button>
    </form>
</body>
</html>
<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
if($_SESSION["ran"]== false){
    $_SESSION["ran"]=rand(1,10);
}
$random= $_SESSION["ran"];
echo $random.'<br>';
        if(isset($_POST['guess'])){
            $num = $_POST['num'];
            if (!isset($_SESSION["value"]) ){
                $_SESSION["value"] = [];
            }
            if($num > 0 && $num < 100){
                echo $num .'<br>';
                print_r($_SESSION['value']).'<br>';
                $_SESSION["value"][]=$num;
            switch($random){
                case $num>$random:
                    echo 'style="cloror=red"'.'too high'.'<br>';
                    break;
                case $num<$random:
                    echo 'too low'.'<br>';
                    break;
                case $num==$random:
                    $mes = 'You won. Try again';
                    header("location:index.php?msg=".urlencode($mes));
                    // echo 'you won'.'<br>';
                    break;    
            }
            }
            elseif($num ==''){
                echo "you must enter a number";
            }
            else{
                echo "out of range";
            }
if (count($_SESSION["value"]) > 4){
    session_destroy();
    $mes = "Game over. You lose, try again".'<br>';
    header("location:index.php?msg=".urlencode($mes));
    echo "Game over".'<br>';
    // header('location:'.$_SERVER['PHP_SELF']);
}
}
}
?>