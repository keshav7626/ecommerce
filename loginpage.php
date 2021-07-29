<?php
    require 'includes/common.php';
    if (isset($_SESSION['email'])) {
        header('location: products.php');
       }
       
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
    <title>Login</title>
</head>

<body>
    <?php include 'header.php';?>
    <div class="container">
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>LOGIN</h4>
                    </div>
                    <div class="panel-body">
                        <div>
                            <p class="text-warning">Login to make a purchase</p>
                        </div>
                        <form method="post" action="login_submit.php">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email"
                                    required="true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password"
                                    required="true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                        </form><br />
                    </div>
                    <div class="panel-footer">
                        <p>Don't have an account? <a href="#">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>