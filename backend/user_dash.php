<?php
  include 'dbconnect.php';

  //$add_guest = false;
  //echo "Opened";

  $session_username = "";
  $session_flat = "";
  session_start();

  if(isset($_SESSION['UserName']))
  {
    $session_username = $_SESSION['UserName'];
    $session_flat = $_SESSION['FlatNo'];
  }
  else
  {
    
    //$has_session = session_status();
    //echo var_dump($_SESSION['UserName']);
    header('Location: \Society_Auditor\login_page.html');
  }

  if(isset($_GET['logout']))
  {
     session_unset(); 
     session_destroy();
     header('Location: \Society_Auditor\index.php');
  }
  else if(isset($_GET['delete']))
  {
      $verify_id = $_GET['delete'];
      $sql = "DELETE FROM `guests` WHERE `guests`.`VerificationID` = $verify_id";
      $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "<script>alert('Guest Deleted Successfully!!');
            </script>
            <a id=anc href='\Society_Auditor\user_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }
        else
        {
            $error = mysqli_error($conn);
            echo "<script>alert('Error $error');
            </script>
            <a id=anc href='\Society_Auditor\user_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }

  }
  else if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    if (isset( $_POST['guestAdd']))
    {
        $flat = $_POST['guest_flat'];
        $guest_name = $_POST['guest_name'];
        $guest_phone = $_POST['guest_phone'];
        $guest_arrival = $_POST['guest_arrival'];


        $sql = "INSERT INTO `guests` (`VisitingFlat`, `GuestName`, `GuestPhoneNumber`, `DateOfArrival`) VALUES ('$flat', '$guest_name', '$guest_phone', '$guest_arrival');";

        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "<script>alert('Guest Was Added Successfully!!');
            </script>
            <a id=anc href='\Society_Auditor\user_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }
        else
        {
            $error = mysqli_error($conn);
            echo "<script>alert('Error $error');
            </script>
            <a id=anc href='\Society_Auditor\user_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }

    }
    else if (isset( $_POST['guestEdit']))
    {
        $verify_id = $_POST['guestEdit'];
        $flat = $_POST['guest_flat'];
        $guest_name = $_POST['guest_name'];
        $guest_phone = $_POST['guest_phone'];
        $guest_arrival = $_POST['guest_arrival'];


        $sql = "UPDATE `guests` SET `GuestName` = '$guest_name', `GuestPhoneNumber` = '$guest_phone', `DateOfArrival` = '$guest_arrival' WHERE `guests`.`VerificationID` = $verify_id;";

        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "<script>alert('Guest Was Updated Successfully!!');
            </script>
            <a id=anc href='\Society_Auditor\user_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }
        else
        {
            $error = mysqli_error($conn);
            echo "<script>alert('Error $error');
            </script>
            <a id=anc href='\Society_Auditor\user_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }

    }
    else if (isset( $_POST['delivery']))
    {
        $flat = $_POST['product_flat'];
        $product_type = $_POST['product_type'];
        $product_qty = $_POST['product_qty'];
        $product_arrival = $_POST['product_arrival'];


        $sql = "INSERT INTO `outdoororders` (`OrderSource`, `ProductType`, `DateOfArrival`, `Quantity`) VALUES ('$flat', '$product_type', '$product_arrival', '$product_qty');";

        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "<script>alert('Delivery Scheduled Successfully!!');
            </script>
            <a id=anc href='\Society_Auditor\user_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }
        else
        {
            $error = mysqli_error($conn);
            echo "<script>alert('Error $error');
            </script>
            <a id=anc href='\Society_Auditor\user_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }

    }
    else if (isset( $_POST['complaint']))
    {
        $subject = $_POST['subject'];
        $description = $_POST['description'];

        $sql = "INSERT INTO `complaintbox` (`Subject`, `Description`) VALUES ('$subject', '$description');";

        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "<script>alert('Your Complaint was Submitted!!');
            </script>
            <a id=anc href='\Society_Auditor\user_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }
        else
        {
            $error = mysqli_error($conn);
            echo "<script>alert('Error $error');
            </script>
            <a id=anc href='\Society_Auditor\user_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }

    }

    else if (isset( $_POST['updateProfile']))
    {
        $user = $_POST['username'];
        $name = $_POST['name'];
        $flat = $_POST['flat'];
        $phone = $_POST['phoneNumber'];
        $phone2 = $_POST['phoneNumber2'];
        $pass = $_POST['password'];

    $sql = "UPDATE `residents` SET `Password` = MD5('$pass'), `FlatNo` = '$flat', `ResidentName` = '$name' WHERE `residents`.`UserName` = '$user';";

    $result = mysqli_query($conn, $sql);

    if($result)
    {
        //echo "User Created Successfully!! ";
        $_SESSION['FlatNo'] = $flat;

        $contact_sql = "SELECT * FROM `Contacts` WHERE `Username`='$user'";
        $contact_result = mysqli_query($conn, $contact_sql);
        $num = mysqli_num_rows($contact_result);
        $phoneNumber_1 = "";
        $phoneNumber_2 = "";
        if($num==1)
        {
          $contact_row = mysqli_fetch_assoc($contact_result);
          $phoneNumber_1 = $contact_row['PhoneNo'];
        }
        else if($num==2)
        {
          $contact_row = mysqli_fetch_assoc($contact_result);
          $phoneNumber_1 = $contact_row['PhoneNo'];
          $contact_row = mysqli_fetch_assoc($contact_result);
          $phoneNumber_2 = $contact_row['PhoneNo'];
        }

        if($phone2 == "")
        {
            $sql_inner = "UPDATE `contacts` SET `PhoneNo` = '$phone' WHERE `contacts`.`UserName` = '$user' AND `contacts`.`PhoneNo` = '$phoneNumber_1';";

            $result_2 = mysqli_query($conn, $sql_inner);
            if($result_2)
            {
                echo "<script>alert('Your Details was Updated!!');
                </script>
                <a id=anc href='\Society_Auditor\user_dashboard.php'></a>
                <script>var elem = document.getElementById('anc');
                elem.click();</script>";
            }
            else
            {
                $error = mysqli_error($conn);
                echo "<script>alert('Error $error');
                </script>
                <a id=anc href='\Society_Auditor\user_dashboard.php'></a>
                <script>var elem = document.getElementById('anc');
                elem.click();</script>";
            }
        }
        else
        {
            $sql_inner = "UPDATE `contacts` SET `PhoneNo` = '$phone' WHERE `contacts`.`UserName` = '$user' AND `contacts`.`PhoneNo` = '$phoneNumber_1';";

            $sql_outer = "UPDATE `contacts` SET `PhoneNo` = '$phone2' WHERE `contacts`.`UserName` = '$user' AND `contacts`.`PhoneNo` = '$phoneNumber_2';";

            $result_2 = mysqli_query($conn, $sql_inner);
            $result_3 = mysqli_query($conn, $sql_outer);
            if($result_3 && $result_2)
            {
                echo "<script>alert('Your Details was Updated!!');
                </script>
                <a id=anc href='\Society_Auditor\user_dashboard.php'></a>
                <script>var elem = document.getElementById('anc');
                elem.click();</script>";
            }
            else
            {
                echo "<script>alert('Error $error');
                </script>
                <a id=anc href='\Society_Auditor\user_dashboard.php'></a>
                <script>var elem = document.getElementById('anc');
                elem.click();</script>";
            }

        }
    }
  }
}
