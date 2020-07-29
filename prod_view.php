<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product View</title>
</head>
<body>
    <header><?php include("include/nav.php");?><header>
    <div class="container my-4">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <img src="images/tshirt.jpg" class="mb-3" width="233px" heigh="385px">
            </div>
            <div class="row">
                <a href="checkout.php" class="btn btn-primary mx-3">Buy Now</a>
                <a href="checkout.php" class="btn btn-primary">Add To Cart</a>
            </div>
        </div>
        <div class="col-md-8">
            <h5>Product Name</h5>
            <p><b style="color:red">RS. </b></p>
            <p>Product Description</p>
        </div>
    </div>
</div>
</body>
</html>