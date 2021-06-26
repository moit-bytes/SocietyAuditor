<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'dbconnect.php';
    $user = $_POST['username'];
    $name = $_POST['name'];
    $flat = $_POST['flat'];
    $phone = $_POST['phoneNumber'];
    $phone2 = $_POST['phoneNumber2'];
    $pass = $_POST['password'];

    $sql = "INSERT INTO `residents` (`UserName`, `Password`, `FlatNo`, `ResidentName`) VALUES
    ('$user', md5('$pass'), $flat, '$name');";

    $result = mysqli_query($conn, $sql);

    if ($result) {

        if ($phone2 == "") 
        {
            $sql_inner = "INSERT INTO `contacts` (`UserName`, `PhoneNo`) VALUES ('$user', '$phone');";

            $result_2 = mysqli_query($conn, $sql_inner);
            if ($result_2) 
            {
                session_start();
                $_SESSION['UserName'] = $user;
                $_SESSION['FlatNo'] = $flat;
                //echo $_SESSION['UserName'];
                header('Location: \Society_Auditor\user_dashboard.php');
            } else 
            {
                $error = mysqli_error($conn);
                echo "<script>alert('Error $error');
            </script>
            <a id=anc href='\Society_Auditor\register.html'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
            }
        } else 
        {
            $sql_inner = "INSERT INTO `contacts` (`UserName`, `PhoneNo`) VALUES ('$user', '$phone');";

            $sql_outer = "INSERT INTO `contacts` (`UserName`, `PhoneNo`) VALUES ('$user', '$phone2');";

            $result_2 = mysqli_query($conn, $sql_inner);

            $result_3 = mysqli_query($conn, $sql_outer);
            if ($result_3) 
            {
                session_start();
                $_SESSION['UserName'] = $user;
                $_SESSION['FlatNo'] = $flat;
                //echo $_SESSION['UserName'];
                header('Location: \Society_Auditor\user_dashboard.php');
            } else 
            {
                $error = mysqli_error($conn);
                echo "<script>alert('Error $error');
            </script>
            <a id=anc href='\Society_Auditor\register.html'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
            }
        }
    } else {
        $error = mysqli_error($conn);
        echo "<script>alert('Error $error');
        </script>
        <a id=anc href='\Society_Auditor\register.html'></a>
        <script>var elem = document.getElementById('anc');
        elem.click();</script>";
    }
}
