<?php
require 'db.php';
session_start();
$nic ="";
if(isset($_SESSION["nic"]) ){
   $nic =$_SESSION["nic"];
}else{
   //header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="style_vetDashboard.css">
    <script src="https://kit.fontawesome.com/ffeda24502.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>PetAssure</title>
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

<body class="body-scroller">

    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="logo.png" alt="">
            </div>

            <span class="logo_name">PetAssure</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="../updateVetProfile.php">
                        <i class="uil uil-user"></i>
                        <span class="link-name">Update Profile</span>
                    </a></li>
                    <li><a href="../notifications/notifications.php">
                        <i class="uil uil-bell"></i>
                        <span class="link-name">Notifications</span>
                    </a></li>
                    <li><a href="../history/history.php">
                        <i class="uil uil-history"></i>
                        <span class="link-name">History</span>
                    </a></li>
                    <li><a href="../appointments/appointments.php">
                        <i class="uil uil-calender"></i>
                        <span class="link-name">Appointments</span>
                    </a></li>
                    <li><a href="../feedbacks/feedbacks.php">
                        <i class="uil uil-comments"></i>
                        <span class="link-name">Feedbacks</span>
                    </a></li>
                    <li><a href="../freeConsultation/freeConsultation.php">
                        <i class="uil uil-chat"></i>
                        <span class="link-name">Free Consultation</span>
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
        <center>
        <table class="styled-table" cellspacing=0 cellpadding=30>
      
      <?php
    
      $rows = mysqli_query($con, "SELECT * FROM tb_upload ")
      ?>

      <?php foreach ($rows as $row) : ?>
    
        <td> 
       
           
            <img src="../img/<?php echo $row["image"]; ?>" width = 150 height=200 title="<?php echo $row['image']; ?>">
         </td>
      
      <?php endforeach; ?>
    </table>
      </center>
    
     
       <div class="container">
    <?php

$sql = "SELECT * FROM serviceprovider-vet WHERE nic = '$nic'" ;

if ($result = mysqli_query($con, $sql))
 {
   
  
    if (mysqli_num_rows($result) > 0) {
     
        
        while ($row = mysqli_fetch_array($result)) {
           

            echo " <div style='text-align:left;'>";
            echo "<div class='info'><strong>  <i class='fa-solid fa-user'></i>   :</strong> <span>" . $row['fname'] . "</span></div>";
            echo "<div class='info'><strong><i class='fa-solid fa-phone-volume'></i>   :</strong> <span>" . $row['mobileno'] . "</span></div>";
            echo "<div class='info'><strong><i class='fa-solid fa-envelope'></i>   :</strong> <span>" . $row['email'] . "</span></div>";
            echo "<div class='info'><strong><i class='fa-solid fa-location-dot'></i>   :</strong> <span>" . $row['address'] . "</span></div>";
            echo "<div class='info'><strong><i class='fa-sharp fa-solid fa-folder-open'></i>   :</strong> <span>" . $row['details'] . "</span></div>";
        }
        
    }
   
}
            
            ?>
            
</div>
</div>



<center>
        <div style="height:280px; width: 700px;overflow:scroll;border: 0px solid #ddd;">
            <div class="days">
                <div class="day">
                    <div class="datelabel"><strong>Friday</strong><br />August 23</div>
                    <div class="timeslot">9:00am</div>
                    <div class="timeslot" style =" background-color:red">9:30am</div>
                    <div class="timeslot" style =" background-color:green">10:00am</div>
                    <div class="timeslot">10:40am</div>
                </div>
                <div class="day">
                    <div class="datelabel"><strong>Saturday</strong><br />August 24</div>
                    <div class="timeslot">8:30pm</div>
                    <div class="timeslot">9:30am</div>
                    <div class="timeslot">10:00am</div>
                </div>
                <div class="day">
                    <div class="datelabel"><strong>Sunday</strong><br />August 25</div>
                    <div class="timeslot">8:30pm</div>
                    <div class="timeslot">9:30am</div>
                    <div class="timeslot">10:00am</div>
                </div>
                <div class="day">
                    <div class="datelabel"><strong>Monday</strong><br />August 26</div>
                    <div class="timeslot">8:30pm</div>
                    <div class="timeslot">9:30am</div>
                    <div class="timeslot">10:00am</div>
                </div>
                <div class="day">
                    <div class="datelabel"><strong>Tuesday</strong><br />August 27</div>
                    <div class="timeslot">8:30pm</div>
                    <div class="timeslot">9:30am</div>
                    <div class="timeslot">10:00am</div>
                </div>
                <div class="day">
                    <div class="datelabel"><strong>Wednesday</strong><br />August 28</div>

                    <div class="timeslot">9:30am</div>
                    <div class="timeslot">10:00am</div>
                </div>
            </div>
        </div>
</center>

        <script src="script.js"></script>

    </section>

<div class="footerr" style="position:absolute; z-index: -1; width: 99%;">
    <p> Telephone No: +94 11 233 5632
        Fax: +94 11 233 5632
        Email: petAssure@hotmail.com​</p>
</div>
</body>


</html>