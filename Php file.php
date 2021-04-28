<?php
$connection = mysqil_connect("localhost","root","")
$db = mysqil_select_db($connection,'ved');
if ( isset($_post['login']))
{
    $email = $_post['email'];
    $password= $_post['password'];
    $query = "select * from 'signup' WHERE email='$email' AND password='$password'";
    $query_run = mysqil_query($connection,$query);
    

    if(mysqli_fetch($query_run)>0)
    {
        echo'<script type="text/javascript"> alert("Logged In successfuly") </script>';
        header('')
    }

    else
    {
        echo'<script type="text/javascript"> alert("Logged In failed") </script>';
    }
}


?>