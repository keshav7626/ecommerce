<?php
    require 'includes/common.php';
    if (isset($_SESSION['email'])) {
        header('location: productpage.php');
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
    <title>Signup</title>
</head>

<body>
    <?php
    $name_error='';
    include 'header.php';?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                <h2>SIGN UP</h2>
                <form method="post" action="Signup_script.php">
                    <div class="form-group">
                        <input class="form-control" placeholder="Name" name="name" required="true" maxlength="15" ,
                            minlength="4">
                        <span class="text-danger"><?php echo $name_error ?> </span>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" name="e-mail" required="true"
                            maxlength="150" , minlength="4">
                    </div>
                    <div class="form-group">
                        <input pattern="(?=.*d)(?.=*[a-z])(?=.*[A-Z].{8,}" type="password" class="form-control"
                            placeholder="Password" name="password" required="true">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Contact" name="contact" required="true">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="City" name="city" required="true">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Address" name="address" required="true">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>

</html>