<?php
require_once('./database.php');

if(isset($_REQUEST['submit2']))
{
    $fullname = $_REQUEST['name'];
    $mobile= $_REQUEST['mobile'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];
    

    $s = "INSERT INTO enquiry (name,mobile,email,message) VALUES ('$fullname','$mobile','$email','$message')";

    if($affected_row = $conn->exec($s))
    {
        echo "<script type='text/javascript'>alert('enquiry sucessfully sent');
        window.location='index.php';
        </script>";
    }

    else{
        echo "<script type='text/javascript'>alert('error');
        window.location='index.php';
        </script>";
    }
}



?>