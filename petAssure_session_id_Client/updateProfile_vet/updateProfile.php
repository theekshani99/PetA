<?php
    $spid = $_GET['spid'];
    $nic = $_GET['nic'];
    $fname = $_GET['fname'];
    $mobile = $_GET['mobile'];
    $uname = $_GET['uname'];
    $district = $_GET['district'];
    $email = $_GET['email'];
    $details = $_GET['details'];
 
require '../db.php';

if (isset($_POST['update'])) {
    $spid = $_POST['spid'];
    $nic = $_POST['nic'];
    $fname = $_POST['fname'];
    $mobile = $_POST['mobile'];
    $district = $_POST['district'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $details = $_POST['details'];

    $query =  "update serviceprovider set fname='$fname', district='$district', email='$email', mobile='$mobile',uname='$uname',details='$details' where spid = '$spid'";
    $sql = mysqli_query($con, $query);
    if ($sql) {
        echo "<script>alert('Record update successfully')</script>";
        // header("Location:userProfile.php");
    } else {
        echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
    }
}
?>

<html>

<head>
    <!-- <link rel="stylesheet" href="updateProfile.css"> -->

    <title>Update Profile</title>
    <style>
    .nav {
        height: 70px;
        opacity: 90%;
        background-color: #A6A6A6;
        display: flex;
        flex-direction: row;
        z-index: 1;

    }

    body {
        background-image: url("../Images/bg2.PNG");
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        font: 100%/1.375 'Roboto', sans-serif;
        margin: 0;
        padding: 0;

    }

    .footerr {
        height: 50px;
        opacity: 80%;
        background-color: #A6A6A6;
        padding: 2px 2px 10px 2px;
        text-align: center;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: large;
        color: white;
    }

    a.font:before {
        content: "";
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        right: 0;
        background-color: #FFF;
        visibility: hidden;
        transition: all 0.3s ease-in-out;
    }

    a.font:hover:before {
        visibility: visible;
        width: 100%;
    }

    a.font {
        font-size: 20px;
        color: white;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-decoration: none;
        position: relative;
    }



    .left {
        flex: 0.5;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-start;
        margin-left: 30px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-size: 48px;
        color: #ffffff;

    }



    .right {
        flex: 0.5;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-around;
        margin-right: 30px;
    }

    #font {
        font-size: 20px;
        color: white;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-decoration: none;
    }

    .btn {
        padding: 10px 20px;
        background-color: #a6a6a6;
        cursor: pointer;
        transition: 0.5s;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
            Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
        border: none;
        outline: none;
        border-radius: .3rem;
    }

    .btn.transparent:hover {
        background-color: white;
        color: #727171;
    }

    .btn:hover {
        background-color: #727171;
    }

    .form-label {
        display: inline-block;
        width: 150px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .form-input {
        width: calc(100% - 160px);
        padding: 10px;
        /* border-radius: 5px; */
        border: 1px solid #ccc;
    }


    .form-container {
        width: 500px;
        padding: 30px;
        background-color: #f2f2f2;
        border-radius: 10px;
        box-shadow: 0px 0px 4px 0px #333;
        margin-top: 50px;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
            Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
    }

    .form-group {
        margin-top: 20px;
    }
    </style>



</head>

<body class="profile-page">
    <div class="nav" style="width: 100%;">
        <div class=" left">
            <img src="../Images/logo.png" width="100px" height="100px">
            <p style="margin-left: 20px;">PetAssure</p>
        </div>

        <div class="right">
            <a href=" ../home.php" class="font">HOME</a>
            <a href="../updateProfile_vet/userProfile.php" class="font">PROFILE</a>

            <a href="../vetDashboard/vetDashboard.php" class="font">DASHBOARD</a>
            <a href="../logout.php" class="font">LOG OUT </a>
        </div>
    </div>


    <!-- <center>
        <form action="" method="post">
            <div>
                <h2 style="margin-top: 50px ">Update Profile</h2>

                <input name="spid" type="hidden" maxlength="10" value="<?php echo $spid; ?>" />

                <input name="nic" type="hidden" maxlength="10" value="<?php echo $nic; ?>" />



                <div style="margin-top: 70px ">
                    <div class="labels">
                        Name
                    </div>
                    <div style="margin-left: 150px; margin-top: -20px;">
                        <input type="text" name="fname" value="<?php echo $fname; ?>" required>
                    </div>
                </div>

                <div style="margin-top: 50px">
                    <div class="labels">
                        Mobile Number:
                    </div>
                    <div style="margin-left: 150px; margin-top: -20px;">
                        <input type="text" name="mobile" value="<?php echo $mobile; ?>" required>
                    </div>
                </div>


                <div style="margin-top: 50px">
                    <div class="labels">
                        Address:
                    </div>
                    <div style="margin-left: 150px; margin-top: -20px;">
                        <input type="text" name="district" value="<?php echo $district; ?>">
                    </div>
                </div>
                <div style="margin-top: 50px">
                    <div class="labels">
                        Email :
                    </div>
                    <div style="margin-left: 150px; margin-top: -20px;">
                        <input type="text" name="email" value="<?php echo $email; ?>" required>
                    </div>
                </div>
                <div style="margin-top: 50px">
                    <div class="labels">
                        User Name :
                    </div>
                    <div style="margin-left: 150px; margin-top: -20px;">
                        <input type="text" name="uname" value="<?php echo $uname; ?>" required>
                    </div>
                </div>



                <div style="margin-top: 50px">

                    <div class="labels">
                        Description:
                    </div>

                    <div style="margin-left: 150px; margin-top: -20px;">
                        <input type="text" name="details" value="<?php echo $details; ?>" required>
                    </div>
                </div>

                <div style="margin-top:30px;">
                    <button type="submit" name="update" class="btn">Update Profile</button>
                </div>
        </form>
        </div>
    </center> -->
    <center>
        <form action="" method="post">
            <div class="form-container">
                <h2>Update Profile</h2>
                <input name="spid" type="hidden" maxlength="10" value="<?php echo $spid; ?>" />

                <input name="nic" type="hidden" maxlength="10" value="<?php echo $nic; ?>" />

                <div class="form-group">
                    <div class="form-label">Name</div>
                    <input type="text" name="fname" value="<?php echo $fname; ?>" required class="form-input">
                </div>

                <div class="form-group">
                    <div class="form-label">Mobile Number:</div>
                    <input type="text" name="mobile" value="<?php echo $mobile; ?>" required class="form-input">
                </div>

                <div class="form-group">
                    <div class="form-label">Address:</div>
                    <input type="text" name="district" value="<?php echo $district; ?>" class="form-input">
                </div>
                <div class="form-group">
                    <div class="form-label">Email:</div>
                    <input type="text" name="email" value="<?php echo $email; ?>" required class="form-input">
                </div>
                <div class="form-group">
                    <div class="form-label">User Name:</div>
                    <input type="text" name="uname" value="<?php echo $uname; ?>" required class="form-input">
                </div>

                <div class="form-group">
                    <div class="form-label">Description:</div>
                    <input type="text" name="details" value="<?php echo $details; ?>" required class="form-input">
                </div>

                <div class="form-group">
                    <button type="submit" name="update" class="btn">Update Profile</button>
                </div>
            </div>
        </form>
    </center>


    <div class="footerr" style="position:absolute; z-index: -1; width: 99%;">
        <p> Telephone No: +94 11 233 5632
            Fax: +94 11 233 5632
            Email: petAssure@hotmail.com​</p>
    </div>
</body>

</html>