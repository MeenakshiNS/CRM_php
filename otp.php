<?php include_once('dbconnection.php');

?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>OTP Verification Form</title>
    <link rel="stylesheet" href="./css/otp.css" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
   <script src="script.js" defer></script>
  </head>
  <body>
    <div class="container">
      <header>
        <i class="bx bxs-check-shield"></i>
      </header>
      <h4>Enter OTP Code</h4>
      <form action="#" method="post">
        <div class="input-field">
          <input type="number" name="otp[]" />
          <input type="number" name="otp[]" />
          <input type="number"  name="otp[]" />
          <input type="number" name="otp[]"/>
        </div>
        <button name="verify">Verify OTP</button>
      </form>
      <?php
      if(isset($_POST['verify'])){
        // Retrieve the entered OTP values
    $otp_entered = $_POST['otp'];

    // Concatenate the OTP values into a single string
    $entered_otp = implode('', $otp_entered);
    echo $entered_otp;
        
        // Retrieve the stored OTP from the database
        $sql = "SELECT otp FROM user WHERE otp='$entered_otp'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $otp_stored = $row['otp'];
        echo $otp_stored;
    
        // Verify if the entered OTP matches the stored OTP
        if($entered_otp == $otp_stored){
            // OTP is verified successfully, allow user to reset password
            header('Location: reset_password.php');
            exit();
        } else {
            // OTP verification failed, display error message
            echo "Invalid OTP. Please try again.";
        }
    }
    
    ?>

   
    </div>
  </body>
</html>

