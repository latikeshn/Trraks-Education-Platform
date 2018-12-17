		// 		$update_key = "UPDATE `verifying_data` SET `STUDENT_NAME` = '$User_FullName', `USER_NAME` = '$User_Name', `CODE` = '$Email_Verificatio_code' WHERE `STUDENT_EMAIL` = '$User_Email'";
		// 		$update_key = $conn->query($update_key);
		// 		if ($update_key === TRUE) 
		// 		{
				
		// 			              require PATH.'/vendor/autoload.php';

  //                                 $mail = new PHPMailer(true);
  //                                 try {
  //                                     //Server settings
  //                                    // $mail->SMTPDebug = 1;                                 // Enable verbose debug output
  //                                     $mail->isSMTP();  
  //                                     $mail->Priority = 1;   
  //                                     // $mail->SMTPDebug = 1;
  //                                     $mail->SMTPKeepAlive = true;   
  //                                           // Set mailer to use SMTP
  //                                     $mail->Host = 'mail.trraks.com';  // Specify main and backup SMTP servers
  //                                     $mail->SMTPAuth = true;                               // Enable SMTP authentication
  //                                     $mail->Username = 'evaluation@trraks.com';                 // SMTP username
  //                                     $mail->Password = 'Trraks@007';                           // SMTP password
  //                                     $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
  //                                     $mail->Port = 587;                                    // TCP port to connect to

  //                                     //Recipients
  //                                     $mail->AddReplyTo( 'info@trraks.com', 'bhat kalpesh' );
  //                                     $mail->setFrom('evaluation@trraks.com', 'Trraks.com');
  //                                     $mail->addAddress($User_Email,$User_Name);     // Add a recipient

  //                                     $mail->isHTML(true);                                  // Set email format to HTML
  //                                     $mail->Subject = "welcome to Trraks education platform ".$User_Name;
                                      
  //                                     $mail->Body    = "<body style='background-color: #e6e6e6'>
  //                                             <div class='container' style='background-color: white; width:600px; height: 400px; border:0.5px solid white; margin-left:20%;margin-top:2%; padding:3%;'> 
  //                                               <span style='display:inline-block; width: 35%;'></span><strong> <a href='https://www.trraks.com' style='text-decoration: none;'><b style='color: orange;font-size: 30px;'>T</b><b style='font-size: 30px;color: black'>rraks.com</b></a></strong><br>
  //                                               <p style='font-size: 18px;'><b>Hey ".$User_Name.",</b></p>
  //                                               <span style='display:inline-block; width: 15px;'></span><span style='font-size: 18px;'>Thank you for registering under<strong> <a href='https://www.trraks.com' style='text-decoration: none'>Trraks Educational Platform</a></strong> for webinar session.</span>  <br>
  //                                              <span style='display:inline-block; width: 15px;'></span><span style='font-size: 18px;'>Your Activation Code is ".$Email_Verificatio_code."<br> Please Click On This link <a href='localhost/trraks/site/verifying_newregistration.php?id=$db_id&code=$Email_Verificatio_code'>verifying_newregistration.php?id=".$db_id."&code=".$Email_Verificatio_code."</a> to activate your account.<br><span style='display:inline-block; width: 15px;'></span><span style='font-size: 18px;'>Day before the webinar we will send you the link. And notify you about the time.</span><br> 
  //                                           <span style='font-size: 15px;'> <p> P.S.<i>\"NEVER STOP LEARNING.\"</i></p> <br></span>
  //                                           <span style='font-size: 15px;'><p>Trraks Education Platform,Flat No.1,Patil House,Near Patil Plaza, Vise Mala,Nashik,Maharashtra.</p></span></div>
  //                                           </body>";
  //                                     // $mail->AltBodys = 'This is the body in plain text for non-HTML mail clients';

  //                                     $mail->send();
  //                                     echo "Verification coad sent on your email";
  //                                     // echo 'Message has been sent';
  //                                 } 
  //                                 catch (Exception $e) 
  //                                 {
  //                                     // echo 'Message could not be sent.';
  //                                     // echo 'Mailer Error: ' . $mail->ErrorInfo;
  //                                   echo "something went wrong while sendig verification code on mentioned email id.";
  //                                 }
                              
  //                                 $conn->close();
		// 		}else
		// 		{
		// 			echo "something went wrong while updating data";
		// 		}
		// 	}else
		// 	{
		// 		// echo "else not update. insert new";
		// 				$insert = "INSERT INTO `verifying_data` (`STUDENT_NAME`, `USER_NAME`, `STUDENT_EMAIL`, `STUDENT_MOBILE`, `CURRENT_CITY`,`USER_PASSWORD`, `CODE`) VALUES ('$User_FullName', '$User_Name', '$User_Email', '$User_MobileNumber', '$current_location', '$reEntered_Password','$Email_Verificatio_code');";

		// 				 $insert = $conn->query($insert);
		// 				 $db_id=$conn->insert_id;
		// 				if ($insert === TRUE)
		// 				 {
		// 						 require PATH.'/vendor/autoload.php';

  //                                 $mail = new PHPMailer(true);
  //                                 try {
  //                                     //Server settings
  //                                    // $mail->SMTPDebug = 1;                                 // Enable verbose debug output
  //                                     $mail->isSMTP();  
  //                                     $mail->Priority = 1;   
  //                                     // $mail->SMTPDebug = 1;
  //                                     $mail->SMTPKeepAlive = true;   
  //                                           // Set mailer to use SMTP
  //                                     $mail->Host = 'mail.trraks.com';  // Specify main and backup SMTP servers
  //                                     $mail->SMTPAuth = true;                               // Enable SMTP authentication
  //                                     $mail->Username = 'evaluation@trraks.com';                 // SMTP username
  //                                     $mail->Password = 'Trraks@007';                           // SMTP password
  //                                     $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
  //                                     $mail->Port = 587;                                    // TCP port to connect to

  //                                     //Recipients
  //                                     $mail->AddReplyTo( 'info@trraks.com', 'bhat kalpesh' );
  //                                     $mail->setFrom('evaluation@trraks.com', 'Trraks.com');
  //                                     $mail->addAddress($User_Email,$User_Name);     // Add a recipient

  //                                     $mail->isHTML(true);                                  // Set email format to HTML
  //                                     $mail->Subject = "welcome to Trraks education platform ".$User_Name;
                                      
  //                                     $mail->Body    = "<body style='background-color: #e6e6e6'>
  //                                             <div class='container' style='background-color: white; width:600px; height: 400px; border:0.5px solid white; margin-left:20%;margin-top:2%; padding:3%;'> 
  //                                               <span style='display:inline-block; width: 35%;'></span><strong> <a href='https://www.trraks.com' style='text-decoration: none;'><b style='color: orange;font-size: 30px;'>T</b><b style='font-size: 30px;color: black'>rraks.com</b></a></strong><br>
  //                                               <p style='font-size: 18px;'><b>Hey ".$User_Name.",</b></p>
  //                                               <span style='display:inline-block; width: 15px;'></span><span style='font-size: 18px;'>Thank you for registering under<strong> <a href='https://www.trraks.com' style='text-decoration: none'>Trraks Educational Platform</a></strong> for webinar session.</span>  <br>
  //                                              <span style='display:inline-block; width: 15px;'></span><span style='font-size: 18px;'>Your Activation Code is ".$Email_Verificatio_code."<br> Please Click On This link <a href='localhost/trraks/site/verifying_newregistration.php?id=$db_id&code=$Email_Verificatio_code'>verifying_newregistration.php?id=".$db_id."&code=".$Email_Verificatio_code."</a> to activate your account.<br><span style='display:inline-block; width: 15px;'></span><span style='font-size: 18px;'>Day before the webinar we will send you the link. And notify you about the time.</span><br> 
  //                                           <span style='font-size: 15px;'> <p> P.S.<i>\"NEVER STOP LEARNING.\"</i></p> <br></span>
  //                                           <span style='font-size: 15px;'><p>Trraks Education Platform,Flat No.1,Patil House,Near Patil Plaza, Vise Mala,Nashik,Maharashtra.</p></span></div>
  //                                           </body>";
  //                                     // $mail->AltBodys = 'This is the body in plain text for non-HTML mail clients';

  //                                     $mail->send();
  //                                     echo "Verification coad sent on your email";
  //                                     // echo 'Message has been sent';
  //                                 } 
  //                                 catch (Exception $e) 
  //                                 {
  //                                     // echo 'Message could not be sent.';
  //                                     // echo 'Mailer Error: ' . $mail->ErrorInfo;
  //                                   echo "something went wrong while sendig verification code on mentioned email id.";
  //                                 }
                              
  //                                 $conn->close();