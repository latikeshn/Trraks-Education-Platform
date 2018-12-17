<?php 
include("configure.php");

//  use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// // define('PATH', dirname(__FILE__));
// require 'http://www.trraks.com/vendor/phpmailer/phpmailer/src/Exception.php';
// require 'http://www.trraks.com/vendor/phpmailer/phpmailer/src/PHPMailer.php';
// require 'http://www.trraks.com/vendor/phpmailer/phpmailer/src/SMTP.php';
      


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
define('PATH', dirname(__FILE__));
require PATH.'/vendor/PHPMailer/PHPMailer/src/Exception.php';
require PATH.'/vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
require PATH.'/vendor/PHPMailer/PHPMailer/src/SMTP.php';


		 $NAME = $_POST['NAME'];
		 $EMAIL = $_POST['EMAIL'];
		 $MOBILE = $_POST['MOBILE'];
		$emailcode=substr(md5(mt_rand()),0,15);
		$mobilecode = rand(1000, 9999); 
		if (!empty($EMAIL) && !empty($MOBILE)) {

		$show = "SELECT * FROM `university_admission_apply` WHERE `STUDENT_EMAIL` = '$EMAIL' OR `STUDENT_MOBILE` = 'MOBILE'";
		$show = $conn->query($show);
		if ($show->num_rows > 0) {
			echo "true"; 
			// echo "here";
		}
		else
		{

			if(!empty($EMAIL) && !empty($MOBILE))
			{
		       $select = "SELECT * FROM `otp_data` WHERE `MOBILENO` = '$MOBILE' AND `EMAIL` = '$EMAIL'"; 
	           $Get = $conn->query($select);
	           if ($Get->num_rows > 0)
	           {
				$sql = "UPDATE `otp_data` SET `EMAIL_OTP` = '$emailcode', `OTP` = '$mobilecode' WHERE `otp_data`.`MOBILENO` = '$MOBILE' OR `otp_data`.`EMAIL` = '$EMAIL'";
				$conn->query($sql);

						if ($conn->query($sql) === TRUE) 
		                { 
						// $otpcode = hash('SHA256', $code);
						// Account details
						$apiKey = urlencode('p3LEAJJas3E-vBIE8c31ejj1FDLTmExNKSGC5AWKww');
						
						// Message details
						$number = $_POST['MOBILE'];

						$sender = urlencode('CBSOFT');
						$message = rawurlencode("Dear User,\nWe are from Trraks.com.\nVerify your mobile number to proceed for admission process.\nYour verification code is ".$mobilecode);
					 
						// Prepare data for POST request
						$data = array('apikey' => $apiKey, 'numbers' => $number, "sender" => $sender, "message" => $message);
					 
						// Send the POST request with cURL
						$ch = curl_init('https://api.textlocal.in/send/');
						curl_setopt($ch, CURLOPT_POST, true);
						curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						$response = curl_exec($ch);
						curl_close($ch);
						
						          require PATH.'/vendor/autoload.php';
									// require 'vendor/autoload.php';
                                  $mail = new PHPMailer(true);
                                  try {
                                      //Server settings
                                     // $mail->SMTPDebug = 1;                                 // Enable verbose debug output
                                      $mail->isSMTP();  
                                      $mail->Priority = 1;   
                                      // $mail->SMTPDebug = 1;
                                      $mail->SMTPKeepAlive = true;   
                                            // Set mailer to use SMTP
                                      $mail->Host = 'mail.trraks.com';  // Specify main and backup SMTP servers
                                      $mail->SMTPAuth = true;                               // Enable SMTP authentication
                                      $mail->Username = 'evaluation@trraks.com';                 // SMTP username
                                      $mail->Password = 'Trraks@007';                           // SMTP password
                                      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                                      $mail->Port = 587;                                    // TCP port to connect to

                                      //Recipients
                                      $mail->AddReplyTo( 'info@trraks.com', 'bhat kalpesh' );
                                      $mail->setFrom('evaluation@trraks.com', 'Trraks.com');
                                      $mail->addAddress($EMAIL,$NAME);     // Add a recipient

                                      $mail->isHTML(true);                                  // Set email format to HTML
                                      $mail->Subject = "Verification code to verify your email";
                                      
                                      $mail->Body    = "<body style='background-color: #e6e6e6'>
              <div class='container' style='background-color: white; width:600px; height: 400px; border:0.5px solid white; margin-left:20%;margin-top:2%; padding:3%;'> 
                <span style='display:inline-block; width: 35%;'></span><strong> <a href='https://www.trraks.com' style='text-decoration: none;'><b style='color: orange;font-size: 30px;'>T</b><b style='font-size: 30px;color: black'>rraks.com</b></a></strong><br>
                <p style='font-size: 18px;'><b>Hey ".$NAME.",</b></p>
                <span style='display:inline-block; width: 15px;'></span><span style='font-size: 18px;'>Thank you for registering under<strong> <a href='https://www.trraks.com' style='text-decoration: none'>Trraks Educational Platform</a></strong> for admission process.</span>  <br>
               <span style='display:inline-block; width: 15px;'></span><span style='font-size: 18px;'>Your Activation Code is :- <i style='style='color:green'>".$emailcode."</i><br>  
            <span style='font-size: 15px;'> <p> P.S.<i>\"NEVER STOP LEARNING.\"</i></p> <br></span>
            <span style='font-size: 15px;'><p>Trraks Education Platform,Flat No.1,Patil House,Near Patil Plaza, Vise Mala,Nashik,Maharashtra.</p></span></div>
            </body>";
                                      // $mail->AltBodys = 'This is the body in plain text for non-HTML mail clients';

                                      $mail->send();
                                     
                                  } 
                                  catch (Exception $e) 
                                  {
                                      echo 'msgfail';
                                  }

						echo "send";
						}				
	           }
	           else
	           {
           	
				$sql ="INSERT INTO `otp_data` (EMAIL,EMAIL_OTP,MOBILENO,OTP) values ('$EMAIL','$emailcode','$MOBILE','$mobilecode')";
				$result = $conn->query($sql);
						if ($result === TRUE) 
		                { 
						// $otpcode = hash('SHA256', $code);
						// Account details
						$apiKey = urlencode('p3LEAJJas3E-vBIE8c31ejj1FDLTmExNKSGC5AWKww');
						
						// Message details
						$number = $_POST['MOBILE'];
						$sender = urlencode('CBSOFT');
						$message = ("Dear User,\nWe are from Trraks.com.\nVerify your mobile number to proceed for admission process.\nYour verification code is ".$mobilecode);
					 
						// Prepare data for POST request
						$data = array('apikey' => $apiKey, 'numbers' => $number, "sender" => $sender, "message" => $message);
					 
						// Send the POST request with cURL
						$ch = curl_init('https://api.textlocal.in/send/');
						curl_setopt($ch, CURLOPT_POST, true);
						curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						$response = curl_exec($ch);
						curl_close($ch);

							          require PATH.'/vendor/autoload.php';
							          	// require 'vendor/autoload.php';
	                                  $mail = new PHPMailer(true);
	                                  try {
	                                      //Server settings
	                                     // $mail->SMTPDebug = 1;                                 // Enable verbose debug output
	                                      $mail->isSMTP();  
	                                      $mail->Priority = 1;   
	                                      // $mail->SMTPDebug = 1;
	                                      $mail->SMTPKeepAlive = true;   
	                                            // Set mailer to use SMTP
	                                      $mail->Host = 'mail.trraks.com';  // Specify main and backup SMTP servers
	                                      $mail->SMTPAuth = true;                               // Enable SMTP authentication
	                                      $mail->Username = 'evaluation@trraks.com';                 // SMTP username
	                                      $mail->Password = 'Trraks@007';                           // SMTP password
	                                      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	                                      $mail->Port = 587;                                    // TCP port to connect to

	                                      //Recipients
	                                      $mail->AddReplyTo( 'info@trraks.com', 'bhat kalpesh' );
	                                      $mail->setFrom('evaluation@trraks.com', 'Trraks.com');
	                                      $mail->addAddress($EMAIL,$NAME);     // Add a recipient

	                                      $mail->isHTML(true);                                  // Set email format to HTML
	                                      $mail->Subject = "Verification code to verify your email";
	                                      
	                                      $mail->Body    = "<body style='background-color: #e6e6e6'>
								              <div class='container' style='background-color: white; width:600px; height: 400px; border:0.5px solid white; margin-left:20%;margin-top:2%; padding:3%;'> 
								                <span style='display:inline-block; width: 35%;'></span><strong> <a href='https://www.trraks.com' style='text-decoration: none;'><b style='color: orange;font-size: 30px;'>T</b><b style='font-size: 30px;color: black'>rraks.com</b></a></strong><br>
								                <p style='font-size: 18px;'><b>Hey ".$NAME.",</b></p>
								                <span style='display:inline-block; width: 15px;'></span><span style='font-size: 18px;'>Thank you for registering under<strong> <a href='https://www.trraks.com' style='text-decoration: none'>Trraks Educational Platform</a></strong> for admission process.</span>  <br>
								               <span style='display:inline-block; width: 15px;'></span><span style='font-size: 18px;'>Your Activation Code is ".$emailcode."<br>  
								            <span style='font-size: 15px;'> <p> P.S.<i>\"NEVER STOP LEARNING.\"</i></p> <br></span>
								            <span style='font-size: 15px;'><p>Trraks Education Platform,Flat No.1,Patil House,Near Patil Plaza, Vise Mala,Nashik,Maharashtra.</p></span></div>
								            </body>";
	                                      // $mail->AltBodys = 'This is the body in plain text for non-HTML mail clients';

	                                      $mail->send();
	                                     
	                                  } 
	                                  catch (Exception $e) 
	                                  {
	                                      echo "msgfail";
	                                  }

						echo "send";
						// echo $response;
						}
				}
    		} 		     			
	
		}
	# code...
}else{
	 echo "<script>window.location.href='finance_register.php'</script>";
}

 ?>
