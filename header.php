<?php 
session_start();
ini_set('display_errors', '0');
$USER_LOGGED_IN = $_SESSION['Email'];
 ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Trraks.com</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script defer src="../static/js/fontawesome-all.min.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="../static/img/trraks_icon.ico" />
        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/bootstrap-cosmo.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Aldrich" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
      <script src='https://www.google.com/recaptcha/api.js'></script>       
    </head>
<body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <!-- top social bar -->
<div class="container-fluid bg-light " id="header">
    <div class="container">
    <div class="row justify-content-end">
        <div class="col text-right">
           <a href="https://www.facebook.com/trraks/" target="_blank"><i class="fab fa-facebook fa-lg"></i></a> 
           <a href="https://twitter.com/trraksedu" target="_blank"><i class="fab fa-twitter-square fa-lg"></i></a> 
           <!-- <a href=""><i class="fab fa-linkedin fa-lg"></i></a>  -->
           <a href="https://www.instagram.com/trraksedu/" target="_blank"><i class="fab fa-instagram fa-lg"></i></a> 
        </div>
    </div>
</div>
</div>
        <!-- end of top social bar -->
<!-- top bar -->

<div class="container">
    <div class="row align-items-center">
        <div class="col-md-3">
           <a href="index.php"> <img src="../static/img/trraks-logo.png" alt="Trraks.com" class="nav-logo"></a>
        </div>
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-10">
              <span class="h4 text-primary">Webinar session starts in : </span>
            
              <span class="h4 text-primary"><strong><span class="text-success num-font " id="webinar-date-countdown">
              <!-- Count Down timer is in custome.js -->
            </span></strong></span> 
            </div>
            <div class="col-md-2">
              <a href="webinar_registration.php"><button class="btn btn-secondary my-2 my-sm-0 btn-danger animated infinite pulse" type="submit">Apply <i class="far fa-hand-point-left"></i></button></a>
            </div>
          </div>
            
        </div>
    </div>
</div>
 

