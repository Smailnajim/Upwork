<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2 class="title">Registration Form</h2>
    <form method="POST">
        <div class="input-group">
            <input class="input--style-1" type="text" placeholder="NAME" name="fname" required="true">
        </div>

        <div class="row row-space">
            <div class="col-2">
                <div class="input-group">
                    <input class="input--style-1" type="text" placeholder="Mobile Number" name="contactno" required="true" maxlength="10" pattern="[0-9]+">
                </div>
            </div>
        </div>

        <div class="input-group">
            <div class="rs-select2 js-select-simple select--no-search">
                <input class="input--style-1" type="email" placeholder="Email Address" name="email" required="true">
            </div>
        </div>

        <div class="row row-space">
            <div class="col-2">
                <div class="input-group">
                    <input type="password" value="" class="input--style-1" name="password" required="true" placeholder="Password">
                </div>
            </div>
        </div>

        <div class="p-t-20">
            <button class="btn btn--radius btn--green" type="submit" name="submit">Submit</button>
        </div>
        <br>
        <a href="signin.php" style="color: red">Already have an account? Signin</a>
    </form>
</body>

</html>