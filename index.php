<?php
error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
    $message=$_SESSION['message'];

    echo "<script type='text/javascript'>
    alert('$message');
       </script>";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student management system</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav>
        <label class="logo"> EduManage</label>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="login.php">Login</a></li>
            
        </ul>
    </nav>

    <div class="section1">

        <img class=main_img src="black.jpg" alt="">

    </div>


    <div class="container">
        
        <div class="row">

            <div class="col-md-4">

                <img class="Welcome_img" src="abcd.jpeg" alt="">

            </div>

            <div class="col-md-8">

                <h1>Welcome to EduManage</h1>

                <p>Welcome to EduManage, your comprehensive solution for student database management. Our platform is designed to streamline and simplify the administrative tasks involved in managing student records, from admissions and enrollments to performance tracking and beyond. EduManage provides an intuitive interface and powerful tools to ensure you have all the information you need at your fingertips. Whether you're a school administrator, teacher, or student, EduManage is here to make your educational journey more organized and efficient. Join us in transforming the way educational institutions manage their data and foster an environment of excellence and growth.</p>
            </div>

        </div>

    </div>

    <center>
        <h1 class="features">Our features</h1>
    </center>

    <div class="container">
        <div class="row">

            <div class="col-md-4">
            <img class="teacher" src="first_1.png" alt="">
            <h2>Centralized Student Records Management</h2>
            <p>EduManage provides a unified platform to store and manage all student information, from personal details to academic records. This centralization ensures quick access and consistency, reducing errors and enhancing administrative efficiency.</p>
            </div>

            <div class="col-md-4">
            <img class="teacher" src="second_pic.jpeg" alt="">
            <h2>Automated Admission Process</h2>
            <p>EduManage streamlines the admission process with an online application system. Applicants can submit documents and track their status in real-time, while administrators can review and manage applications efficiently, reducing manual workload.</p>
            </div>

            <div class="col-md-4">
            <img class="teacher" src="third.png" alt=""> 
            <h2>Comprehensive Performance Tracking and Reporting</h2>
            <p>EduManage allows teachers to track student performance, input grades, and generate progress reports easily. Students and parents can access this information through a secure portal, promoting transparency and engagement in the educational process.</p>
            </div>

        </div>
    </div>
    <center>
        <h1 class="adm">Admission Form</h1>
    </center>

    <div align="center" class="admission_form">
        <form action="data_check.php" method="POST">
            <div class="adm_int">
                <label class="label_text">Name</label>
                <input class="input_deg" type="text" name="name">
            </div>

            <div class="adm_int">
                <label class="label_text">Email</label>
                <input class="input_deg" type="text" name="email">
            </div>

            <div class="adm_int">
                <label class="label_text">Phone</label>
                <input class="input_deg" type="text" name="phone">
            </div>

            <div class="adm_int">
                <label class="label_text">Message</label>
                <textarea class="input_txt" name="message"></textarea>
            </div>

            <div>
                <input class="btn btn-primary" type="submit" id="submit" value="Apply now!" name="apply">
            </div>
        </form>


    </div>

    <footer>
        <h4 class="footer_text">All rights reserved</h4>
    </footer>

</body>
</html>