<!-- End of top bar -->
        <!-- Add your site or application content here -->
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary"  style="z-index: 888;">
                <a class="navbar-brand active" href="index.php">HOME</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
 <!--              <li class="nav-item">
                <a class="nav-link" href="#"><h5><b>Profile Evaluation</h5></b></a>
              </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 15px;">
              Study Abroad
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #e76318; ">
              <a class="dropdown-item" href="australia-blog.php"><b>Study Australia</b></a>
    <!--                   <div class="subdropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="subdropdown-item dropdown-toggle" role="button" data-toggle="subdropdown" href="#">MS in Australia </a>
                          <a class="subdropdown-item dropdown-toggle" role="button" data-toggle="subdropdown" href="#">MBA in Australia </a>
                        </div> -->
              <a class="dropdown-item" href="canada-blog.php"><b>Study Canada</b></a>
              <!-- <div class="dropdown-divider"></div> -->
              <a class="dropdown-item" href="usa-blog.php"><b>Study USA</b></a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="font-size: 15px;">
             Study Material
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #e76318; "> 
              <a class="dropdown-item" href="gre-info.php"><b>GRE</b></a>
              <a class="dropdown-item" href="gmat-info.php"><b>GMAT</b></a>
              <a class="dropdown-item" href="ielts-info.php"><b>IELTS</b></a>
              <a class="dropdown-item" href="pte-info.php"><b>PTE</b></a>
              <a class="dropdown-item" href="toefl-info.php"><b>TOEFL</b></a>
            </div>
          </li>
                  <li class="nav-item">
                    <a data-scroll class="nav-link" href="#footer"  style="font-size: 15px;">Contact Us</a>
                  </li>
            <!--       <li class="nav-item">
                    <a class="nav-link" href="https://www.trraks.com/blog/" target="_blank"  style="font-size: 15px;">Blog</a>
                  </li> -->
            </ul>
         <?php  if(isset($_SESSION['USER_NAME'])): ?>
            <?php echo "<small id='user_name'>Welcome " . $_SESSION['USER_NAME']." ! </small>" ?>
          <a href="logout_user.php" id="logout" class="btn btn-danger logout-button"> Sign Out</a>
          <?php else: ?>
            <!-- <form class="form-inline my-2 my-lg-0" method="POST" action="student_login.php">
              <input class="form-control mr-sm-2" name="login_mail" type="email" placeholder="Email" required>
              <input class="form-control mr-sm-2" name="login_password" type="Password" placeholder="Password" required>
 -->
              <button class="btn btn-secondary my-2 my-sm-0 btn-info"  data-toggle="modal" data-target="#login" name="student_login_modal" type="button">Sign in</button>

              <!-- Sign up button for new user registration -->
              <button class="btn btn-primary ml-2" data-toggle="modal" data-target="#Signup" type="button">SignUp</button>
               <!-- <a class="btn btn-primary" data-toggle="modal" data-target="#Signup">SignUp</a> -->
            <!-- </form> -->
           
              
            
            <?php endif; ?>
          </div>
        </nav>
        </div>
        <!-- Modal sign up form-->
        <div class="modal fade" id="Signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="width: 400px; margin-left: auto; margin-right: auto;background-color: #ffffff">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: black;">New Registration</h5>
         
              </div>
              <div class="modal-body">
             <form class="register">

                        <div class="form-group">
                          <input type="text" id="User_FullName" name="User_FullName" class="form-control  register-form" aria-label="Text input with segmented button dropdown" placeholder="Full Name" required>                
                        </div>

                        <div class="form-group ">
                          <input type="text" id="User_Name" name="User_Name" class="form-control  register-form" aria-label="Text input with segmented button dropdown" placeholder="User Name" required>                
                        </div>


                        <div class="form-group ">
                          <input type="email" id="User_Email" name="User_Email" class="form-control  register-form" aria-label="Text input with segmented button dropdown" placeholder="Email ID to be in touch with you" required> 
                          <small id="emailHelp" class="form-text text-muted text-justify" style="color: black; font-weight: 400">We'll never share your email with anyone else.</small>          
                        </div>


                        <div class="form-group form-inline ">
                          
                                 <input type="tel" id="User_MobileNumber" name="User_MobileNumber" class="form-control  register-form" aria-label="Text input with segmented button dropdown" placeholder="Mo. Eg: 9186########" required>                             
                           <div class="col">
                            <button class="btn btn-default" id="otp_send" type="button"><span id="loader1"><img src="img/form_loading.gif" alt="form_loader" width="25px"></span>
