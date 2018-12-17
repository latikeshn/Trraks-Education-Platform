<?php 
include("header.php");

$email="";
$emailErr="";
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
define('PATH', dirname(__FILE__));
require PATH.'/vendor/PHPMailer/PHPMailer/src/Exception.php';
require PATH.'/vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
require PATH.'/vendor/PHPMailer/PHPMailer/src/SMTP.php';  


   $emailErr="";


// require 'http://www.trraks.com/vendor/phpmailer/phpmailer/src/Exception.php';
// require 'http://www.trraks.com/vendor/phpmailer/phpmailer/src/PHPMailer.php';
// require 'http://www.trraks.com/vendor/phpmailer/phpmailer/src/SMTP.php';
//if(isset($_POST['submit'])){
if($_SERVER["REQUEST_METHOD"]==="POST")
{

   if(empty($_POST["email"]))
          {
              $emailErr="Please Enter Email Address";
          }
          else
          {

                  $email=test_input($_POST["email"]);

                  	$time =time();
                  require "configure.php";

                  $search_indatabase= "SELECT * FROM `register_user` WHERE `Email`='$email'" ;
                   
                  $result = $conn->query($search_indatabase); 
                  if ($result->num_rows>0)
                  {  
                      $row = $result->fetch_assoc();
                      //$emailErr="user with this email id is already exist";
                           // Create a unique salt. This will never leave PHP unencrypted.

       				 $salt = "498#2D83B631%3800EBD!801600D*7E3CC13";

        // Create the unique user password reset key

       				 $password = hash('sha512', $salt.$email);

 // Create a url which we will direct them to reset their password

       				 $pwrurl = "http://localhost/trraks/site/reset_password.php?q=".$password."&tm=".$time."&em=".$email;
    
     //Load composer's autoloader
					    require 'vendor/autoload.php';
					   
					    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
					    try {
					        //Server settings
					        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
					        $mail->isSMTP();                                      // Set mailer to use SMTP
					        $mail->Host = 'mail.trraks.com';  // Specify main and backup SMTP servers
					        $mail->SMTPAuth = true;                               // Enable SMTP authentication
					        $mail->Username = 'evaluation@trraks.com';                 // SMTP username
					        $mail->Password = 'Trraks@007';                           // SMTP password
					        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
					        $mail->Port = 587;                                    // TCP port to connect to
					      
					        //Recipients
					        $mail->setFrom('evaluation@trraks.com','Trraks.com');
					        $mail->addAddress($email, $row['USER_NAME']);     // Add a recipient
	
					        $mail->isHTML(true);                                  // Set email format to HTML
					        
					        $mail->Subject = 'www.trraks.com - Password Reset';
					 
					       $mail->Body    = "<body style='background-color: #e6e6e6'>
              <div class='container' style='background-color: white; width:600px; height: 400px; border:0.5px solid white; margin-left:20%;margin-top:2%; padding:3%;'> 
                <span style='display:inline-block; width: 35%;'></span><strong> <a href='https://www.trraks.com' style='text-decoration: none;'><b style='color: orange;font-size: 30px;'>T</b><b style='font-size: 30px;color: black'>rraks.com</b></a></strong><br>
                <p style='font-size: 18px;'><b>Dear ".$row['USER_NAME'].",</b></p>
                <span style='display:inline-block; width: 15px;'></span><span style='font-size: 15px;'>If this e-mail does not apply to you please ignore it. <br> It appears that you have requested a password reset at our website <a href='https://www.trraks.com'>www.trraks.com</a>.</span>  <br>
               <span style='display:inline-block; width: 15px;'></span><span style='font-size: 15px;'>To reset your password, please click the link below.<br> 
               <span style='display:inline-block; width: 15px;'></span>
               <span style='font-size: 15px;'>If you cannot click it, please paste it into your web browser's address bar. <br> </span>" . $pwrurl ." <br>Thanks,<br>The Administration<br>  
            <span style='font-size: 15px;'> <p> P.S.<i>\"NEVER STOP LEARNING.\"</i></p> <br></span>
            <span style='font-size: 15px;'><p>Trraks Education Platform,Flat No.1,Patil House,Near Patil Plaza, Vise Mala,Nashik,Maharashtra.</p></span></div>
            </body>";
					        $mail->send();
					       $sentErr = 'Found your Account. <br>Password recovery link has been sent to your e-mail address';
					       echo "<script>setTimeout(function () {
   window.location.href= 'index.php'; // the redirect goes here

},8000);</script>";
					//        echo "Hello";
					//      echo "your password recovery key has been sent to your e-mail address";  
					    } catch (Exception $e) {
					        $sentErr = 'Message could not be sent.Please try again';
					        // echo 'Mailer Error: ' . $mail->ErrorInfo;
					        }
                      
                  }
              else{
          				$emailErr="No user with that e-mail address exists";
        		 }
                      $conn->close();
              
   			}  
}
function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }
//end of submit
 ?>


 <div class="container">
	<div class="row justify-content-center"  style="border:2px solid white;">
	<div class="col-8" style="margin-top: 5%;">
	<div class="row">
		<div class="header col-12">
			<p class="h3 mb-3"><b>Find Your Account</b></p>
			<hr>
		</div>
		<div class="messege col-12">
			<p >Enter your email address to search for your account.</p>
		</div>
	</div>
			<form action="" method="POST">
				<div class="form-group input-group-lg">
					<input class="form-control " aria-label="Large" aria-describedby="inputGroup-sizing-sm" name="email" type="email" placeholder="Email Address For Search" required style="background-color: transparent;">
					<h6 class="text-hidden mt-1">E.g. mymail@zmail.com</h6>
					<span class="danger" style="color: red;"><?=$emailErr?></span>
				</div>
				<div class="form-group">
                      <button class="btn btn-info my-2 my-sm-0 btn-lg btn-block" name="student_login" type="submit">Get Recovery Link</button>
                      <span class="danger" style="color: green;"><?=$sentErr?></span>
                </div>  
			</form>			
	</div> 
	
	</div>
</div> 


 <?php 
include("footer.php");
  ?>