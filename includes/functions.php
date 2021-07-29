<?php 
   function check_if_added_to_cart($conn,$item_id){
      $user_id=$_SESSION['USER_ID'];
    $res=mysqli_query($conn, "SELECT * FROM `user_items` WHERE `item_id`='$item_id' AND `user_id` ='$user_id' and `status`='1'");
   // echo "SELECT * FROM `user_items` WHERE `item_id`='$item_id' AND `user_id` ='$user_id' and `status`='1'";
if(mysqli_num_rows($res)>=1){
return 1;
}else{
    return  0;
}
}
?>