Send OTP</button>
                          </div>
            <div class="form-group ">
                   <small id="errormsg1" style="color: green; margin-left: 2px;">OTP sent to given number</small>
            </div>
                        </div>
                          <div class="form-group register-flabel">
                                 <input type="text" id="verification_coad" name="verification_coad" class="form-control  register-form" aria-label="Text input with segmented button dropdown" placeholder="OTP recived on mobile Eg: #4## " required>
                                  <small id="otpfail" style="color: red; margin-left: 4px;">OTP not matched</small>                              
                          </div>
                        <div class="form-group">
                                      <select name="stud_city" id="current_location" class="form-control">
                                        <option value="">-Select current location-</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#000000"><i>-Top Metropolitan Cities-</i></font></option>
                                        <option>Ahmedabad</option> 
                                        <option>Bengaluru/Bangalore</option>
                                        <option>Chandigarh</option>
                                        <option>Chennai</option>
                                        <option>Delhi</option>
                                        <option>Gurgaon</option>
                                        <option>Hyderabad/Secunderabad</option>
                                        <option>Kolkatta</option>
                                        <option>Mumbai</option>
                                        <option>Noida</option>
                                        <option>Pune</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Andhra Pradesh-</i></font></option>
                                        <option>Anantapur</option>
                                        <option>Guntakal</option>
                                        <option>Guntur</option>
                                        <option>Hyderabad/Secunderabad</option>
                                        <option>kakinada</option>
                                        <option>kurnool</option>
                                        <option>Nellore</option>
                                        <option>Nizamabad</option>
                                        <option>Rajahmundry</option>
                                        <option>Tirupati</option>
                                        <option>Vijayawada</option>
                                        <option>Visakhapatnam</option>
                                        <option>Warangal</option>
                                        <option>Andra Pradesh-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Arunachal Pradesh-</i></font></option>
                                        <option>Itanagar</option>
                                        <option>Arunachal Pradesh-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Assam-</i></font></option>
                                        <option>Guwahati</option>
                                        <option>Silchar</option>
                                        <option>Assam-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Bihar-</i></font></option>
                                        <option>Bhagalpur</option>
                                        <option>Patna</option>
                                        <option>Bihar-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Chhattisgarh-</i></font></option>
                                        <option>Bhillai</option>
                                        <option>Bilaspur</option>
                                        <option>Raipur</option>
                                        <option>Chhattisgarh-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Goa-</i></font></option>
                                        <option>Panjim/Panaji</option>
                                        <option>Vasco Da Gama</option>
                                        <option>Goa-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Gujarat-</i></font></option>
                                        <option>Ahmedabad</option>
                                        <option>Anand</option>
                                        <option>Ankleshwar</option>
                                        <option>Bharuch</option>
                                        <option>Bhavnagar</option>
                                        <option>Bhuj</option>
                                        <option>Gandhinagar</option>
                                        <option>Gir</option>
                                        <option>Jamnagar</option>
                                        <option>Kandla</option>
                                        <option>Porbandar</option>
                                        <option>Rajkot</option>
                                        <option>Surat</option>
                                        <option>Vadodara/Baroda</option>
                                        <option>Valsad</option>
                                        <option>Vapi</option>
                                        <option>Gujarat-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Haryana-</i></font></option>
                                        <option>Ambala</option>
                                        <option>Chandigarh</option>
                                        <option>Faridabad</option>
                                        <option>Gurgaon</option>
                                        <option>Hisar</option>
                                        <option>Karnal</option>
                                        <option>Kurukshetra</option>
                                        <option>Panipat</option>
                                        <option>Rohtak</option>
                                        <option>Haryana-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Himachal Pradesh-</i></font></option>
                                        <option>Dalhousie</option>
                                        <option>Dharmasala</option>
                                        <option>Kulu/Manali</option>
                                        <option>Shimla</option>
                                        <option>Himachal Pradesh-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Jammu and Kashmir-</i></font></option>
                                        <option>Jammu</option>
                                        <option>Srinagar</option>
                                        <option>Jammu and Kashmir-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Jharkhand-</i></font></option>
                                        <option>Bokaro</option>
                                        <option>Dhanbad</option>
                                        <option>Jamshedpur</option>
                                        <option>Ranchi</option>
                                        <option>Jharkhand-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Karnataka-</i></font></option>
                                        <option>Bengaluru/Bangalore</option>
                                        <option>Belgaum</option>
                                        <option>Bellary</option>
                                        <option>Bidar</option>
                                        <option>Dharwad</option>
                                        <option>Gulbarga</option>
                                        <option>Hubli</option>
                                        <option>Kolar</option>
                                        <option>Mangalore</option>
                                        <option>Mysoru/Mysore</option>
                                        <option>Karnataka-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Kerala-</i></font></option>
                                        <option>Calicut</option>
                                        <option>Cochin</option>
                                        <option>Ernakulam</option>
                                        <option>Kannur</option>
                                        <option>Kochi</option>
                                        <option>Kollam</option>
                                        <option>Kottayam</option>
                                        <option>Kozhikode</option>
                                        <option>Palakkad</option>
                                        <option>Palghat</option>
                                        <option>Thrissur</option>
                                        <option>Trivandrum</option>
                                        <option>Kerela-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Madhya Pradesh-</i></font></option>
                                        <option>Bhopal</option>
                                        <option>Gwalior</option>
                                        <option>Indore</option>
                                        <option>Jabalpur</option>
                                        <option>Ujjain</option>
                                        <option>Madhya Pradesh-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Maharashtra-</i></font></option>
                                        <option>Ahmednagar</option>
                                        <option>Aurangabad</option>
                                        <option>Jalgaon</option>
                                        <option>Kolhapur</option>
                                        <option>Mumbai</option>
                                        <option>Mumbai Suburbs</option>
                                        <option>Nagpur</option>
                                        <option>Nasik</option>
                                        <option>Navi Mumbai</option>
                                        <option>Pune</option>
                                        <option>Solapur</option>
                                        <option>Maharashtra-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Manipur-</i></font></option>
                                        <option>Imphal</option>
                                        <option>Manipur-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Meghalaya-</i></font></option>
                                        <option>Shillong</option>
                                        <option>Meghalaya-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Mizoram-</i></font></option>
                                        <option>Aizawal</option>
                                        <option>Mizoram-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Nagaland-</i></font></option>
                                        <option>Dimapur</option>
                                        <option>Nagaland-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Orissa-</i></font></option>
                                        <option>Bhubaneshwar</option>
                                        <option>Cuttak</option>
                                        <option>Paradeep</option>
                                        <option>Puri</option>
                                        <option>Rourkela</option>
                                        <option>Orissa-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Punjab-</i></font></option>
                                        <option>Amritsar</option>
                                        <option>Bathinda</option>
                                        <option>Chandigarh</option>
                                        <option>Jalandhar</option>
                                        <option>Ludhiana</option>
                                        <option>Mohali</option>
                                        <option>Pathankot</option>
                                        <option>Patiala</option>
                                        <option>Punjab-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Rajasthan-</i></font></option>
                                        <option>Ajmer</option>
                                        <option>Jaipur</option>
                                        <option>Jaisalmer</option>
                                        <option>Jodhpur</option>
                                        <option>Kota</option>
                                        <option>Udaipur</option>
                                        <option>Rajasthan-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Sikkim-</i></font></option>
                                        <option>Gangtok</option>
                                        <option>Sikkim-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Tamil Nadu-</i></font></option>
                                        <option>Chennai</option>
                                        <option>Coimbatore</option>
                                        <option>Cuddalore</option>
                                        <option>Erode</option>
                                        <option>Hosur</option>
                                        <option>Madurai</option>
                                        <option>Nagerkoil</option>
                                        <option>Ooty</option>
                                        <option>Salem</option>
                                        <option>Thanjavur</option>
                                        <option>Tirunalveli</option>
                                        <option>Trichy</option>
                                        <option>Tuticorin</option>
                                        <option>Vellore</option>
                                        <option>Tamil Nadu-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Tripura-</i></font></option>
                                        <option>Agartala</option>
                                        <option>Tripura-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Union Territories-</i></font></option>
                                        <option>Chandigarh</option>
                                        <option>Dadra & Nagar Haveli-Silvassa</option>
                                        <option>Daman & Diu</option>
                                        <option>Delhi</option>
                                        <option>Pondichery</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Uttar Pradesh-</i></font></option>
                                        <option>Agra</option>
                                        <option>Aligarh</option>
                                        <option>Allahabad</option>
                                        <option>Bareilly</option>
                                        <option>Faizabad</option>
                                        <option>Ghaziabad</option>
                                        <option>Gorakhpur</option>
                                        <option>Kanpur</option>
                                        <option>Lucknow</option>
                                        <option>Mathura</option>
                                        <option>Meerut</option>
                                        <option>Moradabad</option>
                                        <option>Noida</option>
                                        <option>Varanasi/Banaras</option>
                                        <option>Uttar Pradesh-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Uttaranchal-</i></font></option>
                                        <option>Dehradun</option>
                                        <option>Roorkee</option>
                                        <option>Uttaranchal-Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-West Bengal-</i></font></option>
                                        <option>Asansol</option>
                                        <option>Durgapur</option>
                                        <option>Haldia</option>
                                        <option>Kharagpur</option>
                                        <option>Kolkatta</option>
                                        <option>Siliguri</option>
                                        <option>West Bengal - Other</option>
                                        <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Other-</i></font></option>
                                        <option>Other</option>
                                    </select>   

                        </div>

                        <div class="form-group">
                          
                          <input type="Password" id="Password" name="Password" class="form-control  register-form" aria-label="Text input with segmented button dropdown" placeholder="Password" required>    

                        </div>
                       <div class="form-group row" id="passnote">
                        <div class="col">
                              <small  class="form-text text-muted text-justify" style="color:green;">
                              password must contain at least one number, one lowercase and one uppercase letter and at least of six charecters</small>
                        </div>
                      </div> 
                        <div class="form-group ">
                          
                          <input type="Password" id="reEntered_Password" name="reEntered_Password" class="form-control  register-form" aria-label="Text input with segmented button dropdown" placeholder="Re-Enter Password" required> 
                             <small id="message"></small>     
                        </div>

                       <div class="form-group row">
                        <div class="col">
                              <small id="emailHelp" class="form-text text-muted text-justify" style="color:green;">By clicking register now, you agree to our Terms and confirm that you have read our <a href="terms.php"  target="_blank">Data Policy</a>. You may receive SMS message and email notifications from Trraks.com and can opt out at any time.</small>
                        </div>
                      </div> 
                         <div class="form-group row" style="float: right;">
                          <div class="col">
                            <small id="empty" style="color: red; margin-left: 4px;">some fields are empty</small><span id="loader2"><img src="img/form_loading.gif" alt="form_loader" width="25px"></span>
                    
                                <input type="button" id="registerForm" class="btn btn-info" name="SignUp" value="Register">

                               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                          </div>
                  </form>
              </div>
            
            </div>
          </div>
        </div>  <!-- modal ends here -->
