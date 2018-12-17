<?php 

		include("configure.php");
		$User_fullName = $_POST['User_fullName'];
		$User_Name = $_POST['User_Name'];
		$User_Email = $_POST['User_Email'];
		$mobilenumber = $_POST['User_MobileNumber'];
		$code = rand(1000, 9999); 
		if(isset($mobilenumber))
		{

	$select = "SELECT * FROM `register_user` WHERE `Mo_No` = '$mobilenumber'";  
	
	$select= $conn->query($select);

	if ($select->num_rows > 0) 
  {
  	echo "exists";
  }else{
  		       $select = "SELECT * FROM `otp_data` WHERE `MOBILENO` = '$mobilenumber'"; 
           $Get = $conn->query($select);
           if ($Get->num_rows > 0)
           {
				$sql = "UPDATE `otp_data` SET `OTP` = '$code', `STUDENT_NAME` = '$User_fullName', `USER_NAME` = '$User_Name', `EMAIL` = '$User_Email' WHERE `MOBILENO` = '$mobilenumber'";
				$conn->query($sql);
						if ($conn->query($sql) === TRUE) 
		                { 
						// $otpcode = hash('SHA256', $code);
						// Account details
		                	// echo "here";
						$apiKey = urlencode('p3LEAJJas3E-vBIE8c31ejj1FDLTmExNKSGC5AWKww');
						
						// Message details
						$number=$_POST['User_MobileNumber'];
						//$number = $_POST['Stud_Mobile'];
						$sender = urlencode('CBSOFT');
						$message = rawurlencode("Dear User,\nWe are from Trraks.com.\nVerify your mobile number before getting your result.\nYour verification code is ".$code);
					 
						// Prepare data for POST request
						 $data = array('apikey' => $apiKey, 'numbers' => $number, "sender" => $sender, "message" => $message);
					 
						// Send the POST request with cURL
						$ch = curl_init('https://api.textlocal.in/send/');
						curl_setopt($ch, CURLOPT_POST, true);
						curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						$response = curl_exec($ch);
						curl_close($ch);
						 $success = "true";
						echo $success;
						// echo $response;
						}else{
							echo "fail";
						}				
           }
           else
           {
           	
				$sql ="INSERT into `otp_data` (STUDENT_NAME,USER_NAME,EMAIL,MOBILENO,OTP) values ('$User_fullName','$User_Name','$User_Email','$mobilenumber','$code')";
						if ($conn->query($sql) === TRUE) 
		                { 
						// $otpcode = hash('SHA256', $code);
						// Account details
		                	// echo "here";
						$apiKey = urlencode('p3LEAJJas3E-vBIE8c31ejj1FDLTmExNKSGC5AWKww');
						
						// Message details
						$number=$_POST['User_MobileNumber'];
						//$number = $_POST['Stud_Mobile'];
						$sender = urlencode('CBSOFT');
						$message = rawurlencode("Dear User,\nWe are from Trraks.com.\nVerify your mobile number before getting your result.\nYour verification code is ".$code);
					 
						// Prepare data for POST request
						$data = array('apikey' => $apiKey, 'numbers' => $number, "sender" => $sender, "message" => $message);
					 
						// Send the POST request with cURL
						$ch = curl_init('https://api.textlocal.in/send/');
						curl_setopt($ch, CURLOPT_POST, true);
						curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						$response = curl_exec($ch);
						curl_close($ch);
						$success = "true";
						echo $success;
						// echo $response;
						}else{
							echo "fail";
						}	

           }
            
  }

    			
		}
		else{
							header("Location:index.php");
			 }

 ?>
