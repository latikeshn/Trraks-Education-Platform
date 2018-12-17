<?php
include("configure.php");
ini_set('display_errors', '0');
$country=$Stream=$Entrance_Exam=$EntranceScore=$Verbal_Exam=$VerbalScore=""; 
// $evaluate = $_POST['profile'];
// if (isset($evaluate)) {
//   $email = $_POST['Email'];
//   $select = "SELECT * FROM `student_record` WHERE `EMAIL` = '$email'";
//   $select = $conn->query($select);
//   if ($select->num_rows > 0) {
//      $row = mysqli_fetch_array($select,MYSQLI_ASSOC);
//  $country = $row['ExpCountry'];
//  $Stream = $row['ExpStream'];
//  $Entrance_Exam = $row['EntExam'];
// $EntranceScore = $row['EntScore'];
//  $Verbal_Exam = $row['VerExam'];
//  $VerbalScore = $row['VerScore'];     
//   }
// }
//  $country = $_POST['COUNTRY'];
//  $Stream = $_POST['ExpStream'];
//  $Entrance_Exam = $_POST['EntExam'];
// $EntranceScore = $_POST['EntScore'];
//  $Verbal_Exam = $_POST['VerbExam'];
//  $VerbalScore = $_POST['VerbScore'];
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
ini_set('display_errors', '0'); 
$countryErr=$streamErr=$Entrance_ExamErr=$EntranceScoreErr=$Verbal_ExamErr=$VerbalScoreErr="";

