<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
</head>
<body>
<?php include("include/nav.php");?>
    <div class="container my-3">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 my-5">
                    <h6>When you fill in your registered email address, you will be sent instructions on how to reset your password.</h6>
                </div>
                <div class="col col-xs-3 col-sm-3 col-md-3">
                    <h2>Forgot Password</h2>
                    <form action="" method="post">
                        <label for="mail">Enter Your Email 
                            <input type="email" id="mail" class="form-control">
                        </label><br>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
            <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3">

                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 my-5">
                        <a href="register.php">New to MyXpress? Create an Account</a><br>
                        <br>Have an account? <a href="login.php">Log in</a>
                    </div>
            </div>
        </div>
</body>
</html>