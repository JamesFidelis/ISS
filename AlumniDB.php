<?php
include('DBconnection.php');

$names = $_POST['names'];
$enroll = $_POST['enroll'];
$graduu = $_POST['gradu'];
$principal = $_POST['principal'];
$teacher = $_POST['myteacher'];
$necta = $_POST['perfomance'];
$job = $_POST['job'];
$address = $_POST['address'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];


$DBcheck = "SELECT myName,Email,Phone FROM Alumni";
$done = mysqli_query($success,$DBcheck);
if($done)
{
    while( $query = mysqli_fetch_assoc($done))
    {
        if($query['Name']== $names){ die("Alumnus name is registered");}
        if($query['Email']== $mail){ die("E-mail is registered");}
        if($query['Phone'] == $phone){ die("Phone number has already been recorded");}
    }

    $inserting ="INSERT INTO Alumni(myName, Enrollment, Graduation, Head, Teacher, Results, Job, Address, Email, Phone) VALUES ('$names','$enroll','$graduu','$principal','$teacher','$necta','$job','$address','$mail','$phone')";
    $check_insert = mysqli_query($success,$inserting);
    if($check_insert)
    {
        header("location:Alumni.html");
    }else
    {
        echo "Failed";
    }

}






?>