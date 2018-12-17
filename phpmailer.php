<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
define('PATH', dirname(__FILE__));
require PATH.'/vendor/PHPMailer/PHPMailer/src/Exception.php';
require PATH.'/vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
require PATH.'/vendor/PHPMailer/PHPMailer/src/SMTP.php';

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
                                      $mail->AddReplyTo( 'info@trraks.com');
                                      $mail->setFrom('evaluation@trraks.com', 'Trraks.com');
                                      $mail->addAddress('trraksedu@gmail.com','trraks.com');     // Add a recipient

                                      $mail->isHTML(true);                                  // Set email format to HTML
                                      $mail->Subject = "verification link to confirm your new registration";
                                      
                                      $mail->Body    = "just testing it";
                                      // $mail->AltBodys = 'This is the body in plain text for non-HTML mail clients';

                                      $mail->send();
                                      echo "sent";
                                     
                                  } 
                                  catch (Exception $e) 
                                  {
                                      echo 'msgfail';
                                  }

 ?>