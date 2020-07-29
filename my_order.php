<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Order</title>
    <style>
        .d-block{
            height: 123px;
        }
        .img {
            width: 80px;
            height: 80px;
        }
    </style>
</head>
<body>
    <header>
        <?php include("include/nav.php"); ?>
    </header>
    <div class="container my-4">
        <h4>My Order</h4>
        <div class="row">
            <div class="col col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="card">
                    <div class="card-header">
                        <img src="images/tshirt.jpg" class="d-block float-right" alt="...">
                        <h5 class="card-title">Product Name</h5>
                        <p class="card-text">Delivery Expected between ... to ... </p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Order Details
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h6>ORDER ID - </h6><br>
                                <h5>Name of the product</h5><img src="images/tshirt.jpg" class="img float-top-right" alt="..."><br>
                                <p>Price. 499</p>
                                <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Shipping Address</h6>
                                    <small class="text-muted"><b>Name of the Person</b></small><br>
                                    <small class="text-muted">Full Address</small>
                                    <small class="text-muted">Phone Number: </small>
                                </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Price Details</h6>
                                    <small class="text-muted">List Price</small>
                                    <span class="text-muted my-0">499</span><br>
                                    <small class="text-muted ">Selling Price</small>
                                    <span class="text-muted my-0">450</span><br>
                                    <small class="text-muted ">Shipping Fee</small>
                                    <span class="text-muted my-0">40</span><br>
                                    <small class="text-muted ">Shipping Discount</small>
                                    <span class="text-muted my-0">-10</span><br>
                                </div>
                                <br>
                                
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                <span>Total</span>
                                <strong>Rs. 480</strong>
                                </li>
                            </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Print</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle Order</button>
                                <button type="button" class="btn btn-primary">Ok</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <a href="track_order.php" class="btn btn-primary">Track Order</a>
                    </div>
                 </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-xs-12 col-sm-12 col-md-12 my-3">
                <div class="card">
                    <div class="card-header">
                        <img src="images/tshirt.jpg" class="d-block float-right" alt="...">
                        <h5 class="card-title">Product Name</h5>
                        <p class="card-text">Delivery Expected between ... to ... </p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Order Details
                        </button>
                        <a href="track_order.php" class="btn btn-primary">Track Order</a>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</body>
</html>