<?php
session_start();
if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    // echo''.$username.'<br>'.$password.'<br>';

    validate($username, $password);
    if(isset($_SESSION['passwordNumber'])||isset($_SESSION['length'])||isset($_SESSION['username_and_password'])||isset($_SESSION['passwordUpper'])||isset($_SESSION['passwordLower']))
    {
        header("location: login.php");
    }
    else{
        header("location: home_page.php");

    }

}

function validate(string $username, string $password){

if($password == '' || $username == ''){
    $_SESSION["username_and_password"] = "Username and Password can not be empty";
}

if(strlen($password) < 3 || strlen($username) < 3){
    $_SESSION["length"] = "Username and Password can not be less than 3 characters";
}

$hasLowerCase = false;
$hasNumber = false;
$hasUpperCase = false;

for($count=0; $count < strlen($password); $count++){
    if(ctype_lower($password[$count])){
        $hasLowerCase = true;
    }
    if(ctype_upper($password[$count])){
        $hasUpperCase = true;
    }
    if(ctype_digit($password[$count])){
        $hasNumber = true;
    }
}

if(!$hasLowerCase){
    $_SESSION["passwordLower"] = "Password must have at least 1 lowercase";
}

if(!$hasNumber){
    $_SESSION["passwordNumber"] = "Password must have at least 1 number";
}

if(!$hasUpperCase){
    $_SESSION["passwordUpper"] = "Password must have at least 1 uppercase";
}

}

?>
