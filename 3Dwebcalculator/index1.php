<?php
include ("index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="div">
        <form action="" method="post">
            <input type="number" name="fnum" placeholder="Enter 1st number" >
            <select name="oper">
                <option value="+">Addition</option>
                <option value="-">Subtraction</option>
                <option value="*">Multiplication</option>
                <option value="/">Division</option>
                <option value="%">Modulus</option>
                <option value="^">To the Power of</option>
                <option value="@">Square Root</option>
            </select>
            <input type="number" name="snum" placeholder="Enter 2rd number" > <br>
            <button name="submit">Submit</button>
        </form>
       <?php if(isset($_POST["submit"])){ ?>
        <div class="answer" >
        <?php
            echo $result;
        }
        ?>
        </div>
    </div>
</body>
</html>