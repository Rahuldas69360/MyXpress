<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MyXpress</title>
</head>
<body>
    <?php include("include/nav.php");?>
    <div class="container my-3">
        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 my-5">
                <h3>Get access to your Orders, Wishlist and Recommendations</h3>
            </div>
            <div class="col col-xs-3 col-sm-3 col-md-3">
                <h2>Login Here</h2>
                <form action="" method="post">
                    <label for="user">Username 
                        <input type="user" id="user" class="form-control">
                    </label><br>
                    <label for="psw">Username 
                        <input type="password" id="psw" class="form-control">
                    </label>
                    <br>
                    <button type="submit" class="btn btn-success">Login</button>
                </form>
            </div>
        </div>
        <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3">

                </div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                     Forget Password? <a href="forget_pass.php">Click Here</a>
                </div>
        </div>
        <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3">

                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 my-5">
                    <a href="register.php">New to MyXpress? Create an Account</a>
                </div>
        </div>
    </div>
</body>
</html>