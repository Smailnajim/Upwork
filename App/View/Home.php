<?php 
session_start();

echo 'hello '.$_SESSION['Firstname'].' '.$_SESSION['Lastname'];

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