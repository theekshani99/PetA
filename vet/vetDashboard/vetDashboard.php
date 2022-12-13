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

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>PetAssure</title>


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
                <li><a href="#">
                        <i class="uil uil-bell"></i>
                        <span class="link-name">Notifications</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-history"></i>
                        <span class="link-name">History</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-calender"></i>
                        <span class="link-name">Appointments</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-comments"></i>
                        <span class="link-name">Feedbacks</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-chat"></i>
                        <span class="link-name">Free Consultation</span>
                    </a></li>

            </ul>

            <ul class="logout-mode">
                <li><a href="#">
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
    
      $rows = mysqli_query($con, "SELECT * FROM tb_upload ORDER BY id DESC")
      ?>

      <?php foreach ($rows as $row) : ?>
    
        <!--<td><?php echo $i++; ?></td>
        <td><?php echo $row["name"]; ?></td>-->
        <td> 
            <img src="../img/<?php echo $row["image"]; ?>" width = 200 height=250 title="<?php echo $row['image']; ?>">
         </td>
      
      <?php endforeach; ?>
    </table>
        </center>
       
    <?php

$sql = "SELECT * FROM serviceprovider WHERE nic = '$nic'" ;

if ($result = mysqli_query($con, $sql))
 {
   
  
    if (mysqli_num_rows($result) > 0) {
     
        
        while ($row = mysqli_fetch_array($result)) {
           

            echo " <div style='text-align:left;'>";
            echo "<div class='info'><strong>Name:</strong> <span>" . $row['fname'] . "</span></div>";
            echo "<div class='info'><strong>Mobile:</strong> <span>" . $row['mobileno'] . "</span></div>";
            echo "<div class='info'><strong>Email:</strong> <span>" . $row['email'] . "</span></div>";
            echo "<div class='info'><strong>Address:</strong> <span>" . $row['address'] . "</span></div>";
            echo "<div class='info'><strong>User Description:</strong> <span>" . $row['details'] . "</span></div>";
        }
        
    }
   
}
            
            ?>
            
       
<center>



        <div style="height:280px; width: 700px;overflow:scroll;border: 0px solid #ddd;">
            <div class="days">
                <div class="day">
                    <div class="datelabel"><strong>Friday</strong><br />August 23</div>
                    <div class="timeslot">9:00am</div>
                    <div class="timeslot">9:30am</div>
                    <div class="timeslot">10:00am</div>
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


</body>


</html>