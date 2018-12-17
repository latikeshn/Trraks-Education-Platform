<?php 

include("configure.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
define('PATH', dirname(__FILE__));
require PATH.'/vendor/PHPMailer/PHPMailer/src/Exception.php';
require PATH.'/vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
require PATH.'/vendor/PHPMailer/PHPMailer/src/SMTP.php';

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// // define('PATH', dirname(__FILE__));
// require 'http://www.trraks.com/vendor/phpmailer/phpmailer/src/Exception.php';
// require 'http://www.trraks.com/vendor/phpmailer/phpmailer/src/PHPMailer.php';
// require 'http://www.trraks.com/vendor/phpmailer/phpmailer/src/SMTP.php';

$User_FullName=$_POST['User_fullName'];
$User_Name=$_POST['User_Name'];
$User_Email=$_POST['User_Email'];
$User_MobileNumber=$_POST['User_MobileNumber'];
$mobile_otp=$_POST['mobile_otp'];
$current_location=$_POST['current_location'];
$reEntered_Password=$_POST['reEntered_Password'];
$Password = $_POST['Password'];
$HashPassword  = password_hash($Password, PASSWORD_DEFAULT);
// echo $User_FullName=$_POST['User_fullName'];
// echo $User_Name=$_POST['User_Name'];
// echo $User_Email=$_POST['User_Email'];
// echo $User_MobileNumber=$_POST['User_MobileNumber'];
// echo $mobile_otp=$_POST['mobile_otp'];
// echo $current_location=$_POST['current_location'];
// echo $Password = $_POST['Password'];
// echo $reEntered_Password=$_POST['reEntered_Password'];


     
// // echo $User_Email."<br>";
// echo $User_fullName.$User_Name.$User_Email.$User_MobileNumber.$current_location.$reEntered_Password.$Password;
   
if (!empty($User_FullName) && !empty($User_Name) && !empty($User_Email) && !empty($User_MobileNumber) && !empty($reEntered_Password) && !empty($current_location) && !empty($mobile_otp)) 
{
	$select = "SELECT * FROM `register_user` WHERE `Mo_No` = '$User_MobileNumber'";  
	
	$select= $conn->query($select);

	if ($select->num_rows > 0) 
  {
		 echo "exists";
		// echo "<script>alert('you are already registered with same email or mobile number');</script>";
		 // echo "<script>window.location.href='index.php';</script>";
	}else
	{
      $otp_checking = "SELECT * FROM `otp_data` WHERE `MOBILENO` = '$User_MobileNumber' AND `OTP` = '$mobile_otp'";
      
      $otp_checking = $conn->query($otp_checking);

      if ($otp_checking->num_rows > 0) 
      { 
        $row = $otp_checking->fetch_assoc();
         if ($mobile_otp == $row['OTP']) 
        {
		 	// if($mobile_verificatiocode == $code){ echo "mobile number matched" }
          $insert_user="INSERT INTO `register_user` (`USER_NAME`,`Full_Name`,`Mo_No`,`Email`,  `Current_Location`, `Password`) VALUES ('$User_Name','$User_FullName','$User_MobileNumber','$User_Email','$current_location','$HashPassword')";
          $inserted =$conn->query($insert_user);
                  if ($inserted === TRUE) 
                  {
                      echo "true";
                      $delete=mysqli_query($conn,"DELETE FROM `otp_data` WHERE `MOBILENO`='$User_MobileNumber' AND `OTP` = $mobile_otp");
// $deleted =$conn->query($delete);
                  }else{
                    echo "fail";
                  }
        }else{
          echo "otpfail";
        }
      }
      else{
           echo "otpfail";
      }    			
		// 	// else mobile number does not matched with sended one.

	}
}
else
{
  echo "empty";
}

 function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

 ?>