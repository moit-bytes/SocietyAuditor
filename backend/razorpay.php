<?php

include 'dbconnect.php';

//$add_guest = false;
//echo "Opened";

$session_username = "";
$session_flat = "";
session_start();

if (isset($_SESSION['UserName'])) {
    $session_username = $_SESSION['UserName'];
    $session_flat = $_SESSION['FlatNo'];
} else {

    //$has_session = session_status();
    //echo var_dump($_SESSION['UserName']);
    header('Location: \Society_Auditor\login_page.html');
}

$profile_sql = "SELECT * FROM `Residents` WHERE `UserName`='$session_username'";
$profile_result = mysqli_query($conn, $profile_sql);
$profile_row = mysqli_fetch_assoc($profile_result);
$contact_sql = "SELECT * FROM `Contacts` WHERE `Username`='$session_username'";
$contact_result = mysqli_query($conn, $contact_sql);
$num = mysqli_num_rows($contact_result);
$phoneNumber_1 = "";
$phoneNumber_2 = "";
if ($num == 1) {
    $contact_row = mysqli_fetch_assoc($contact_result);
    $phoneNumber_1 = $contact_row['PhoneNo'];
} else if ($num == 2) {
    $contact_row = mysqli_fetch_assoc($contact_result);
    $phoneNumber_1 = $contact_row['PhoneNo'];
    $contact_row = mysqli_fetch_assoc($contact_result);
    $phoneNumber_2 = $contact_row['PhoneNo'];
}

$resident_name = $profile_row['ResidentName'];
//echo $phoneNumber_1;
//echo $resident_name;
$pay_type = "";
$pay_amt = "";
if (isset($_POST['payment'])) 
{
    $pay_type = $_POST['pay_type'];
    $pay_amt = $_POST['pay_amt'];
}

if (isset($_POST['payment_process'])) 
{
    $payment_id = $_POST['payment_process'];
    $pay_type = $_POST['pay_type'];
    $pay_amt = $_POST['pay_amt'];
    $sql = "INSERT INTO `payments` (`PaymentID`, `Username`, `BeneficiaryName`, `PayAmount`, `ServiceType`, `DateTimeOfPay`) VALUES ('$payment_id', '$session_username', '$resident_name', $pay_amt, '$pay_type', current_timestamp())";

    $result = mysqli_query($conn, $sql);

    if ($result) 
    {
        header( 'Location: \Society_Auditor\backend\thank_you.html');
        exit();
    }
    else 
    {
        header( 'Location: \Society_Auditor\backend\error_404.html');
        exit();
    }
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <link href="/Society_Auditor/assets/img/fav.png" rel="icon">
    <!-- Importing Bulma -->
    <link rel="stylesheet" href="assets/vendor/bulma/css/bulma.min.css">

    <!-- Include FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <title>Payment Gateway</title>
    <style>
        body {
            background: linear-gradient(to right, rgba(30, 67, 86, 0.8), rgba(30, 67, 86, 0.6)), url("/Society_Auditor/assets/img/hero-bg.jpg") center top no-repeat;
        }

        .button {
            border-radius: 12px;
            margin-top: 10px;
            margin-left: 10px;
            text-align: center;
            padding: 15px;
            border-radius: 12px;
            transition: all 1s;
            outline: none;
            cursor: pointer;
        }

        .button:hover {
            border-radius: 15px;
            transform: scale(1.02) translateY(-5px);
        }
    </style>
</head>

<body>
    <header>
        <button class="button" id="home_page"><i class="fas fa-home icon"></i>&nbsp;&nbsp;Home</button>
    </header>
    <button id="rzp-button1" class="button"><i class="fas fa-credit-card icon"></i>&nbsp;&nbsp;Pay Again</button>
    <input type="hidden" id='name' value='<?php echo $resident_name; ?>'>
    <input type="hidden" id='phone' value='<?php echo $phoneNumber_1; ?>'>

    <form action="razorpay.php" method="post" id="pay_submit" style="display: none;">
        <input type="hidden" name="payment_process" id='payment_process'>
        <input type="hidden" name="pay_amt" id='pay_amt' value=<?php echo $pay_amt; ?>>
        <input type="hidden" name="pay_type" id='pay_type' value='<?php echo $pay_type; ?>'>
    </form>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        var name = document.getElementById('name').value;
        var phone = document.getElementById('phone').value;
        //console.log(name, phone);
        var options = {
            "key": "rzp_test_7gmkhm9HYQAJbt",
            "amount": <?php echo $pay_amt*100 ?>,
            "currency": "INR",
            "name": "Society Auditor",
            "description": "A Residentail Society Management system.",
            "image": "https://www.getspace.co.in/wp-content/uploads/2021/01/Razorpay-Logo.png",
            "handler": function(response) 
            {
                var pay_id = response['razorpay_payment_id'];
                document.getElementById('payment_process').value = pay_id;
                document.getElementById('pay_submit').submit();

            },
            "prefill": {
                "name": name,
                //"email": "society_auditor@gmail.com",
                "contact": "+91" + phone
            },
            "notes": {
                "address": "Developed by SRMAP Students"
            },
            "theme": {
                "color": "#3BB073"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.on('payment.failed', function(response) {
            console.log("Failed");
            alert(response.error.code);
            alert(response.error.description);
            alert(response.error.source);
            alert(response.error.step);
            alert(response.error.reason);
            alert(response.error.metadata.order_id);
            alert(response.error.metadata.payment_id);
        });
        document.getElementById('rzp-button1').onclick = function(e) {
            rzp1.open();
            e.preventDefault();
        }
        document.getElementById('rzp-button1').click();

        document.getElementById('home_page').onclick = function() {
            window.location.href = "/Society_Auditor";
        }
    </script>

</body>

</html>