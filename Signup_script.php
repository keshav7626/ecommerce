<?php
    require 'includes/common.php';
    if (isset($_SESSION['email'])) {
         header('location: productpage.php');
       }
    $name_error = '';
    $email_error = '';

    if(isset($_POST["submit"])){
        if(empty($_POST["name"])){
            $name_error = "<p> Please Enter Name </p>";
        }
        else{
            // if(!preg_match("/^[a-zA-Z]*$",$_POST["name"])){
            //     $name_error = "<p>Only Letter and whitespaces are allowed</p>";
            // }
            // use this type of validation, while filling itself in signuppage.php
        }
    }
    $email = $_POST['e-mail'];
    $name= $_POST['name'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $address = $_POST['address'];

    $select_query = "SELECT `email`  FROM `users` WHERE `email`='$email'";

    $select_query_result = mysqli_query($conn,$select_query);

    $rows= mysqli_num_rows($select_query_result);
    
    if($rows > 0){
        echo "The email is already exist";
    }else{
        $select_query = "INSERT INTO `users`(`name`, `email`, `password`, `contact`, `city`, `address`, `id`) VALUES ('$name','$email','$password','$contact','$city','$address','NULL')";
        mysqli_query($conn,$select_query);
        echo "<script>window.location.href='loginpage.php'</script>";
    }
    
    if (isset($_SESSION['email'])) {
        header(' location: products.php ');
       }
    
?>