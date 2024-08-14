<?php
// session_start( );
include 'index.php';
if(isset($_GET['delete'])){
    $delete= $_GET['delete'];
    echo $delete;
    unset($_SESSION['task'][$delete]);
    // array_slice($_SESSION['task'], $delete,1);
}
echo "<br> <a href='index.php'>back </a>";
header('location:index.php');
