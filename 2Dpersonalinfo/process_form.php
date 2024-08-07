<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<style>
    .outputs{
        font-size: 25px;
    }
</style>
<body>
    
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $fname= filter_input(INPUT_POST,"fname",FILTER_SANITIZE_STRING);
    $lname= filter_input(INPUT_POST,"lname",FILTER_SANITIZE_STRING);
    $email=  filter_input(INPUT_POST,"email",FILTER_SANITIZE_STRING);
    $pnum=  filter_input(INPUT_POST,"pnum",FILTER_SANITIZE_STRING);
    $dbirth=  filter_input(INPUT_POST,"dbirth",FILTER_SANITIZE_STRING);
    $gender=  filter_input(INPUT_POST,"gender",FILTER_SANITIZE_STRING);
    $address=  filter_input(INPUT_POST,"address",FILTER_SANITIZE_STRING);
}
?><div class="outputs"><?php
echo '<br>'.$fname.'<br>'.$lname.'<br>'.$email.'<br>'.$pnum.'<br>'.$gender.'<br>'.$address.'<br>';
?>
</div>
