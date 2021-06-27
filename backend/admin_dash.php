<?php

include 'dbconnect.php';

if(isset($_GET['staffDelete']))
  {
      $verify_id = $_GET['staffDelete'];
      $sql = "DELETE FROM `securitystaff` WHERE `securitystaff`.`StaffID` = $verify_id";
      $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "<script>alert('Staff Removed Successfully!!');
            </script>
            <a id=anc href='\Society_Auditor\admin_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }
        else
        {
            $error = mysqli_error($conn);
            echo "<script>alert('Error $error');
            </script>
            <a id=anc href='\Society_Auditor\admin_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }

  }
else if(isset($_GET['camsDelete']))
  {
      $verify_id = $_GET['camsDelete'];
      $sql = "DELETE FROM `securityequipment` WHERE `securityequipment`.`CCTVNumber` = $verify_id";
      $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "<script>alert('CCTV Removed Successfully!!');
            </script>
            <a id=anc href='\Society_Auditor\admin_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }
        else
        {
            $error = mysqli_error($conn);
            echo "<script>alert('Error $error');
            </script>
            <a id=anc href='\Society_Auditor\admin_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }

  }
else if(isset($_GET['noticeDelete']))
  {
      $verify_id = $_GET['noticeDelete'];
      $sql = "DELETE FROM `noticeboard` WHERE `noticeboard`.`NoticeID` = $verify_id";
      $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "<script>alert('Notice Deleted Successfully!!');
            </script>
            <a id=anc href='\Society_Auditor\admin_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }
        else
        {
            $error = mysqli_error($conn);
            echo "<script>alert('Error $error');
            </script>
            <a id=anc href='\Society_Auditor\admin_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }

  }
else if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    if (isset( $_POST['staffAdd']))
    {
        $staff_name = $_POST['staff_name'];
        $staff_salary = $_POST['staff_salary'];
        $staff_post = $_POST['security_type'];
        $staff_shift = $_POST['security_shift'];


        $sql = "INSERT INTO `securitystaff` (`StaffName`, `StaffSalary`, `StaffPost`, `Shift`) VALUES ('$staff_name', '$staff_salary', '$staff_post', '$staff_shift');";

        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "<script>alert('Staff Was Added Successfully!!');
            </script>
            <a id=anc href='\Society_Auditor\admin_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }
        else
        {
            $error = mysqli_error($conn);
            echo "<script>alert('Error $error');
            </script>
            <a id=anc href='\Society_Auditor\admin_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }

    }
    else if (isset( $_POST['camsAdd']))
    {
        $location = $_POST['cams_location'];
        $cctv_active = $_POST['cams_status'];

        $sql = "INSERT INTO `securityequipment` (`Location`, `Status`) VALUES ('$location', '$cctv_active');";

        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "<script>alert('CCTV Was Added Successfully!!');
            </script>
            <a id=anc href='\Society_Auditor\admin_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }
        else
        {
            $error = mysqli_error($conn);
            echo "<script>alert('Error $error');
            </script>
            <a id=anc href='\Society_Auditor\admin_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }

    }
    else if (isset( $_POST['complaintView']))
    {
        $anonymous_id = $_POST['complaintView'];

        $sql = "UPDATE `complaintbox` SET `Status` = 'Resolved' WHERE `complaintbox`.`AnonymousID` = $anonymous_id;";

        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "<script>alert('Complaint was Resolved!!');
            </script>
            <a id=anc href='\Society_Auditor\admin_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }
        else
        {
            $error = mysqli_error($conn);
            echo "<script>alert('Error $error');
            </script>
            <a id=anc href='\Society_Auditor\admin_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }

    }

    else if (isset( $_POST['camsAdd']))
    {
        $location = $_POST['cams_location'];
        $cctv_active = $_POST['cams_status'];

        $sql = "INSERT INTO `securityequipment` (`Location`, `Status`) VALUES ('$location', '$cctv_active');";

        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "<script>alert('CCTV Was Added Successfully!!');
            </script>
            <a id=anc href='\Society_Auditor\admin_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }
        else
        {
            $error = mysqli_error($conn);
            echo "<script>alert('Error $error');
            </script>
            <a id=anc href='\Society_Auditor\admin_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }

    }

    else if (isset( $_POST['noticeAdd']))
    {
        $title = $_POST['notice_title'];
        $desc = $_POST['notice_desc'];

        $sql = "INSERT INTO `noticeboard` (`NoticeTitle`, `NoticeDescription`, `DatePublished`) VALUES ('$title', '$desc', current_timestamp())";

        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "<script>alert('Notice Published Successfully!!');
            </script>
            <a id=anc href='\Society_Auditor\admin_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }
        else
        {
            $error = mysqli_error($conn);
            echo "<script>alert('Error $error');
            </script>
            <a id=anc href='\Society_Auditor\admin_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }

    }

    else if (isset( $_POST['noticeEdit']))
    {
        $id = $_POST['noticeEdit'];
        $title = $_POST['edit_notice_title'];
        $desc = $_POST['edit_notice_desc'];

        $sql = "UPDATE `noticeboard` SET `NoticeTitle` = '$title', `NoticeDescription` = '$desc' WHERE `noticeboard`.`NoticeID` = $id";

        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "<script>alert('Notice Updated Successfully!!');
            </script>
            <a id=anc href='\Society_Auditor\admin_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }
        else
        {
            $error = mysqli_error($conn);
            echo "<script>alert('Error $error');
            </script>
            <a id=anc href='\Society_Auditor\admin_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }

    }
    else if (isset($_POST['camsEdit']))
    {
        $id = $_POST['camsEdit'];
        $location = $_POST['cams_location'];
        $cctv_active = $_POST['cams_status'];

        $sql = "UPDATE `securityequipment` SET `Location` = '$location', `Status` = '$cctv_active' WHERE `securityequipment`.`CCTVNumber` = $id";

        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "<script>alert('CCTV Updated Successfully!!');
            </script>
            <a id=anc href='\Society_Auditor\admin_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }
        else
        {
            $error = mysqli_error($conn);
            echo "<script>alert('Error $error');
            </script>
            <a id=anc href='\Society_Auditor\admin_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }

    }
    else if (isset( $_POST['staffEdit']))
    {
        $staff_id = $_POST['staffEdit'];
        $staff_name = $_POST['staff_name'];
        $staff_salary = $_POST['staff_salary'];
        $staff_post = $_POST['security_type'];
        $staff_shift = $_POST['security_shift'];


        $sql = "UPDATE `securitystaff` SET `StaffName` = '$staff_name', `StaffSalary` = $staff_salary, `StaffPost` = '$staff_post', `Shift` = $staff_shift WHERE `securitystaff`.`StaffID` = $staff_id";

        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "<script>alert('Staff Was Updated Successfully!!');
            </script>
            <a id=anc href='\Society_Auditor\admin_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }
        else
        {
            $error = mysqli_error($conn);
            echo "<script>alert('Error $error');
            </script>
            <a id=anc href='\Society_Auditor\admin_dashboard.php'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }

    }

}

?>