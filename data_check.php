<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="project1";

$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
    die("connection error");
}

if(isset($_POST['apply']))
{
    // connecting the admission details to the table
    
    $data_name=$_POST['name'];
    $data_email=$_POST['email'];
    $data_phone=$_POST['phone'];
    $data_message=$_POST['message'];

    $sql="INSERT INTO admission(name,email,phone,message) VALUES ('$data_name','$data_email','$data_phone','$data_message')";
    $result=mysqli_query($data,$sql);

    if($result)
    {
        $_SESSION['message']="Application Successful!";
        header("location:index.php"); //showing the message in index.php
    }

    else{
        echo "Apply Failed!";
    }


}


?>