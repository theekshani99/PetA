
<?php
require 'db.php';
session_start();
//$user ="";
if(isset($_SESSION["nic"])) {


   $nic =$_SESSION["nic"];
}else{
   header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles_updateVetPofile.css" />
    <title>Veterinarian Profile</title>



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

</head>

<body class="bg">

    <link rel="stylesheet" href="navigation.css">

    <title>PetAssure</title>
    </head>

    <body>
        <div class="page">
            <?php include '/navigation/navigation.php';?>
            <div class="body">
                <p class="userProfile">User Profile</p>
                <div style="margin-bottom:10px ;">
                    <img src="Images/photo1.png" style="width: 300;height:200px; margin-left:280px;
     border-radius: 10%; ">

                    <img src="Images/photo1.png" style="width: 300;height:200px;
border-radius: 10%;margin-left:50px ">


                    <img src="Images/photo1.png" style="width: 300;height:200px;
border-radius: 10%; margin-left:50px">
                    <img src="Images/photo1.png" style="width: 300;height:200px;
            border-radius: 10%;margin-left:50px ">



                </div>

            </div>




            <form name="" action="updateVetProfile.html" method="post">
                <div style="width: 50%; margin-left: 350px; ">

                    <div class="form_left">
                        <P>NIC</P>
                        <p>Fullname</p>
                        <p>Mobile Number</p>
                        <p>District</p>
                        <p>Email</p>
                        <p>Password</p>
                        <p>Description</p>

                    </div>

                    <div class="form_right">
                        <input type="text" name="nic" id="nic" />
                        <input type="text" name="fname" id="fname" />
                        <input type="text" name="mobileno" id="mobileno" />
                        <input type=" text" name="district" id="district" />
                        <input type="email" name="email" id="email" />
                        <input type="text" name="pword" id="pword" />
                        <textarea id="details" name="details" rows="5" cols="30"> </textarea>

                    </div>

                </div>

            </form>










            <div style="height: 390px"></div>


            <button class="form_btn" type="submit" onclick="adminRequest()">Request to delete</button>

            <button class="form_btn" type="button" onclick="updateProfile()" id="btnEnable">Update</button>
            <div class="footerr" style="position:absolute; z-index: -1; width: 99%;">
                <p> Telephone No: +94 11 233 5632
                    Fax: +94 11 233 5632
                    Email: petAssure@hotmail.com​</p>
            </div>
        </div>


    </body>