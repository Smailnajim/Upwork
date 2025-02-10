<?php 
session_start();
if(isset($_SESSION['role'])){
    echo 'hello '.$_SESSION['FirstName'].' '.$_SESSION['LastName'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is Home</h1>
</body>
</html>