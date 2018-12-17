<?php
         include("configure.php");  

//      if(isset($_POST['submit']))
  $source =  "fbsource";
  // $_POST['source'];
 $EMAIL_CODE =$_POST['Email_code'];
 $MOBILE_CODE =$_POST['Mobile_otp'];


$EntranceExam = $_POST['EntranceExam'];
$EntranceExamScore = $_POST['EntranceExamScore'];
$VerbalExam = $_POST['VerbalExam'];
$VerbalExamScore = $_POST['VerbalExamScore'];
$univname = $_POST['univname'];

$desired_intake_date = $_POST['desired_intake_date'];

          if(empty($_POST["NAME"]))
          {
              $nameErr="Please enter the name";
          }
          else
          {
              $name = test_input($_POST["NAME"]);
              if(!preg_match("/^[a-zA-Z ]*$/", $name))
              {
                  $nameErr="Only alphabet caracters allowed";
              }
          }
 
          
          
          if(empty($_POST["EMAIL"]))
          {
              $emailErr="Please enter the email";
          }
          else
          {
                  $email=test_input($_POST["EMAIL"]);
                  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                  {
                        $emailErr = "Invalid email format";
                  }

            }
      
      
          if(empty($_POST['Mobile_number']))
          {
              $mobErr="Please Enter mobile no";
          }
          else
          {
              $mob=test_input($_POST['Mobile_number']);
              $mob=str_replace("-","",$mob);
    //preg match
              if(!preg_match('/^91[0-9]{10}/',$mob)) 
              {
                  $mobErr="Enter Valid format Eg XXX-XXX-XXXX (10 digits only)";
              }
          }
          
         if(empty($_POST["current_location"]))
          {
              $locationErr="Select your current location";
          }
          else
          {
              $location=test_input($_POST["current_location"]);
          }
          
         if(empty($_POST["expected_country"]))
          {
              $countryErr="Select your country";
          }
          else
          {
              $country=test_input($_POST["expected_country"]);
          }
          
         if(empty($_POST["expected_stream"]))
          {
              $streamErr="Select your stream";
          }
          else
          {
              $stream=test_input($_POST["expected_stream"]);
          }

         if(empty($_POST["desired_program"]))
          {
              $ProgramErr="please select intake";
          }
          else
          {
              $Desired_Program=test_input($_POST["desired_program"]);
          }

         if(empty($_POST["desired_intake_season"]))
          {
              $desired_intake_seasonErr="please select intake";
          }
          else
          {
              $desired_intake_season=test_input($_POST["desired_intake_season"]);
          }

         if(empty($_POST["desired_intake_year"]))
          {
              $desired_intake_yearErr="please select intake";
          }
          else
          {
              $desired_intake_year=test_input($_POST["desired_intake_year"]);
          }


         if(empty($_POST["loan_requirement"]))
          {
              $loan_requirementErr="please select intake";
          }
          else
          {
              $loan_requirement=test_input($_POST["loan_requirement"]);
          }

         if(empty($_POST["loan_amount"]))
          {
              $loan_amountErr="please select intake";
          }
          else
          {
              $loan_amount=test_input($_POST["loan_amount"]);
          }


// echo $name."\n".$email."\n".$mob.$location."\n".$country."\n".$stream."\n".$Desired_Program."\n".$desired_intake_season."\n".$desired_intake_year."\n".$loan_requirement."\n".$loan_amount;

     
// echo "here";
 

              
          if(!empty($name) && !empty($email) && !empty($mob) && !empty($location) && !empty($country) && !empty($stream) && !empty($desired_intake_season) && !empty($Desired_Program) && !empty($desired_intake_year) && !empty($loan_requirement) && !empty($loan_amount) && !empty($EntranceExam) && !empty($EntranceExamScore) && !empty($VerbalExam) && !empty($VerbalExamScore) && !empty($univname) && !empty($desired_intake_date)  && !empty($MOBILE_CODE) && !empty($EMAIL_CODE))
          {
                $sql="SELECT * FROM `university_admission_apply` WHERE `STUDENT_EMAIL`='$email'";
                  $result = $conn->query($sql); 

                  if ($result->num_rows>0)
                  {
                     echo "exists";
                 }
                 else
                 {
                      $show = "SELECT * FROM `otp_data` WHERE `EMAIL_OTP` = '$EMAIL_CODE' AND `OTP` = '$MOBILE_CODE'";
                      $show = $conn->query($show);
                      
                      if ($show->num_rows > 0) 
                      {
                       while($row = $show->fetch_assoc())
                       {
                          if ($MOBILE_CODE == $row['OTP'] && $EMAIL_CODE == $row['EMAIL_OTP']) 
                          {


                                     $insert="INSERT INTO `university_admission_apply` (`STUDENT_NAME`, `STUDENT_EMAIL`, `STUDENT_MOBILE`, `CURRENT_LOCATION`, `EXPECTED_COUNTRY`, `EXPECTED_STREAM`, `DESIRED_PROGRAM`,`UNIVERSITY_REQUIRED`, `INTAKE_DATE` ,`DESIRED_INTAKE_SEASON`, `DESIRED_INTAKE_YEAR`,`ENTRANCE_EXAM`, `ENTRANCE_ExamScore`,`VERBAL_EXAM`, `VERBAL_ExamScore`, `LOAN_REQURED`, `AMOUNT`,`SOURCE`) VALUES ('$name', '$email', '$mob', '$location', '$country', '$stream', '$Desired_Program','$univname' ,'$desired_intake_date','$desired_intake_season', '$desired_intake_year', '$EntranceExam', '$EntranceExamScore', '$VerbalExam', '$VerbalExamScore', '$loan_requirement', '$loan_amount','$source');";
                                         $insert = $conn->query($insert);
                               if($insert == TRUE)
                               {
                                   echo "inserted";
                                     $delete = "DELETE FROM `otp_data` WHERE `EMAIL_OTP` = '$EMAIL_CODE' AND `OTP` = '$MOBILE_CODE'";
                                     $delete = $conn->query($delete);
                               }
                              else
                              {
                                  echo "fail";
                              }

                                    $conn->close();                           
                           }
                        }
                      }else{
                        echo "notmatched";
                      }

                 }

          }
          else{
              echo "empty";
          }

     
        //end of post


      // form-validation
      function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }
      
    ?>
