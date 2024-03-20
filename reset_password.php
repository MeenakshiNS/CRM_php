<?php include_once('dbconnection.php');
if(isset($_POST['btnSubmit'])){
  $email=$_POST['email'];
  $password=$_POST['resetpass'];

  $sql="UPDATE user SET password='$password' WHERE email='$email'";
   if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Password has been reset successfully!')</script>";
     header("Location: login.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reset password</title>
</head>
<body>
  <form action="" method="post">

    <input type="email" name="email" id="" placeholder="email">
    <br><br>
    <input type="password" name="resetpass" id="">
    <button type="submit" name="btnSubmit" >Reset Password</button>
  </form>  
</body>
</html>