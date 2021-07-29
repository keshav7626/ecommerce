<?php
    require 'includes/common.php';
    if (isset($_SESSION['email'])) {
        header('location: productpage.php');
       }
    
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $email = mysqli_real_escape_string($conn,$email);
        $password = mysqli_real_escape_string($conn,$password);

      //   $password = md5($password,true);

        $sql = "SELECT  * FROM `users` where `email`='$email' and `password`='$password'";
		 
        $result = mysqli_query($conn , $sql) or die("Query Failed");
   
         if ($result->num_rows > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               // printf("<br> email: %s, <br> password: %s <br />", 
               //    $row["email"],
               //    $row["password"]);     
               $user_id=$row['id'];          
            }
            //$sql->close();
         } else {
            printf('No record found.<br />');
         }
         mysqli_free_result($result);
         
         $conn->close();
         

        $_SESSION["email"] = $email;
        $_SESSION["USER_ID"] = $user_id;
        if (isset($_SESSION['email'])) {
            header('location: productpage.php');
           }
   
       // Making Connection with database
   
    //    $con = new mysqli('localhost','root','','phpdata');
    //    if ($con -> connect_error) {
    //    die('Connection failed :'.$conn -> connect_error);
    //    }
    //    else{
    //    $stmt = $con->query("INSERT INTO signup(firstName, lastName, email, password, 
    //    number, date, gender)
    //        values(?,?,?,?,?,?,?)");
    //    $stmt->bind_param("ssssiss",$firstName, $lastName, $email, $password, 
    //    $number, $date, $gender);
    //    $stmt->execute();
    //    echo "Sign up successful";
    //    $stmt->close();
    //    $con->close();
    //     }
?>