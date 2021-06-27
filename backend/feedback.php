<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'dbconnect.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $desc = $_POST['message'];
  
    $sql = "INSERT INTO `feedback` (`Name`, `Email`, `Subject`, `Description`) VALUES ('$name', '$email', '$subject', '$desc')";
  
    $result = mysqli_query($conn, $sql);
  
    if ($result) 
    {
        echo "<script>alert('Message Sent Successfully!!');
            </script>
            <a id=anc href='\Society_Auditor\contact.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
     
    } 
    else 
    {
        $error = mysqli_error($conn);
            echo "<script>alert('Error $error');
            </script>
            <a id=anc href='\Society_Auditor\contact.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
    }
  }
?>