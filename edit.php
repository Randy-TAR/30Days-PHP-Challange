<?php
// include 'index.php';
session_start();
if(isset($_GET['edit'])){
    $edit= $_GET['edit'];
    $value= $_SESSION['task'][$edit];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todo list</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="div">
    <form action="edit1.php" method="post">
        <input type="text" name="name" value="<?php echo $value[0]?>" required>
        <input type="datetime-local" name="date" value="<?php echo $value[1]?>" required><br>
        <select name="priority" >
            <option value="" readonly>Priority</option>
            <option value="High">High</option>
            <option value="Medium">Medium</option>
            <option value="Low">Low</option>
        </select>
        <input type="hidden" name="id" value="<?php echo $edit;?>"></a>
        <!-- <button type="submit" name="submit"><a href='edit1.php?id=<?php echo $edit?>'>Edit</a></button> -->
        <button type="submit" name="submit">Submit</button>
    </form>
</div>
</body>
</html>

<!-- <button type="submit">submit</button> -->