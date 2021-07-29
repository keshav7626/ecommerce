<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Settings</title>
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
                        <li><a href="cartpage.html"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li><a href="settingpage.html"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
                        <li><a href="logoutpage.html"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                    </ul>
        </div>
      </div>
    </nav><br><br><br>
    <div class="container-fluid">
        <div class="row">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <h2>Change Password</h2>
                    <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="Old Password" name="Old Password"  required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control"  placeholder="New Password"  name="New Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm Password" name="Confirm password" required = "true">
                        </div>

                        <button type="submit" name="Change" class="btn btn-primary">Change</button>
                    </form>
                </div>
            </div>
        </div>

    <footer style="margin-top: 22%;">
        <div class="container">
            <p >Copyright © Lifestyle Store. All Rights Reserved and Contact Us: +91 90000 00000</p>
        </div>
    </footer>