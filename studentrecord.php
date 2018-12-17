<?php
include("configure.php");
	
	$EMAIL = $_POST['Email'];
	$select = "SELECT * FROM `register_user` WHERE `Email` = '$EMAIL'";
	$select = $conn->query($select);
	if ($select->num_rows > 0) 
	{

		  while($row = $select->fetch_assoc())
		  {
		     $NAME = $row['Full_Name'];
		     $EMAIL = $row['Email'];
		     $MOBILE = $row['Mo_No'];
		     $LOCATION = $row['Current_Location'];

			}
	}
	 	
     $CurrentDegree = $_POST['CurrentDegree'];
     $CurrentMajor = $_POST['CurrentMajor'];
     $AttendedUniversity = $_POST['AttendedUniversity'];
     $PassingYear = $_POST['PassingYear'];
     $Percentage = $_POST['Percentage'];
     $CGPAScore = $_POST['CGPAScore'];  
     $NoOfBacklogs = $_POST['NoOfBacklogs'];
     $YearsOfExperience = $_POST['YearsOfExperience'];
     $ExperienceLetter = $_POST['ExperienceLetter'];
     $ExperienceON = $_POST['ExperienceON'];
     $LoanAmount = $_POST['LoanAmount'];
     $RequiredBenificial = $_POST['RequiredBenificial'];
     $AdmitionPlanning = $_POST['AdmitionPlanning'];
     $DreamUniversity = $_POST['DreamUniversity'];

