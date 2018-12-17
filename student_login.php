<?php 
 session_start();
include("configure.php");
$Student_Email=$student_Password= "";

if (isset($_POST['student_login'])) 
{
	$Student_Email = $_POST['login_mail'];
	$student_Password = $_POST['login_password'];

	if (!empty($Student_Email) && !empty($student_Password))
	 {
				$select = "SELECT * FROM `register_user` WHERE `Email` = '$Student_Email'";
				 // echo $select;
				$select = $conn->query($select);

				if ($select->num_rows > 0) 
				{

					$row = $select->fetch_assoc();
 // $student_Password == $row['Password']
                    if(password_verify($student_Password,$row['Password']))
                    {
                       $_SESSION['USER_NAME']=$row['USER_NAME'];
                        $_SESSION['Full_Name']=$row['Full_Name'];
                        $_SESSION['Mo_No']=$row['Mo_No'];
                        $_SESSION['Email']=$row['Email'];
                        $_SESSION['Current_Location']=$row['Current_Location'];
                        // echo "You are successfully logged in";
                        echo ("<script type='text/javascript'>window.location.href='index.php';</script>");

			                    // if($_POST["RememberMe"]=='1' || $_POST["RememberMe"]=='on')
			                    // {
			                    // $hour = time() + 3600 * 24 * 30;
			                    // $remove = time() - 3600;
			                    // setcookie('username', $Student_Email, $hour);
			                    //      setcookie('password', $student_Password, $hour);
			                    // }else
			                    // {

			                    //      setcookie('username', '' , $remove);
			                    //      setcookie('password', '' , $removec);
			                    // }
                    }
                    else
                    {
                         
                     echo $successalert = "You Entered wrong password";
             		  echo ("<script type='text/javascript'>window.alert('$successalert');window.location.href='index.php';</script>");

                    } 
				}else
				{
					$successalert = "Please register your self before login";
					echo ("<script type='text/javascript'>window.alert('$successalert');window.location.href='index.php';</script>");
				}

	 }	
}else{
 echo "<script>alert('You are not autherised person to access this page');window.location.href='index.php';</script>";
 }
 ?>
