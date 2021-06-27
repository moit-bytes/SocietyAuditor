<?php 
    $root_user = 'moitbytes';
    $password = '123456';

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $name = $_POST['email'];
        $pass = $_POST['password'];

        if($name == $root_user && $pass == $password)
        {
            header( 'Location: \Society_Auditor\admin_dashboard.php');
        }
        else
        {
            //header( 'Location: \Society_Auditor\admin_login."html');
            echo "<script>alert('Invalid Credentials!! Please login agian');
            </script>
            <a id=anc href='\Society_Auditor\admin_login.html'></a>
            <script>var elem = document.getElementById('anc');
            elem.click();</script>";
        }
    }
