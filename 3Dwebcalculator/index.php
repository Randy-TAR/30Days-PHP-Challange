<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $fnum = $_POST["fnum"];
    $snum= $_POST["snum"];
    $oper= $_POST["oper"];
if(empty($fnum)||empty($snum)){
    header("location:index1.php");
}
else{
    switch($oper){
        case "+":
            $result= $fnum + $snum;
            break;
        case "-":
            $result= $fnum - $snum;
            break;
        case "*":
            $result= $fnum * $snum;
            break;
        case "/":
            $result= $fnum / $snum;
            break;
        case "%":
            $result= $fnum % $snum;
            break;
        case "^":
            $result= $fnum ** $snum;
            break;
        case "@":
            $result= sqrt($fnum);
            break;
}
}
// header("location:index1.php");
}
?>