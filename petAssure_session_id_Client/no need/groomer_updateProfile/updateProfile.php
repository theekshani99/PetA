<?php
require '../db.php';
session_start();
$nic ="";
if(isset($_SESSION["nic"]) ){
   $nic =$_SESSION["nic"];
}else{
   //header("location:login.php");
}

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    if($_FILES["image"]["error"] == 4){
      echo
      "<script> alert('Image Does Not Exist'); </script>"
      ;
    }
    else{
      $fileName = $_FILES["image"]["name"];
      $fileSize = $_FILES["image"]["size"];
      $tmpName = $_FILES["image"]["tmp_name"];
  
      $validImageExtension = ['jpg', 'jpeg', 'png'];
      $imageExtension = explode('.', $fileName);
      $imageExtension = strtolower(end($imageExtension));
      if ( !in_array($imageExtension, $validImageExtension) ){
        echo
        "
        <script>
          alert('Invalid Image Extension');
      </script>
        ";
      }
      else if($fileSize > 10000000000){
        echo
        "
        <script>
          alert('Image Size Is Too Large');
      </script>
        ";
      }
      else{
        $newImageName = uniqid();
        $newImageName .= '.' . $imageExtension;
  
        move_uploaded_file($tmpName, '../groomer_img/' . $newImageName);
        $query = "INSERT INTO groomerimage VALUES('', '$name', '$newImageName')";
        mysqli_query($con, $query);
        echo
        "
        <script>
          alert('Successfully Added');
         
      </script>
        ";
      }
    }
  }
  $sql = "SELECT * FROM serviceprovider WHERE nic = '$nic'" ;

  ($result = mysqli_query($con, $sql));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="style_updateProfile.css">
    <script src="https://kit.fontawesome.com/ffeda24502.js" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <script>
        function adminRequest() {
            var adminText = "Your account has been requested to be deleted.";
            alert(adminText);
        }
        function updateProfile() {
            var updateText = "Your account has been updated.";
            alert(updateText);
        }
        
    </script>
    <style>
    .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    box-shadow: 0 0 20px rgba(0, 10, 0, 0.15);
}
.styled-table  tr {
    background-color: #E0E0E0;
    color: #ffffff;
   
}
.styled-table  tr {
    border-bottom: 1px solid #A6A6A6;
}


   </style>


</head>
<body>


    <nav>
        <div class="logo-name">
        <div class="logo-image">
                <img src="../Images/logo.png" alt="">
            </div>

            <span class="logo_name">PetAssure</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
            <li><a href="../groomer_updateProfile/updateProfile.php">
                        <i class="uil uil-user"></i>
                        <span class="link-name">Update Profile</span>
                    </a></li>
                    <li><a href="../groomer_notifications/notifications.php">
                        <i class="uil uil-bell"></i>
                        <span class="link-name">Notifications</span>
                    </a></li>
                    <li><a href="../groomer_history/history.php">
                        <i class="uil uil-history"></i>
                        <span class="link-name">History</span>
                    </a></li>
                    <li><a href="../groomer_appointments/appointments.php">
                        <i class="uil uil-calender"></i>
                        <span class="link-name">Appointments</span>
                    </a></li>
                    <li><a href="../groomer_feedbacks/feedbacks.php">
                        <i class="uil uil-comments"></i>
                        <span class="link-name">Feedbacks</span>
                    </a></li>
                   

            </ul>

            <ul class="logout-mode">
                <li><a href="../login.php">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Logout</span>
                    </a></li>


            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

        </div>
        <div style="padding-bottom: 20px;"></div>
       

          
           
            

<p class="userProfile">Update Profile</p>
                <div style="margin-bottom:10px ;">
                    


                <center>
        
        


        <table class="styled-table" cellspacing=0px cellpadding=5px>
          
            <?php
   
      $rows = mysqli_query($con, "SELECT * FROM groomerimage ")
      ?>

            <?php foreach ($rows as $row) : ?>

            <td> 
              <img src="img/<?php echo $row["image"]; ?>" width = 150 height=200 title="<?php echo $row['image']; ?>">
            </td>


            <?php endforeach; ?>
        </table>
        <br>
           
        <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
          
            <label class="txt" for="name">Image Description: </label>
            <input class ="inpt"type="text" name="name" id="name" required value=""> <br>
            <label class="txt" for="image">Select Image : </label>
            <input class ="form_btn2" type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value=""> <br> 
            <button class="form_btn2" type="submit" name="submit">Insert Image</button>
        </form>
        <br>
      


    </div>

</div>


            </center>
            

<!-- <form name="" action="updateVetProfile.php" method="post"> -->
    <div style="width: 50%; margin-left: 350px; ">

         <div class="form_left">
            <p>NIC</p>
            <p>Fullname</p>
            <p>Mobile Number</p>
            <p>Address</p>
            <p>Email</p>
            <p>UserName</p>
            <p>Password</p> 
            <p>Description</p>

        </div>
         
        


 <?php
        
        while ($rows = $result->fetch_assoc()) {
          ?>
        <div class=form_right>
            <input type="text"value="<?php echo $rows['nic']; ?>">
            <input type="text" value="<?php echo $rows['fname']; ?>">
            <input type="text" value="<?php echo $rows['mobileno']; ?>">
            <input type=" text" value="<?php echo $rows['district']; ?>">
            <input type="email" value="<?php echo $rows['email']; ?>">
            <input type="text" value="<?php echo $rows['username']; ?>">
           
            <input type="password" value="<?php echo $rows['pword']; ?>"> 
            <input type="text" value="<?php echo $rows['details']; ?>">
             
           <?php
           }
          ?>


    </div>





          </div>






<div style="height: 390px"></div>

<center>
<button class="form_btn" type="submit" onclick="adminRequest()">Request to delete</button>

<button class="form_btn" type="button" onclick="updateProfile()" id="btnEnable">Update</button>
          </center>
</div>




        <script src="script.js"></script>

    </section>

<div class="footerr" style="position:absolute; z-index: -1; width: 99%;">
    <p> Telephone No: +94 11 233 5632
        Fax: +94 11 233 5632
        Email: petAssure@hotmail.com​</p>
</div>
</body>


</html>