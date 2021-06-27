<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "society";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
    //die("Error!!");
    header( 'Location: \Society_Auditor\backend\error_404.html');
    exit();
}
?>