if ( $country=="australia") {
  # code...

    if(empty($countryErr) || empty($streamErr) || empty($Verbal_ExamErr) || empty($VerbalScoreErr))
    {

        if($Verbal_Exam === 'IELTS')
        {       
          if ($VerbalScore <=9) 
          {
               $showuni = "SELECT * FROM `$country` WHERE (FIND_IN_SET('MBA', STREAM) OR FIND_IN_SET('MS', STREAM)) AND `IELTS_CUTOFF` <= '$VerbalScore' ORDER BY UNIVERSITY_RANK ASC";
          }
          else
          {
            ini_set('display_errors', '0');
          }               
                }else if($Verbal_Exam === 'TOEFL')
        {     
          if ($VerbalScore <=120) 
          {   
                   $showuni = "SELECT * FROM `$country` WHERE (FIND_IN_SET('MBA', STREAM) OR FIND_IN_SET('MS', STREAM)) AND `TOEFL_CUTOFF` <= '$VerbalScore' ORDER BY UNIVERSITY_RANK ASC";
                   }
                   else
          {
            ini_set('display_errors', '0');
          }
                }else if($Verbal_Exam === 'PTE')
        {    
          if ($VerbalScore <=90)  
            {     
                   $showuni = "SELECT * FROM `$country` WHERE (FIND_IN_SET('MBA', STREAM) OR FIND_IN_SET('MS', STREAM)) AND `PTE_CUTOFF` <= '$VerbalScore' ORDER BY UNIVERSITY_RANK ASC";
                   }
          else
          {
            ini_set('display_errors', '0');
          } 
                }

                $result = $conn->query($showuni);
  }
} else if ( $country=="canada") {

  if(empty($countryErr) || empty($streamErr) || empty($EntranceScoreErr) || empty($Verbal_ExamErr) || empty($VerbalScoreErr))
  {

      if($Stream === 'MBA' && $Verbal_Exam === 'IELTS')
      {
        if($VerbalScore<= 9 && $EntranceScore<=800){
         
         $showuni = "SELECT * FROM `$country` WHERE `IELTS_CUTOFF` <= '$VerbalScore' OR `GMAT_CUTOFF` <= $EntranceScore AND `GMAT_CUTOFF`!=0 ORDER BY UNIVERSITY_RANK ASC";
        }else
          {
            ini_set('display_errors', '0');
          } 

      }else if($Stream=== 'MBA' && $Verbal_Exam === 'PTE')
      {
        if($VerbalScore<=90 && $EntranceScore<=800){
                $showuni = "SELECT * FROM `$country` WHERE `PTE_CUTOFF` <= '$VerbalScore' AND `GMAT_CUTOFF` <= $EntranceScore AND `GMAT_CUTOFF` != 0 ORDER BY UNIVERSITY_RANK ASC";
                }else
          {
            ini_set('display_errors', '0');
          }
      }else if($Stream=== 'MBA' && $Verbal_Exam === 'TOEFL')
      { if($VerbalScore<=120 && $EntranceScore<=800){
         $showuni = "SELECT * FROM `$country` WHERE `TOEFL_CUTOFF` <= '$VerbalScore' AND `GMAT_CUTOFF` <= $EntranceScore AND `GMAT_CUTOFF` != 0 ORDER BY UNIVERSITY_RANK ASC";  
         }else
          {
            ini_set('display_errors', '0');
          }
      }else if($Stream=== 'MS' && $Verbal_Exam === 'IELTS')
      { 
        if($VerbalScore <= 9){
         $showuni = "SELECT * FROM `$country` WHERE `IELTS_CUTOFF` <= '$VerbalScore' ORDER BY UNIVERSITY_RANK ASC"; 
        }else
          {
            ini_set('display_errors', '0');
          }
      }else if($Stream === 'MS' && $Verbal_Exam === 'PTE')
      {

        if($VerbalScore <= 90 && $VerbalScore != 0){
        
         $showuni = "SELECT * FROM `$country` WHERE `PTE_CUTOFF` <= '$VerbalScore' AND `PTE_CUTOFF`!=0 ORDER BY UNIVERSITY_RANK ASC";
         }else
          {
            ini_set('display_errors', '0');
          }

      }else if($Stream=== 'MS' && $Verbal_Exam === 'TOEFL')
      { if($VerbalScore <= 120){
         $showuni = "SELECT * FROM `$country` WHERE `TOEFL_CUTOFF` <= '$VerbalScore' AND `TOEFL_CUTOFF` != 0 ORDER BY UNIVERSITY_RANK ASC";
         }else
          {
            ini_set('display_errors', '0');
          }
      }
      $result = $conn->query($showuni);

// selecting from canada table ends
//selecting from usa table starts
  }
  }else if ( $country=="usa") {

   if(empty($countryErr) || empty($streamErr) || empty($EntranceScoreErr) || empty($Verbal_ExamErr) || empty($VerbalScoreErr))
  { 
        if ($Stream === 'MBA')
         {  if($EntranceScore <= 800){
         
           $showuni = "SELECT * FROM `$country` WHERE `GMAT_CUTOFF` <= '$EntranceScore' AND `GMAT_CUTOFF` != 0 ORDER BY UNIVERSITY_RANK ASC";
         }else{
          ini_set('display_errors', '0');
         }
        }else if($Verbal_Exam === 'IELTS' && $Stream === 'MS')
        { if($EntranceScore<=340 && $VerbalScore<=9){

           $showuni = "SELECT * FROM `$country` WHERE `GRE_CUTOFF` <= '$EntranceScore' AND `GRE_CUTOFF` != 0 AND `IELTS_CUTOFF` <= '$VerbalScore' AND `IELTS_CUTOFF` != 0 ORDER BY UNIVERSITY_RANK ASC";
          }else{
            ini_set('display_errors', '0');
          }
        }
        else if($Verbal_Exam === 'TOEFL' && $Stream === 'MS')
        { if($EntranceScore<=340 && $VerbalScore<=120){
           $showuni = "SELECT * FROM `$country` WHERE `GRE_CUTOFF` <= '$EntranceScore' AND `GRE_CUTOFF` != 0 AND `TOEFL_CUTOFF` <= '$VerbalScore' AND `TOEFL_CUTOFF` != 0 ORDER BY UNIVERSITY_RANK ASC";
           }else{
            ini_set('display_errors', '0');
          }
        } 
        $result = $conn->query($showuni);
  }
}

        if ($result->num_rows > 0) 
        {
		         $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
		          echo json_encode($row);
		  }
		  else{
      				
      		  	     echo "false";
      		} 

// student marks information into the table



 ?>