

<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST' ){
// if(!$_SESSION['task']){
//     $_SESSION['task']=[];
// }
if(isset($_POST['submit'])){
if(!$_SESSION['task']){
    $_SESSION['task']=[];
}
$name = $_POST['name'];
$date = $_POST['date'];
$priority = $_POST['priority'];
$full_task=array($name, $date, $priority);
$_SESSION['task'][]=$full_task;
$full_task=0;
}
}
$tasks= $_SESSION['task'];
// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todo list</title>
</head>
<body>
<div id="div">
    <form class="form" action=" " method="post">
        <input type="text" name="name" placeholder="Enter a task " required>
        <input type="datetime-local" name="date" required><br>
        <select name="priority" >
            <option value="" readonly>Priority</option>
            <option value="High">High</option>
            <option value="Medium">Medium</option>
            <option value="Low">Low</option>
        </select>
        <button type="submit" name="submit">Add Task</button><br>
        <link rel="stylesheet" href="style.css">
    </form>
    <?php
        foreach ($tasks as $index=>$task){
            ?><div class="tasks"><?php
            echo 'Task:'.$task[0].'<br>'.'Submittion date:'.$task[1].'<br>'.'Task priority:'.$task[2].'';
            echo "
            <input type=checkbox name=checkbox>
            <button type=edit><a href='edit.php?edit=$index'> Edit </a></button>
            <button type=delete><a href='delete.php?delete=$index'> Delete </a></button>
            ";
            // echo '<hr>';
            ?></div><?php
        }
    ?>
</div>

</body>
</html>