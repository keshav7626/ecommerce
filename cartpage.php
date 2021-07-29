<?php
include('includes/common.php');
include('includes/functions.php');
?>
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
    <title>Cart</title>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="indexpage.html">Lifestyle Store</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="cartpage.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li><a href="settingpage.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
                    <li><a href="logoutpage.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                </ul>
            </div>
        </div>
    </nav><br><br><br>

    <div class="container">
        <table class="table table-striped table-hover">
            <caption>Your Cart</caption>
            <tbody>

                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                </tr>
                <?php
                $total_price=0;
                $res=mysqli_query($conn,"SELECT * FROM `user_items` ");
                while($row=mysqli_fetch_assoc($res)){
                    $item_id=$row['item_id'];
                    $res2=mysqli_query($conn,"SELECT * FROM `products` WHERE `products`.`id`='$item_id'");
                    $row2=mysqli_fetch_assoc($res2);?>
                <tr>

                    <td><?php echo $row2['id']; ?> </td>
                    <td><?php echo $row2['name']; ?> </td>
                    <td>Rs.<?php echo $row2['price']; ?> </td>
                    <?php $total_price=$total_price+$row2['price']; ?>
                </tr>
                <?php } ?>
                <tr>
                    <td> </td>
                    <td> Total</td>
                    <td>Rs.<?php echo $total_price; ?></td>
                    <td><a href="successpage.php"><button class="btn btn-primary btn-block">Confirm Order</button></a>
                    </td>
                </tr>
            </tbody>

        </table>
    </div>
    <footer style="margin-top: 29%;">
        <div class="container">
            <p>Copyright © Lifestyle Store. All Rights Reserved and Contact Us: +91 90000 00000</p>
        </div>
    </footer>