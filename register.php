<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <header>
        <?php include("include/nav.php")?>
    </header>
    <div class="container my-3">
        <div class="border mx-auto pl-sm-5" style="width: 400px;">
        <h2>MyXpress Registration</h2>
            <form action="#" method="post">
                <label for="name">Name
                    <input type="name" id="name" class="form-control">
                </label>
                <label for="email">Email
                    <input type="email" id="email" name="email" class="form-control">
                </label>
                <label for="ph">Phone Number
                    <input type="text" id="ph" name="ph" class="form-control">
                </label>
                <label for="psw">Password
                    <input type="password" id="psw" name="pass" class="form-control">
                </label>
                <label for="psw">Confirm Password
                    <input type="password" id="psw" name="confirm_pass" class="form-control">
                </label><br>
                <button type="submit" class="btn btn-primary mb-3" class="form-control">Register</button>
                <h6>By creating an account, you agree to MyXpress's <a href="#">Conditions</a> of Use and <a href="#">Privacy</a> Notice.</h6>
                <br>Have an account? <a href="login.php">Log in</a>
            </form>
        </div>
    </div>
</body>
</html>