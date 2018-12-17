<?php 
include("configure.php");

ini_set('display_errors', '0'); 

$country=$Stream=$Entrance_Exam=$EntranceScore=$Verbal_Exam=$VerbalScore=""; 
//  $country = $_POST['COUNTRY'];
$countryErr=$streamErr=$Entrance_ExamErr=$EntranceScoreErr=$Verbal_ExamErr=$VerbalScoreErr="";
if ($_POST["COUNTRY"] == '') 
    {
      $countryErr = "you forgot to select country";
    } 
    else
    {
      $country =$_POST['COUNTRY'];
    // check name only contains letters and whitespace
    }

    if ($_POST["ExpStream"] == '') 
    {
      $streamErr = "you forgot to select country";
    } 
    else
    {
     $Stream =$_POST['ExpStream'];
    // check name only contains letters and whitespace
    }

  if ($_POST["EntExam"] == '') 
    {
      $Entrance_ExamErr = "you forgot to select country";
    } 
    else
    {
     $Entrance_Exam =$_POST['EntExam'];
    // check name only contains letters and whitespace
    }

  if ($_POST["EntScore"] == '') 
    {
      $EntranceScoreErr = "you forgot to select country";
    } 
    else
    {
       $EntranceScore = $_POST['EntScore'];
    // check name only contains letters and whitespace
    } 

  if ($_POST["VerbExam"] == '') 
    {
      $Verbal_ExamErr = "you forgot to select country";
    } 
    else
    {
      $Verbal_Exam =$_POST['VerbExam'];
    // check name only contains letters and whitespace
    }       

  if ($_POST["VerbScore"] == '') 
    {
      $VerbalScoreErr = "you forgot to select country";
    } 
    else
    {
      $VerbalScore = $_POST['VerbScore'];
    // check name only contains letters and whitespace
    } 
$MobileNumber = $_POST['MobileNumber'];

if (!empty($country) && !empty($Stream)) {
 $EMAIL = $_POST['EMAIL'];
$select = "SELECT * FROM `register_user` WHERE `Email` = '$EMAIL' or `Mo_No` = '$MobileNumber'";
$select = $conn->query($select);
if ($select->num_rows > 0) 
{

  while($row = $select->fetch_assoc())
  {
     $NAME = $row['Full_Name'];
     $EMAIL = $row['Email'];
     $MOBILE = $row['Mo_No'];
     $LOCATION = $row['Current_Location'];


if (empty($Entrance_Exam)) {
  $Entrance_Exam ='-';
}
if (empty($Verbal_Exam)) {
  $Verbal_Exam = '-';
}

if ($country == 'canada' && $Stream == 'MBA') {
  $Entrance_Exam = 'GMAT';
}else if($country == 'usa' && $Stream == 'MBA'){
  $Entrance_Exam = 'GMAT';
}else if($country == 'usa' && $Stream == 'MS'){
  $Entrance_Exam = 'GRE';
}
     $check = "SELECT * FROM `student_record` WHERE `EMAIL` = '$EMAIL'";
     $check= $conn->query($check);
     
     if ($check->num_rows > 0) {
     
           $update ="UPDATE `student_record` SET `ExpCountry` = '$country', `ExpStream` = '$Stream', `EntExam` = '$Entrance_Exam', `EntScore` = '$EntranceScore', `VerExam` = '$Verbal_Exam', `VerScore` = '$VerbalScore' WHERE `student_record`.`EMAIL` = '$EMAIL';";

           $search = "SELECT * FROM `student_profile` WHERE `student_email` = '$EMAIL' ";
           $search = $conn->query($search);
           if ($search->num_rows > 0) {
                        $updateprofile = "UPDATE `student_profile` SET `exp_country` = '$country', `exp_stream` = '$Stream', `entrance_exam` = '$Entrance_Exam', `entrance_examscore` = '$EntranceScore', `verbal_exam` = '$Verbal_Exam', `verbal_examscore` = '$VerbalScore' WHERE `student_profile`.`student_email` = '$EMAIL';";
           $result = $conn->query($updateprofile);
           }
           else{
            
           $insertprofile = "INSERT INTO `student_profile` (`student_name`, `student_email`, `student_contact`, `current_location`, `exp_country`, `exp_stream`, `entrance_exam`, `entrance_examscore`, `verbal_exam`, `verbal_examscore`) VALUES ('$NAME', '$EMAIL', '$MOBILE', '$LOCATION', '$country', '$Stream', '$EnrExam', '$EntranceScore', '$Verbal_Exam', '$VerbalScore');";
           // echo var_dump($insertprofile);
           $result = $conn->query($insertprofile);
           }

           $update=$conn->query($update);
           if ($update === TRUE) {
              echo "updated";
           }else{
             echo "fail";
           }
     }else{
              $insert = "INSERT INTO `student_record` (`NAME`, `EMAIL`, `MOBILE`, `LOCATION`, `ExpCountry`, `ExpStream`, `EntExam`, `EntScore`, `VerExam`, `VerScore`) VALUES ('$NAME', '$EMAIL', '$MOBILE', '$LOCATION', '$country', '$Stream', '$Entrance_Exam', '$EntranceScore', '$Verbal_Exam', '$VerbalScore')";


           $search = "SELECT * FROM `student_profile` WHERE `student_email` = '$EMAIL' ";
           $search = $conn->query($search);
           if ($search->num_rows > 0) {
                        $updateprofile = "UPDATE `student_profile` SET `exp_country` = '$country', `exp_stream` = '$Stream', `entrance_exam` = '$Entrance_Exam', `entrance_examscore` = '$EntranceScore', `verbal_exam` = '$Verbal_Exam', `verbal_examscore` = '$VerbalScore' WHERE `student_profile`.`student_email` = '$EMAIL';";
           $result = $conn->query($updateprofile);
           }
           else{
            
           $insertprofile = "INSERT INTO `student_profile` (`student_name`, `student_email`, `student_contact`, `current_location`, `exp_country`, `exp_stream`, `entrance_exam`, `entrance_examscore`, `verbal_exam`, `verbal_examscore`) VALUES ('$NAME', '$EMAIL', '$MOBILE', '$LOCATION', '$country', '$Stream', '$EnrExam', '$EntranceScore', '$Verbal_Exam', '$VerbalScore');";
           // echo var_dump($insertprofile);
           $result = $conn->query($insertprofile);
           }

           
               $insert= $conn->query($insert);
               if ($insert === TRUE) {
                 # code...
                 echo "inserted";
               }
               else{
                 echo "fail";
               }
     }

  }

}
}else{
  echo "<script>window.location.href='index.php';</script>";
}


 ?>