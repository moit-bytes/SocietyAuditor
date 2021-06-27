<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    include 'dbconnect.php';

    $user = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `residents` WHERE UserName='$user' AND Password = md5('$password')";

    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);

    if($num == 1)
    {
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['UserName'] = $row['UserName'];
        $_SESSION['FlatNo'] = $row['FlatNo'];
        //echo $_SESSION['UserName'];
        header('Location: \Society_Auditor\user_dashboard.php');
    }
    else
    {
        echo "Invalid User or Invalid Password";
    }
}

?>