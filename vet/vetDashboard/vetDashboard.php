<?php
require 'db.php';
session_start();

 
$nic="";
$fname="";
$mobileno="";
$email="";
$address="";
$details="";

if(isset($_SESSION["nic"]) ){
   $nic =$_SESSION["nic"];
}else{
  // header("location:login.php");
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
                <li><a href="#">
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
        <div style="padding-bottom: 20px;">


            <p>
                hbgdhcsbbsjchbscjhbsfbidkjsdnvkjnxcvbcxzhvlfhsbzhbgdhcsbbsjchbscjhbsfbidkjsdnvkjnxcvbcxzhvlfhsbzhbgdhcsbbsjchbscjhbsfbidkjsdnvkjnxcvbcxzhvlfhsbz
            </p>
            <p>hbgdhcsbbsjchbscjhbsfbidkjsdnvkjnxcvbcxzhvlfhsbzhbgdhcsbbsjchbscjhbsfbidkjsdnvkjnxcvbcxzhvlfhsbzhbgdhcsbbsjchbscjhbsfbidkjsdnvkjnxcvbcxzhvlfhsbz
            </p>


            <p>hbgdhcsbbsjchbscjhbsfbidkjsdnvkjnxcvbcxzhvlfhsbzhbgdhcsbbsjchbscjhbsfbidkjsdnvkjnxcvbcxzhvlfhsbzhbgdhcsbbsjchbscjhbsfbidkjsdnvkjnxcvbcxzhvlfhsbz
            </p>
            

        </div>

        <?php
                
               
               
                // $sql = "SELECT nic,fname,mobileno,email,address,details FROM serviceprovider WHERE nic = '$nic'" ;
                 $sql = "SELECT * FROM serviceprovider WHERE nic = '$nic'" ;

                $result = mysqli_query($con, $sql);

                if($result==TRUE){

                    $count_rows = mysqli_num_rows($result);

                 //  $_SESSION['nic'];

                    if($count_rows > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            
                            $nic= $row['nic'];
                            $fname=$row['fname'];
                            $mobileno=$row['mobileno'];
                            $email=$row['email'];
                            $address=$row['address'];
                            $details=$row['details'];
                        }
                    }
                }
                
            ?>
  
  <div>
                        <table>
                        <tr>
                                <th>NIC</th>
                                <th style="border: 1px solid #071D70;border-radius:10px;color:black"><?php echo $nic ?></th>
                            </tr>
                            <tr>
                                <th>Name </th>
                                <th style="border: 1px solid #071D70;border-radius:10px;color:black"><?php echo $fname ?></th>
                            </tr>
                            <tr>
                                <th>Employee&nbsp;Id </th>
                                <th style="border: 1px solid #071D70;border-radius:10px;color:black"><?php echo $mobileno?></th>
                            </tr>
                            <tr>
                                <th>Department </th>
                                <th style="padding:8px 70px;border: 1px solid #071D70;border-radius:10px;color:black"><?php echo $email ?></th>
                            </tr>
                            <tr>
                                <th>Job&nbsp;Role </th>
                                <th style="border: 1px solid #071D70;border-radius:10px;color:black"><?php echo $address ?></th>
                            </tr>
                            <tr>
                                <th>Email </th>
                                <th style="border: 1px solid #071D70;border-radius:10px;color:black"><?php echo $details ?></th>
                            </tr>
                           
                        </table>
                    </div>            

            
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