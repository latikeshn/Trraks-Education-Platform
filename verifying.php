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


if(isset($_GET['id']) && isset($_GET['code']))
{
  $id=$_GET['id'];
  $code=$_GET['code'];
  $select="SELECT * FROM `verifying_data` WHERE `STUDENT_ID`='$id' AND `CODE`='$code'";
  $result=$conn->query($select);


  if($result->num_rows > 0)
  {
    while($row = $result->fetch_assoc())
    { 
      $STUDENT_NAME = $row['STUDENT_NAME'];
      $STUDENT_EMAIL = $row['STUDENT_EMAIL'];
      $STUDENT_MOBILE = $row['STUDENT_MOBILE'];
      $CURRENT_CITY = $row['CURRENT_CITY'];
      $CURRENT_STATE = $row['CURRENT_STATE'];
      $PLANNING_FOR = $row['PLANNING_FOR'];
    }   
      $select_registered = "SELECT * FROM `webinar_registered` WHERE `EMAIL` = '$EMAIL'";
      $select_registered = $conn->query($select_registered); 
       if($select_registered->num_rows > 0)
       {
         echo "<script>alert('You are already registered with this email ID.');window.location.href='index.php';</script>";

       }
        else
        {
          $insert_user="INSERT INTO `webinar_registered` (`STUDENT_NAME`, `STUDENT_EMAIL`, `STUDENT_MOBILE`, `CURRENT_CITY`, `CURRENT_STATE`, `PLANNING_FOR`) VALUES ('$STUDENT_NAME','$STUDENT_EMAIL','$STUDENT_MOBILE','$CURRENT_CITY','$CURRENT_STATE','$PLANNING_FOR')";
          $inserted =$conn->query($insert_user);
                  if ($inserted === TRUE) 
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
                          $mail->AddReplyTo( 'info@trraks.com', 'trraks' );
                          $mail->setFrom('evaluation@trraks.com', 'Trraks.com');
                          $mail->addAddress($STUDENT_EMAIL,$STUDENT_NAME);     // Add a recipient

                          $mail->isHTML(true);                                  // Set email format to HTML
                          $mail->Subject = "Your account has been verified ".$STUDENT_NAME;
                          
                          $mail->Body    = "<body style='background-color: #e6e6e6'>
                                        <div class='container' style='background-color: white; width:600px; height: 400px; border:0.5px solid white; margin-left:20%;margin-top:2%; padding:3%;'> 
                                          <span style='display:inline-block; width: 35%;'></span><strong> <a href='https://www.trraks.com' style='text-decoration: none;'><b style='color: orange;font-size: 30px;'>T</b><b style='font-size: 30px;color: black'>rraks.com</b></a></strong><br>
                                          <p style='font-size: 18px;'><b>Hey ".$STUDENT_NAME.",</b></p>
                                          <span style='display:inline-block; width: 15px;'></span><span style='font-size: 18px;'>Thank you for registering under<strong> <a href='https://www.trraks.com' style='text-decoration: none'>Trraks Educational Platform</a></strong> for webinar session.</span>  <br>
                                         <span style='display:inline-block; width: 15px;'></span><span style='font-size: 18px;'><i style='color:green'>Your account has been verified.</i><br><span style='display:inline-block; width: 15px;'></span><span style='font-size: 18px;'>We have arrenged the webinar session on 28 of Feb sharp at 6pm. You will get the webinar link on 27 of Feb upto 6pm on your registered email id with us.</span><br> 
                                      <span style='font-size: 15px;'> <p> P.S.<i>\"NEVER STOP LEARNING.\"</i></p> <br></span>
                                      <span style='font-size: 15px;'><p>Trraks Education Platform,Flat No.1,Patil House,Near Patil Plaza, Vise Mala,Nashik,Maharashtra.</p></span></div>
                                      </body>";
                          // $mail->AltBodys = 'This is the body in plain text for non-HTML mail clients';

                          $mail->send();
                          // echo 'Message has been sent';
                             $delete=mysqli_query($conn,"DELETE FROM `verifying_data` WHERE `STUDENT_ID`='$id'");
                             echo "<script>alert('Your account has been Verified.Please check your mail');window.location.href='index.php';</script>";
                             $deleted =$conn->query($delete);
                      } 
                      catch (Exception $e) 
                      {
                          // echo 'Message could not be sent.';
                          echo "<script>alert('Email is not verifying something went wrong.Please try again');window.location.href='index.php';</script>";
                          // echo 'Mailer Error: ' . $mail->ErrorInfo;
                      }
          # code...
                  }else
                  {
                      echo "<script>alert('Email is not verifying something went wrong.Please try again');window.location.href='index.php';</script>";
                  } 
        }        
                      $conn->close();
  } 
}
else
{
  echo "<script>alert('Please click on link shared on given email address.');window.location.href='index.php';</script>";
}
 ?>
