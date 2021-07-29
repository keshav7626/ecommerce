<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>products</title>
</head>

<body>
    <?php include 'header.php';
    if(isset($_GET['add'])&& $_GET['add']!=''){
        mysqli_query($conn,"INSERT INTO `user_items`(`id`, `item_id`, `user_id`, `status`) VALUES (NULL,'$item_id','$user_id','1')");
   // echo "INSERT INTO `user_items`(`id`, `item_id`, `product_id`, `status`) VALUES (NULL,'$item_id','$user_id','1')";
    }
    ?>

    <div class="container">
        <div class="jumbotron">
            <h1>Welcome to our Lifestyle Store</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.
            </p>
        </div>
    </div>
    <div class="row" class="text-center">
        <div class="text-center">
            <?php
            $res=mysqli_query($conn,'SELECT * FROM `products`');
            while($row=mysqli_fetch_assoc($res)){
            ?>
            <div class="col-md-3 col-sm-6">
                <a href="cartpage.php">
                    <div class="thumbnail">
                        <img src="images/<?php echo $row['image'] ?>" alt="Camera image">
                        <div class="caption">
                            <h3><?php echo $row['name'] ?></h3>
                            <p>Price:Rs.<?php echo $row['price'] ?></p>
                        </div>
                        <?php if(check_if_added_to_cart($conn,$row['id'])==1){ ?>
                        <button class="btn btn-primary btn-block">View Cart</button>
                        <?php
                        }else{
                            ?>
                        <a class="btn btn-primary btn-block" href='?add=<?php echo $row['id'] ?> '>Add to
                            cart</a>
                        <?php
                        }
                        ?>
                    </div>
                </a>
            </div>
            <?php
            }
            ?>

        </div>
    </div>
    <!-- <div class="row" class="text-center">
        <div class="text-center">
            <div class="col-md-3 col-sm-6">
                <a href="cartpage.html">
                    <div class="thumbnail">
                        <img src="images/9.jpg" alt="Watch image">
                        <div class="caption">
                            <h3>Titan Model #301</h3>
                            <p>Price:Rs.13000.00</p>
                        </div>
                        <button class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="cartpage.html">
                    <div class="thumbnail">
                        <img src="images/10.jpg" alt="Watch image">
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price:Rs.3000.00</p>
                        </div>
                        <button class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="cartpage.html">
                    <div class="thumbnail">
                        <img src="images/11.jpg" alt="Watch image">
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>Price:Rs.8000.00</p>
                        </div>
                        <button class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="cartpage.html">
                    <div class="thumbnail">
                        <img src="images/12.jpg" alt="Watch image">
                        <div class="caption">
                            <h3>Faber Luba #111</h3>
                            <p>Price:Rs.18000.00</p>
                        </div>
                        <button class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </a>
            </div>
        </div>
    </div> -->
    <!-- <div class="row" class="text-center">
        <div class="text-center">
            <div class="col-md-3 col-sm-6">
                <a href="cartpage.html">
                    <div class="thumbnail">
                        <img src="images/6.jpg" alt="Shirt image">
                        <div class="caption">
                            <h3>Luis Phil</h3>
                            <p>Price:Rs.1000.00</p>
                        </div>
                        <button class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="cartpage.html">
                    <div class="thumbnail">
                        <img style="margin-bottom: 9%;" src="images/8.jpg" alt="Shirt image">
                        <div class="caption">
                            <h3>H&W</h3>
                            <p>Price:Rs.800.00</p>
                        </div>
                        <button class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="cartpage.html">
                    <div class="thumbnail">
                        <img src="images/13.jpg" alt="Shirt image">
                        <div class="caption">
                            <h3>John Zok</h3>
                            <p>Price:Rs.1500.00</p>
                        </div>
                        <button class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="cartpage.html">
                    <div class="thumbnail">
                        <img src="images/14.jpg" alt="Shirt image">
                        <div class="caption">
                            <h3>Jhalsani</h3>
                            <p>Price:Rs.1300.00</p>
                        </div>
                        <button class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </a>
            </div>
        </div>
    </div> -->
    <?php include 'footer.php' ?>
</body>

</html>