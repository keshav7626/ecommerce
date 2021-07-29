<?php
require('includes/common.php');
require('includes/functions.php');
unset($_SESSION['email']);
unset($_SESSION['USER_ID']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>

<body>
    <h5>Logout done successfully.</h5>

</body>

</html>
<?php
echo "<script>window.location.href='index.php'</script>";
die();

?>