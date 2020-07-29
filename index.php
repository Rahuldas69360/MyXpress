<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - MyXpress</title>
    <style>
        .carousel-item{
            height:440px;
        }
        .card-img-top {
            width: 210px;
            height: 136px;
        }
    </style>
</head>
<body>
    <header>
        <?php include("include/nav.php"); ?>
    </header>
        <div class="container">
        <!-- carousel item -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner my-3">
                    <div class="carousel-item active">
                    <img src="images/mens.jpg" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="images/womens.jpg" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="images/kids.jpg" class="d-block" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        <!-- Mens Product card -->
        <br><h5><b>Mens Fashion</b></h5>
        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="card">
                    <img src="images/tshirt.jpg" class="card-img-top my-2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Rs. 499</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="checkout.php" class="btn btn-primary">Buy Now</a>
                        <a href="prod_view.php" class="btn btn-primary">View </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="card">
                    <img src="images/tshirt.jpg" class="card-img-top my-2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Men Neck Tshirt</h5>
                        <p class="card-text">Rs. 499</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="checkout.php" class="btn btn-primary">Buy Now</a>
                        <a href="prod_view.php" class="btn btn-primary">View </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="card">
                    <img src="images/tshirt.jpg" class="card-img-top my-2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Rs. 499</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="checkout.php" class="btn btn-primary">Buy Now</a>
                        <a href="prod_view.php" class="btn btn-primary">View </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="card">
                    <img src="images/tshirt.jpg" class="card-img-top my-2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Rs. 499</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="checkout.php" class="btn btn-primary">Buy Now</a>
                        <a href="prod_view.php" class="btn btn-primary">View </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Womens Product card -->
        <br><h5><b>Womens Fashion</b></h5>
        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="card">
                    <img src="images/black.jpg" class="card-img-top my-2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Rs. 499</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="checkout.php" class="btn btn-primary">Buy Now</a>
                        <a href="prod_view.php" class="btn btn-primary">View </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="card">
                    <img src="images/black.jpg" class="card-img-top my-2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Men Neck Tshirt</h5>
                        <p class="card-text">Rs. 499</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="checkout.php" class="btn btn-primary">Buy Now</a>
                        <a href="prod_view.php" class="btn btn-primary">View </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="card">
                    <img src="images/black.jpg" class="card-img-top my-2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Rs. 499</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="checkout.php" class="btn btn-primary">Buy Now</a>
                        <a href="prod_view.php" class="btn btn-primary">View </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="card">
                    <img src="images/black.jpg" class="card-img-top my-2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Rs. 499</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="checkout.php" class="btn btn-primary">Buy Now</a>
                        <a href="prod_view.php" class="btn btn-primary">View </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include("include/footer.php");?>
</body>
</html>