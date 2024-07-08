<?php

session_start();

if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
elseif($_SESSION['usertype']=='admin')
{
    header("location:login.php");
}

$host="localhost";
$user="root";
$password="";
$db="project1";

$data=mysqli_connect($host,$user,$password,$db);

$name=$_SESSION['username'];

$sql="SELECT * FROM user WHERE username='$name' ";
$result=mysqli_query($data,$sql);
$info=mysqli_fetch_assoc($result);

if(isset($_POST['update_profile']))
{
    $s_email=$_POST['email'];
    $s_phone=$_POST['phone'];
    $s_password=$_POST['password'];

    $sql2="UPDATE user SET email='$s_email', phone='$s_phone', password='$s_password' WHERE username='$name' ";
    $result2=mysqli_query($data,$sql2);

    if($result2)
    {
       header('location:student_profile.php');
    }
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    <?php
     include 'student_css.php';

     ?>

     <style type="text/css">
        label{
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .div_deg{
            background-color: lightcyan;
            width: 500px;
            padding-top: 70px;
            padding-bottom: 70px;
        }

     </style>

    
</head>
<body>
<?php
include 'student_sidebar.php';
?>

<div class="content">
    <center>
        <h1>Update Profile</h1>
        <br><br>
    <form action="#" method="POST">
        <div class="div_deg">
        <!-- <div>
            <label for="">Name</label>
            <input type="text" name="name"
            value="<?php echo"{$info['username']}" ?>">
        </div>  KEEPING THE USERNAME UNIQUE!!-->

        <div>
            <label for="">email</label>
            <input type="email" name="email"
            value="<?php echo"{$info['email']}" ?>">
        </div>

        <div>
            <label for="">Phone</label>
            <input type="number" name="phone"
            value="<?php echo"{$info['phone']}" ?>">
        </div>

        <div>
            <label for="">password</label>
            <input type="text" name="password"
            value="<?php echo"{$info['password']}" ?>">
        </div>

        <div>
            <input type="submit" class="btn btn-primary" name="update_profile" value="Update">
        </div>
        </div>
    </form>
    </center>
</div>

</body>
</html>