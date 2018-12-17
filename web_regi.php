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


ini_set('display_errors', '0');



    $Student_Name = $_POST['Student_Name'];
    $Student_Contact = $_POST['Student_Contact'];
    $Student_Email = $_POST['Student_Email'];
    $Student_Current_City = $_POST['Student_Current_City'];
    $Student_Current_State = $_POST['Student_Current_State'];
    $Country_Planning = $_POST['Country_Planning'];
    $code=substr(md5(mt_rand()),0,15);

if (!empty($Student_Name) || !empty($Student_Contact) || !empty($Student_Email) || !empty($Student_Current_City) || !empty($Student_Current_State) || !empty($Country_Planning)) 
{
    $select_registered = "SELECT * FROM `webinar_registered` WHERE `STUDENT_EMAIL` = '$Student_Email'"; 
    $select_registered = $conn->query($select_registered);
    if ($select_registered->num_rows > 0) 
    {
      echo "Exists";
    }
    else
    {

      $select = "SELECT * FROM `verifying_data` WHERE `STUDENT_EMAIL` = '$Student_Email'";  
      $select = $conn->query($select);
      if ($select->num_rows > 0) 
      {
        while($row = $select->fetch_assoc())
        {
          $db_id = $row['STUDENT_ID'];
        }
            $update = "UPDATE `verifying_data` SET `STUDENT_NAME` = '$Student_Name', `STUDENT_EMAIL` = '$Student_Email', `STUDENT_MOBILE` = '$Student_Contact', `CURRENT_CITY` = '$Student_Current_City', `CURRENT_STATE` = '$Student_Current_State', `PLANNING_FOR` = '$Country_Planning', `CODE` = '$code' WHERE `verifying_data`.`STUDENT_EMAIL` = '$Student_Email'";
            $update = $conn->query($update);
          
            if ($update === TRUE) 
            {
                                   // require 'vendor/autoload.php';

                  require PATH.'/vendor/autoload.php';

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
                                      $mail->addAddress($Student_Email,$Student_Name);     // Add a recipient

                                      $mail->isHTML(true);                                  // Set email format to HTML
                                      $mail->Subject = "welcome to Trraks education platform ".$Student_Name;
                                      
                                      $mail->Body    = "<body style='background-color: #e6e6e6'>
                                                      <div class='container' style='background-color: white; width:600px; height: 400px; border:0.5px solid white; margin-left:20%;margin-top:2%; padding:3%;'> 
                                                        <span style='display:inline-block; width: 35%;'></span><strong> <a href='https://www.trraks.com' style='text-decoration: none;'><b style='color: orange;font-size: 30px;'>T</b><b style='font-size: 30px;color: black'>rraks.com</b></a></strong><br>
                                                        <p style='font-size: 18px;'><b>Hey ".$Student_Name.",</b></p>
                                                        <span style='display:inline-block; width: 15px;'></span><span style='font-size: 18px;'>Thank you for registering under<strong> <a href='https://www.trraks.com' style='text-decoration: none'>Trraks Educational Platform</a></strong> for webinar session.</span>  <br>
                                                       <span style='display:inline-block; width: 15px;'></span><span style='font-size: 18px;'>Your Activation Code is ".$code."<br> Please Click On This link <a href='localhost/trraks/site/verifying.php?id=$db_id&code=$code'>verifying.php?id=".$db_id."&code=".$code."</a> to activate your account.<br><span style='display:inline-block; width: 15px;'></span><span style='font-size: 18px;'>Day before the webinar we will send you the link. And notify you about the time.</span><br> 
                                                    <span style='font-size: 15px;'> <p> P.S.<i>\"NEVER STOP LEARNING.\"</i></p> <br></span>
                                                    <span style='font-size: 15px;'><p>Trraks Education Platform,Flat No.1,Patil House,Near Patil Plaza, Vise Mala,Nashik,Maharashtra.</p></span></div>
                                                    </body>";
                                      // $mail->AltBodys = 'This is the body in plain text for non-HTML mail clients';

                                      $mail->send();
                                      echo "inserted";
                                      // echo 'Message has been sent';
                                  } 
                                  catch (Exception $e) 
                                  {
                                      // echo 'Message could not be sent.';
                                      // echo 'Mailer Error: ' . $mail->ErrorInfo;
                                    echo "mailfail";
                                  }
                              
                                  $conn->close();
              
            }
            else
            {
              echo "fail";
            } 
      }
      else
      {
 


                            $insert = "INSERT INTO `verifying_data` (`STUDENT_NAME`, `STUDENT_EMAIL`, `STUDENT_MOBILE`, `CURRENT_CITY`, `CURRENT_STATE`, `PLANNING_FOR`, `CODE`) VALUES ('$Student_Name','$Student_Email','$Student_Contact','$Student_Current_City','$Student_Current_State','$Country_Planning','$code')";
                            $insert = $conn->query($insert);
                             $db_id=$conn->insert_id;
                            if ($insert === TRUE) 
                            { 
                               // $successalert = "An Activation Code Is Sent To You Check You Email. Check it in inbox or in spam folder.";
                              
                                    require PATH.'/vendor/autoload.php';

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
                                        $mail->addAddress($Student_Email,$Student_Name);     // Add a recipient

                                        $mail->isHTML(true);                                  // Set email format to HTML
                                        $mail->Subject = "welcome to Trraks education platform ".$Student_Name;
                                        
                                        $mail->Body    = "<body style='background-color: #e6e6e6'>
                                                    <div class='container' style='background-color: white; width:600px; height: 400px; border:0.5px solid white; margin-left:20%;margin-top:2%; padding:3%;'> 
                                                      <span style='display:inline-block; width: 35%;'></span><strong> <a href='https://www.trraks.com' style='text-decoration: none;'><b style='color: orange;font-size: 30px;'>T</b><b style='font-size: 30px;color: black'>rraks.com</b></a></strong><br>
                                                      <p style='font-size: 18px;'><b>Hey ".$Student_Name.",</b></p>
                                                      <span style='display:inline-block; width: 15px;'></span><span style='font-size: 18px;'>Thank you for registering under<strong> <a href='https://www.trraks.com' style='text-decoration: none'>Trraks Educational Platform</a></strong> for webinar session.</span>  <br>
                                                     <span style='display:inline-block; width: 15px;'></span><span style='font-size: 18px;'>Your Activation Code is ".$code."<br> Please Click On This link <a href='localhost/trraks/site/verifying.php?id=$db_id&code=$code'>verifying.php?id=".$db_id."&code=".$code."</a> to activate your account.<br><span style='display:inline-block; width: 15px;'></span><span style='font-size: 18px;'>Day before the webinar we will send you the link. And notify you about the time.</span><br> 
                                                  <span style='font-size: 15px;'> <p> P.S.<i>\"NEVER STOP LEARNING.\"</i></p> <br></span>
                                                  <span style='font-size: 15px;'><p>Trraks Education Platform,Flat No.1,Patil House,Near Patil Plaza, Vise Mala,Nashik,Maharashtra.</p></span></div>
                                                  </body>";
                                        // $mail->AltBodys = 'This is the body in plain text for non-HTML mail clients';

                                        $mail->send();
                                        echo "inserted";
                                        // echo 'Message has been sent';
                                    } 
                                    catch (Exception $e) 
                                    {
                                        echo 'mailfail';
                                        // echo 'Mailer Error: ' . $mail->ErrorInfo;
                                    }
                                
                                    $conn->close();
                            }else
                            {
                              echo "fail";
                            }                        
              
	
      }  
    }

}
else
{
  echo "<script>window.location.href= 'index.php';</script>";
}
 ?>
