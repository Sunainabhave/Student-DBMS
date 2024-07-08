<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:login.php");
}

elseif ($_SESSION['usertype'] == 'student') {
    header("location:login.php");
}

$host = "localhost";
$user = "root";
$password = "";
$db = "project1";

$data = mysqli_connect($host, $user, $password, $db);

if (isset($_POST['add_student'])) {
    $username = $_POST['name'];
    $user_email = $_POST['email'];
    $user_phone = $_POST['phone'];
    $user_password = $_POST['password'];
    $usertype = "student";

    $check="SELECT * FROM user WHERE username='$username' ";

    $check_user=mysqli_query($data,$check);

    $row_count=mysqli_num_rows($check_user);

    if($row_count==1)
    {
      echo "Username already exists. Try another one."  ;
    }

    else{

    

    $sql = "INSERT INTO user (username, email, phone, usertype, password) VALUES ('$username', '$user_email', '$user_phone', '$usertype', '$user_password')";

    $result = mysqli_query($data, $sql);

    if ($result) {
        echo "<script>alert('Data uploaded successfully');</script>";
    } else {
        echo "<script>alert('Upload Failed');</script>";
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style type="text/css">
        label {
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .div_deg {
            background-color: lightblue;
            width: 400px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
    </style>

    <?php
    include 'admin_css.php';
    ?>
</head>
<body>

<?php
include 'admin_sidebar.php';
?>

<div class="content">
    <center>
        <h1>ADD STUDENT.</h1>
        <div class="div_deg">
            <form action="#" method="POST">
                <div>
                    <label for="">Username</label>
                    <input type="text" name="name">
                </div>

                <div>
                    <label for="">Email</label>
                    <input type="email" name="email">
                </div>

                <div>
                    <label for="">Phone</label>
                    <input type="number" name="phone">
                </div>

                <div>
                    <label for="">Password</label>
                    <input type="text" name="password">
                </div>

                <div>
                    <input type="submit" class="btn btn-primary" name="add_student" value="Add student">
                </div>
            </form>
        </div>
    </center>
</div>

</body>
</html>
