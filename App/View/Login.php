<?php
session_start();

use App\Controllers\Front\UserController;
use App\Controllers\Front\RoleController;

$userController = new UserController();
$roleController = new RoleController();
$LoginTheme = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // session_start();
    $userf = $userController->login($_POST['email'], $_POST['password']);
    if ($userf) {
        // session_destroy();
        $_SESSION['id_user'] = $userf->getid();
        $_SESSION['Firstname'] = $userf->getfirstname();
        $_SESSION['Lastname'] = $userf->getlastname();
        $_SESSION['role'] = $roleController->getRoleById($userf->getid_role());
        $_SESSION['email'] = $userf->getemail();
        // to do 
        // crier findbyid in role models @return Object role


        // switch ($role['name']) {
        //     case 'freelencer':
        //              header('location: /DashboardFreelencer');

        //         break;
        //         case 'client':
        //                  header('location: /UpWork/public/');

        //             break;
        //             case 'admin':
        //                      header('location: /UpWork/public/');

        //                 break;
        //     default:
        //         # code...
        //         break;
        // }
        header('location: /UpWork/public/');
    } else {
        $LoginTheme = 1;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <form action="#" method="POST" class="position-absolute top-50 start-50 translate-middle">
        <h2>Login</h2>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
            <input type="email" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" require>
        </div>

        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
            <input type="password" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" require>
        </div>
        <button type="submit" class="btn btn-light">Login</button>
        <?php if ($LoginTheme){ ?>
        <div class="text-bg-danger p-3">Password or email uncorect!</div>
        <?php }?>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>