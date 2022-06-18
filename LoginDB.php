<?php
include('DBconnection.php');
$user = $_POST['uname'];
$pass = $_POST['pssw'];


$selection = "SELECT * FROM Registration";
$thisquery = mysqli_query($success,$selection);

if($thisquery)
{
    while( $mydata = mysqli_fetch_assoc($thisquery))
    {
        if(($user == $mydata['Username'])&&($pass == $mydata['Password']))
        {
            //echo "Login Successful";
            session_start();
            $_SESSION['User'] = $user;
            header("location:AlumniList.html");
        }else
        {
            die("Credentials do not match");
        }
    }



}
?>
