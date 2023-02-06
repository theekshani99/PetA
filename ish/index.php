<?php
session_start();
require_once('../db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $description = mysqli_real_escape_string($con, $_POST['description']);

  $sql = "INSERT INTO payment (description) VALUES ('$description')";
  
  $result = mysqli_query($con, $sql);
  
  if ($result) {
     echo '<script type="text/javascript"> alert("Your Payment has been completed.")</script>';
     header("Location: login.php");
     exit();
  } else {
     echo '<script type="text/javascript"> alert("Try Again")</script>';
  }
  
  mysqli_close($con);
}
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/signup2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<div class="input-box">
    <div style=margin-top:-340px;margin-left:-720px>

        <img src="logo.png" height="160">
    </div>
</div>
<div class="input-box">
    <div style=margin-top:-280px;margin-left:-580px>
        <img src="PetAssure.png" height="35">

    </div>
</div>
<!-- <div class="input-box"> -->
<!-- <div style=margin-top:135px;margin-left:-690px>

        <img src="g3.png" height="400">
    </div> -->
<!-- </div> -->
<!-- <div class="input-box">
    <div style=margin-top:195px;margin-left:-390px>

        <img src="g4.png" height="160">
    </div>
</div> -->

<body>

    <style>

    </style>
    <?php 
        $rows=mysqli_query($con, "SELECT * FROM payment INNER JOIN appointment ON payment.appNo = appointment.appNo INNER
        JOIN client ON appointment.clientid = client.clientid" ); 
    ?>
    <div class="content">
        <form action="index.php" method="">
            <h2>Payment Confirmation</h2>
            <?php

      $rows = mysqli_query($con, "SELECT payment.invoiceno, appointment.appNo, client.fnameClient, client.mobileClient FROM payment
            JOIN appointment ON payment.appNo = appointment.appNo
            JOIN client ON appointment.clientid = client.clientid");
      echo "hii";
    //   while ($row = mysqli_fetch_assoc($rows)) :
    // ?>
            <div class="user-details">
                <div class="input-box">
                    <p>gg</p>
                    <span class="details">Invoice Number</span>
                    <input type="text" value="<?php echo $row['invoiceno']; ?>" readonly>
                </div>
                <div class="input-box">
                    <span class="details">Appointment Number</span>
                    <input type="text" value="<?php echo $row['appNo']; ?>" readonly>
                </div>
                <div class="input-box">
                    <span class="details">Customer Name</span>
                    <input type="text" value="<?php echo $row['fnameClient']; ?>" readonly>

                    <div class="input-box">
                        <span class="details">Mobile Number</span>

                        <input type="text" value="<?php echo $row['mobileClient']; ?>" readonly>
                    </div>

                </div>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Description</span>

                        <textarea name="description" id="" cols="55" rows="4"
                            placeholder="Enter payment details"></textarea>
                    </div>


                    <input type="submit" class="button" value="payment" name="submit">



                    <p> elloh </p>




                    <div class="footerr" style=" z-index: -1; width: 100%;">
                        <p> Telephone No: +94 11 233 5632&nbsp;&nbsp;&nbsp;&nbsp;
                            Fax: +94 11 233 5632 &nbsp;&nbsp;&nbsp;&nbsp;Email: petAssure@hotmail.com​</p>
                    </div>
                </div>
            </div>

</body>

</html>