<?php
include('DBconnection.php');

$fname= $_POST['fname'];
$mname= $_POST['mname'];
$sname= $_POST['sname'];
$username= $_POST['user'];
$date= $_POST['dates'];
$pass= $_POST['pass'];
$cv= $_POST['CVupload'];
$mail= $_POST['mail'];
$mnum= $_POST['mnum'];
$fb= $_POST['fb'];
$tweet= $_POST['tweet'];
$ig= $_POST['ig'];



if (!$success){die("Failed to connect to database".mysqli_connect_error());}

$data = "INSERT INTO Registration(Firstname, Middlename, Surname, Username, Dates, Password, CV, Email, Phone, Facebook, Twitter, Instagram) VALUES('$fname','$mname','$sname','$username','$date','$pass','$cv','$mail','$mnum','$fb','$tweet','$ig')";

if (mysqli_query($success, $data)){
    header("location:Register.html");
}else{
    die("Failed");
}

$data->close();
?>

