<html>

<head>
    <link rel="stylesheet" href="navigation.css">
    <style>
        .nav{
    height: 70px;
    opacity: 95%;
    background-color: #A6A6A6;
    display: flex;
    flex-direction: row;
    z-index:1;
  
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
a.font{
    font-size: 20px;
    color: white;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-decoration: none;
    position: relative;
}

.left{
    flex:0.5;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content:flex-start;
    margin-left: 30px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size: 48px;
    color: #ffffff;
    
}

.right{
    flex:0.5;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-around;
    margin-right: 30px;
}

#font{
    font-size: 20px;
    color: white;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-decoration: none;
}

  
    </style>
</head>

<body>

    <div class="nav" style="width: 100%;">
        <div class="left">
            <img src="Images/logo.png" width="100px" height="100px">
            <p style="margin-left: 20px;">PetAssure</p>
        </div>

        <div class="right">
            <a href="#" class="font">HOME</a>
            <a href="#" class="font">PROFILE</a>
            <a href="#" class="font">SERVICES</a>
            <a href="./logout.php" class="font">LOG OUT </a>
        </div>
    </div>



</body>

</html>