

<?php

include_once("db.php");
session_start();


if (isset($_POST['but_submit'])) {
    $uname = $_POST['uname'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `serviceprovider`  WHERE uname='$uname' AND password='$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row1 = mysqli_fetch_assoc($result);
        

        if ($row1['uname'] == $uname && $row1['password'] == $password) {
           
            $_SESSION['nic'] = $row1['nic'];
            header("Location:vetDashboard/vetDashboard.php");
        }
        
    
      
    } 

    else {
        echo "<script type='text/javascript'>alert('Incorrect username or password');</script>";
  
       
    }
       
        } 
       

    


?>


<html>

<head>
    <link rel="stylesheet" href="styles_login.css">

    <title>Login</title>
   

    <style>
    a{
 text-decoration: none;
 }

        </style>
       
</head>

<body>

    <nav class="navigation-bar">
        <img class="logo" src="Images/logo.png">
        <p style="margin-left: 20px;">PetAssure</p>


    </nav>
    <div>
        <div class="center">
            <div class="bodycontent">
                <div class="form">
                    <form method="Post" action="">

                        <h2>LOGIN</h2>

                        <div class="formcontent">
                            <div class="formlabel"> User Name: </div>
                            <div class="formin"><input class="input_box" type="text" name="uname" required></div>
                        </div>

                        <br>

                        <div class="formcontent">
                            <div class="formlabel"> Password: </div>
                            <div class="formin">
                                <input class="input_box" type="password" name="password" required></div>
                        </div>

                        <br>


                        <div class="formcontent">
                        <div class="formin">

                                <input class="button" type="submit" name="but_submit" id="but_submit" value="Sign In" />

                            </div>
                        </div>

                        <br>
                        <div class="formlabel">Forgot Password? <a class="createlink" href="forgotPassword.php"><strong>Change
                                Password</strong></a></div>
                        <br>


                        <div class="formlabel">New User? <a class="createlink" href="signup.php"><strong?>Sign Up now</strong></a><br>


                               </div>

                    </form>



                </div>
            </div>
        </div>
    </div>
</body>

</html>
