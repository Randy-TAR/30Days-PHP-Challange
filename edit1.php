<?php
session_start();
// include 'index.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
if(isset($_POST['submit'])){
    $id= $_POST['id'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $priority = $_POST['priority'];
    $edited=array($name, $date, $priority);
    $_SESSION['task'][$id]=$edited;
}
}
header('location:index.php');
