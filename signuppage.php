<?php
session_start();
include("connection.php");
extract($_REQUEST);
if(isset($_SESSION['id']))
{
//	header("location:adminlogin.php");
}

if(isset($register))
{
    $sql=mysqli_query($con,"select * from User where Email='$Email'");
    if(mysqli_num_rows($sql))
    {
        $email_error="This Email Id is laready registered with us";
    }
    else
    {
        $sql=mysqli_query($con,"insert into User 
    (User_id	,Password,User_name,Email)
           values('$User_id','$Password','$User_name','$Email')");


        $_SESSION['id']=$Email;

        header("location:adminlogin.php");

    }
}




?>

<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title> Registration Form</title>
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <!--    <link rel="stylesheet" type="text/css" href="s.css">-->
    <style>
        ul li{list-style:none;}
        ul li a {color:black;text-decoration:none; }
        ul li a:hover {color:black; text-decoration:none;}
    </style>
</head>
<body>


<br><br><br>
<div class="middle" style="margin:0px auto; border:1px solid #F8F9FA;  width:800px;">
    <ul class="nav nav-tabs nabbar_inverse" id="myTab" style="background:#FFC312;border-radius:10px 10px 10px 10px;" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" style="color:#BDDEFD;" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="true">Register</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="login-tab" style="color:#BDDEFD;" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Log In</a>
        </li>
    </ul>
    <br><br>
    <!--tab 1 starsts-->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="register" role="tabpanel" aria-labelledby="home-tab">
            <div class="footer" style="color:red;"><?php if(isset($loginmsg)){ echo $loginmsg;}?></div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">User_id:</label>
                    <input type="text" class="form-control" id="User_id" value="<?php if(isset($User_id)) { echo $User_id;}?>" placeholder="Enter User_id" name="User_id" required/>
                </div>
                <div class="form-group">
                    <label for="Password">Password:</label>
                    <input type="password" class="form-control" id="Password" value="<?php if(isset($Password)) { echo $Password;}?>" name="Password" placeholder="Enter Password"required/>
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="User_name" value="<?php if(isset($User_name)) { echo $User_name;}?>" placeholder="Enter User Name" name="User_name" required/>
                </div>
                <div class="form-group">
                    <label for="name">Email Id:</label>
                    <input type="email" class="form-control" id="Email" value="<?php if(isset($Email)) { echo $Email;}?>" placeholder="Enter Email" name="Email" required/>
                    <span style="color:red;"><?php if(isset($email_error)){ echo $email_error;} ?></span>
                </div>



                <button type="submit" id="register" name="register" class="btn btn-outline-primary">Register</button>

            </form>
            <br>
        </div>
        <div class="tab-pane fade show" id="login" role="tabpanel" aria-labelledby="home-tab">
            <a href="adminlogin.php"><button type="button" style="padding:10px;  width:200px; margin-top:30%; margin-left:40%; margin:0px auto;" class="btn btn-outline-primary" name="login" value="Log In">Log In</button></a>
            <br><br><br> <br><br><br> <br><br><br><br><br><br> <br><br><br> <br><br><br>
        </div>
    </div>
</div>
<br>



</body>
</html>