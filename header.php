<?php include('includes/common.php');
include('includes/functions.php'); ?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Lifestyle Store</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                ?>
                <li><a href="cartpage.php"><span class="glyphicon glyphicon-shoppingcart"></span> Cart </a></li>
                <li><a href="settingpage.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
                <li><a href="logoutpage.php"><span class="glyphicon glyphicon-login"></span> Logout</a></li>
                ?>
                <?php
                } else {
                    ?>
                <li><a href="signuppage.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                <li><a href="loginpage.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div><br><br><br>