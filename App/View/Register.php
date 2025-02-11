<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            height: 100vh;
        }
    </style>
</head>

<body>

    <form action="/UpWork/public/register" method="POST" class="position-absolute top-50 start-50 translate-middle">
        <h1>Register</h1>
        <div class="input-group input-group-sm mb-3">

            <input type="text" placeholder="First Name" name="FirstName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" require>

            <input type="text" placeholder="Last Name" name="LastName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" require>
        </div>

        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
            <input type="email" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" require>
        </div>

        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
            <input type="password" name="Password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" require>
        </div>

        <div class="form-check">
            <!-- <input class="form-check-input" type="file" value="" id="flexCheckIndeterminate" require> -->
            <input type="file" name="image" accept="image/*" require>
            <!-- <label class="form-check-label" for="flexCheckIndeterminate">
                Freelancer
            </label> -->
        </div>
        <button type="submit" class="btn btn-light">Register</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./../../public/src/js/Register.js"></script>
</body>

</html>