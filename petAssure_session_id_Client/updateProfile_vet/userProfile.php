<?php
require '../db.php';
session_start();
$nic ="";
if(isset($_SESSION["spid"]) ){
   $spid =$_SESSION["spid"];
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
      else if($fileSize > 10000000){
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
  
        move_uploaded_file($tmpName, '../vet_img/' . $newImageName);
        $query = "INSERT INTO vetimage VALUES('', '$name', '$newImageName')";
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
  $sql = "SELECT * FROM serviceprovider WHERE spid = '$spid'" ;

  ($result = mysqli_query($con, $sql));
?>




<html>

<head>
    <link rel="stylesheet" href="userprofile.css">

    <title>User Profile</title>
    <script>
    function adminRequest() {
        var adminText = "Your account has been requested to be deleted.";
        alert(adminText);
    }
    </script>

    <style>
    .nav {
        height: 70px;
        opacity: 95%;
        background-color: #A6A6A6;
        display: flex;
        flex-direction: row;
        z-index: 1;

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
    </style>

</head>

<body>

    <body class="profile-page">
        <div class="nav" style="width: 100%;">
            <div class="left">
                <img src="../Images/logo.png" width="100px" height="100px">
                <p style="margin-left: 20px;">PetAssure</p>
            </div>

            <div class="right">
                <a href="../home.php" class="font">HOME</a>
                <a href="../vetDashboard/vetDashboard.php" class="font">DASHBOARD</a>

                <a href="../logout.php" class="font">LOG OUT </a>
            </div>
        </div>
        <div>
            <div class="center">
                <div class="bodycontent">

                    <center>

                        <table class="styled-table1" cellspacing=0px cellpadding=5px>

                            <?php
   
      $rows = mysqli_query($con, "SELECT * FROM  vetimage")
      ?>

                            <?php foreach ($rows as $row) : ?>

                            <td>
                                <img src="../vet_img/<?php echo $row["image"]; ?>" width=100 height=150
                                    title="<?php echo $row['image']; ?>">
                            </td>


                            <?php endforeach; ?>
                        </table>
                        <br>
                        <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">

                            <label class="txt" for="name">Image Description: </label>

                            <input class="input_box" type="text" name="name" id="name" required value="">
                            <br>


                            <label class="txt" for="image">Select Image : </label>

                            <input class="input_box" type="file" name="image" id="image" accept=".jpg, .jpeg, .png"
                                value="">

                            <br>

                            <button class="form_btn2" type="submit" name="submit">Insert Image</button>
                        </form>
                        <br>



                </div>

            </div>


            <?php
        while ($rows = $result->fetch_assoc()) {
          ?>

            <center>

                <table class="styled-table">

                    <tbody>

                        <tr>
                            <td>NIC</td>
                            <td><?php echo $rows['nic']; ?></td>


                        </tr>
                        <tr>
                            <td>Fullname</td>
                            <td><?php echo $rows['fname']; ?></td>
                        </tr>
                        <tr>
                            <td>Mobile Number</td>
                            <td><?php echo $rows['mobile']; ?></td>


                        </tr>

                        <tr>
                            <td>Address</td>
                            <td><?php echo $rows['district']; ?></td>


                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $rows['email']; ?></td>


                        </tr>
                        <tr>
                            <td>UserName</td>
                            <td><?php echo $rows['uname']; ?></td>

                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><?php echo $rows['password']; ?></td>


                        </tr>
                        <tr>
                            <td>Description</td>
                            <td><?php echo $rows['details']; ?></td>

                        </tr>


                    </tbody>

                </table>


            </center>


            <center>

                <button class="form_btn2"
                    onclick="location.href='updateProfile.php?details=<?php echo $rows['details']; ?> &fname=<?php echo $rows['fname']; ?> &spid=<?php echo $rows['spid']; ?> &nic=<?php echo $rows['nic']; ?>  &district=<?php echo $rows['district']; ?>  &email=<?php echo $rows['email']; ?> &uname=<?php echo $rows['uname']; ?> &district=<?php echo $rows['district']; ?>&mobile=<?php echo $rows['mobile']; ?>'">Update</button>

                <button class="form_btn2" type="button" onclick="adminRequest()" id="btnEnable">Request to
                    Delate</button>
            </center>

            <?php
           }
          ?>
            <br><br>
            <div class="footerr" style="position:absolute; z-index: -1; width: 99%;">
                <p> Telephone No: +94 11 233 5632
                    Fax: +94 11 233 5632
                    Email: petAssure@hotmail.com​</p>
            </div>
    </body>

</html>