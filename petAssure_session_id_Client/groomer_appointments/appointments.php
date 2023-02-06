<?php
require '../db.php';
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


    <link rel="stylesheet" href="style_appointments.css">
    <script src="https://kit.fontawesome.com/ffeda24502.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>PetAssure</title>



</head>

<body class="body-scroller">

    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="../Images/logo.png" alt="">
            </div>

            <span class="logo_name">PetAssure</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="../groomerDashboard/groomerDashboard.php">
                        <i class="uil uil-dashboard"></i>
                        <span class="link-name">Dashboard</span>
                    </a></li>
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


        <center>
            <h2>Your Appointments</h2>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Client Name</th>
                        <th>Cancel</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td> <i class="fa fa-ban" aria-hidden="true"></i></td>
                    </tr>
                    <tr class="active-row">
                        <td></td>


                        <td></td>

                        <td></td>
                        <td> <i class="fa fa-ban" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td> <i class="fa fa-ban" aria-hidden="true"></i></td>
                    </tr>
                    <tr class="active-row">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td> <i class="fa fa-ban" aria-hidden="true"></i></td>
                    </tr>

                </tbody>
            </table>
        </center>





        </div>
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