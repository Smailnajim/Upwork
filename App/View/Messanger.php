<?php 
session_start();
if(isset($_SESSION['role'])){
    if($_SESSION['role'] != 'client' && $_SESSION['role'] != 'client' && $_SESSION['role'] == 'client'){
        header('location: /UpWork/public/');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messanger</title>
</head>
<body>
    <h1>message</h1>
</body>
</html>