<!-- End of main nav -->
<!-- header jumbotron -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  sign in
</button>
 -->
<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border: solid 1px #e76318; background-color: #fefff3;">
      <div class="modal-body">
        <div class="row text-center">
          <div class="col-12">
             <h2 class="modal-title" id="exampleModalLabel" style="font-weight: 600; color: #e76318;">LOGIN</h2>
          </div>
          
                    <form class="form mr-auto ml-auto" method="POST" action="student_login.php">
                      <div class="form-group input-group-lg col-12 mt-4 mb-4 ml-auto" style="width: 100%">
                        <input class="form-control mr-sm-2" aria-label="Large" aria-describedby="inputGroup-sizing-sm" name="login_mail" type="email" placeholder="Email" required style="background-color: transparent;">
              
                      </div>
                      <div class="form-group input-group-lg col-12" style="width: 100%">
                        <input class="form-control mr-sm-2" aria-label="Large" aria-describedby="inputGroup-sizing-sm" name="login_password" type="Password" placeholder="Password" required style="background-color: transparent;">
                      </div>
                      <div class="row justify-content-between">
                          <div class="form-group col-6">
                            <input type="checkbox" aria-label="Checkbox for following text input" id="RememberMe" name="RememberMe" > Remember me
                          </div>                        
                          <div class="form-group col-4">
                           <a href="password_recovery.php" style="color:#e76318; text-decoration: none; "> forgot ? </a>
                          </div>
                    </div>
 
                    <div class="form-group col-12">
                      <button class="btn btn-secondary my-2 my-sm-0 btn-info btn-lg btn-block" name="student_login" type="submit">Sign in</button>
                      
                    </div> 
                    <div class="form-group col-12">
                      <h5>Not registered ?<button class="btn  my-2 my-sm-0 btn-info btn-lg btn-block" data-toggle="modal" data-target="#Signup" data-dismiss="modal" style="background-color:#e76318; "> Sign up</button></h5>
                    </div>           
            </form>
            </div>
      </div>
    </div>
  </div>
</div>


<style>
  #user_name{
    color:white;
    margin-right: 6px;
  }
</style>