if (!empty($CurrentDegree) && !empty($CurrentMajor) && !empty($AttendedUniversity) && !empty($PassingYear) && !empty($Percentage) && !empty($CGPAScore) && !empty($NoOfBacklogs) && !empty($YearsOfExperience) && !empty($ExperienceLetter) && !empty($ExperienceON) && !empty($LoanAmount) && !empty($RequiredBenificial) && !empty($AdmitionPlanning) && !empty($DreamUniversity))
{

		$check = "SELECT `STUDENT_EMAIL`,`STUDENT_CONTACT` FROM `student_information` WHERE `STUDENT_EMAIL`='$EMAIL'"; // checking if already exists in database...
		$check = $conn->query($check);
		if ($check->num_rows > 0) //if exists the update the values .... insetead of adding again..
		{	
				// echo $ExperienceLetter;
			// echo "here";
			$updatrecord = "UPDATE `student_information` SET `STUDENT_NAME` = '$NAME', `STUDENT_EMAIL` = '$EMAIL', `STUDENT_CONTACT` = '$MOBILE', `CURRENT_DEGREE` = '$CurrentDegree', `CURRENT_MAJOR` = '$CurrentMajor', `ATTENDED_UNIVERSITY` = '$AttendedUniversity', `PASSING_YEAR` = '$PassingYear', `PERCENTAGE` = '$Percentage', `GPA` = '$CGPAScore', `BACKLOGS_COUNT` = '$NoOfBacklogs', `WORK_EXPERIENCE_COUNT` = '$YearsOfExperience', `EXPERIENCE_LETTER` = '$ExperienceLetter', `WORKED_ON` = '$ExperienceON', `LOAN_AMOUNT_REQUIRED` = '$LoanAmount', `REQUIRED_BENIFICIAL` = '$RequiredBenificial', `PLANNING_FOR` = '$AdmitionPlanning', `DREAM_UNIVERSITY` = '$DreamUniversity' WHERE `STUDENT_EMAIL` = '$EMAIL'"; 
			// echo var_dump($updatrecord);
			$updatrecord = $conn->query($updatrecord);

		   $search = "SELECT * FROM `student_profile` WHERE `student_email` = '$EMAIL' ";
           $search = $conn->query($search);

           if ($search->num_rows > 0) {
                        $updateprofile = "UPDATE `student_profile` SET `current_degree` = '$CurrentDegree', `current_major` = '$CurrentMajor', `attended_university` = '$AttendedUniversity', `passing_year` = '$PassingYear', `percentage` = '$Percentage', `gpa` = '$CGPAScore', `backlogs_count` = '$NoOfBacklogs', `work_experience` = '$YearsOfExperience', `work_exp_letter`='$ExperienceLetter' ,`workedon_tech` = '$ExperienceON', `loan_amount` = '$LoanAmount', `required_beneficial` = '$RequiredBenificial', `planning_for` = '$AdmitionPlanning', `dream_university` = '$DreamUniversity' WHERE `student_profile`.`student_email` = '$EMAIL' ";
          				 $result = $conn->query($updateprofile);
           }
           else{
            
		           $insertprofile = "INSERT INTO `student_profile` (`student_name`, `student_email`, `student_contact`, `current_location`, `current_degree`, `current_major`, `attended_university`, `passing_year`, `percentage`, `gpa`, `backlogs_count`, `work_experience`, `work_exp_letter`, `workedon_tech`, `loan_amount`, `required_beneficial`, `planning_for`, `dream_university`) VALUES ('$NAME', '$EMAIL', '$MOBILE', '$LOCATION', '$CurrentDegree', '$CurrentMajor', '$AttendedUniversity', '$PassingYear', '$Percentage', '$CGPAScore', '$NoOfBacklogs', '$YearsOfExperience', '$ExperienceLetter', '$ExperienceON', '$LoanAmount', '$RequiredBenificial', '$AdmitionPlanning', '$DreamUniversity')";
		           // echo var_dump($insertprofile);
		           $result = $conn->query($insertprofile);
           }
			
			if ($updatrecord === TRUE) 
			{
				echo "updated";
			}else{
				echo "fail";
			}
		}
		else   // if not exists in database already then insert new record in database....
		{
			$insert = "INSERT INTO `student_information` (`STUDENT_NAME`,`STUDENT_EMAIL`, `STUDENT_CONTACT`, `CURRENT_DEGREE`, `CURRENT_MAJOR`, `ATTENDED_UNIVERSITY`, `PASSING_YEAR`, `PERCENTAGE`, `GPA`, `BACKLOGS_COUNT`, `WORK_EXPERIENCE_COUNT`, `EXPERIENCE_LETTER`, `WORKED_ON`, `LOAN_AMOUNT_REQUIRED`, `REQUIRED_BENIFICIAL`, `PLANNING_FOR`, `DREAM_UNIVERSITY`) VALUES ('$NAME','$EMAIL','$MOBILE','$CurrentDegree', '$CurrentMajor', '$AttendedUniversity', '$PassingYear', '$Percentage', '$CGPAScore', '$NoOfBacklogs', '$YearsOfExperience', '$ExperienceLetter', '$ExperienceON', '$LoanAmount', '$RequiredBenificial', '$AdmitionPlanning', '$DreamUniversity')";

			$result = $conn->query($insert);

		   $search = "SELECT * FROM `student_profile` WHERE `student_email` = '$EMAIL' ";
           $search = $conn->query($search);

           if ($search->num_rows > 0) {
                        $updateprofile = "UPDATE `student_profile` SET `current_degree` = '$CurrentDegree', `current_major` = '$CurrentMajor', `attended_university` = '$AttendedUniversity', `passing_year` = '$PassingYear', `percentage` = '$Percentage', `gpa` = '$CGPAScore', `backlogs_count` = '$NoOfBacklogs', `work_experience` = '$YearsOfExperience', `work_exp_letter`='$ExperienceLetter' ,`workedon_tech` = '$ExperienceON', `loan_amount` = '$LoanAmount', `required_beneficial` = '$RequiredBenificial', `planning_for` = '$AdmitionPlanning', `dream_university` = '$DreamUniversity' WHERE `student_profile`.`student_email` = '$EMAIL' ";
          				 $result = $conn->query($updateprofile);
           }
           else{
            
		           $insertprofile = "INSERT INTO `student_profile` (`student_name`, `student_email`, `student_contact`, `current_location`, `current_degree`, `current_major`, `attended_university`, `passing_year`, `percentage`, `gpa`, `backlogs_count`, `work_experience`, `work_exp_letter`, `workedon_tech`, `loan_amount`, `required_beneficial`, `planning_for`, `dream_university`) VALUES ('$NAME', '$EMAIL', '$MOBILE', '$LOCATION', '$CurrentDegree', '$CurrentMajor', '$AttendedUniversity', '$PassingYear', '$Percentage', '$CGPAScore', '$NoOfBacklogs', '$YearsOfExperience', '$ExperienceLetter', '$ExperienceON', '$LoanAmount', '$RequiredBenificial', '$AdmitionPlanning', '$DreamUniversity')";
		           // echo var_dump($insertprofile);
		           $result = $conn->query($insertprofile);
           }

			if ($result === TRUE) 
			{
				echo "inserted";
			}else{
				echo "fail";
			}

		}
}
else{
	echo "<script>window.location.href='universities.php';</script>";
}

?>