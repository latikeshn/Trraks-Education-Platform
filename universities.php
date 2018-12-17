<?php

include("header.php");

ini_set('display_errors', '0');
 


if (isset($USER_LOGGED_IN)) {

require "configure.php";
$country=$Stream=$Entrance_Exam=$EntranceScore=$Verbal_Exam=$Verb_Score="";

$countryErr=$streamErr=$Entrance_ExamErr=$EntranceScoreErr=$Verbal_ExamErr=$VerbalScoreErr="";

if (isset($_GET['EVALUATE'])) 
{    
    $_SESSION['country']= $_GET["Country"];
    $_SESSION['stream']=$_GET["Stream"];
    $_SESSION['EntExam']= $_GET["Entrance_Exam"];
    $_SESSION['EntExamScr']= $_GET["EntranceScore"];
    $_SESSION['VerExam']=$_GET["Verbal_Exam"];
    $_SESSION['VerExamScr']= $_GET["VerbalScore"];  

}
 ini_set('display_errors', '0');
?>

<div class="container"> 
<div class="row p-2">
  <div class="col-md-7" id="shortlisted-university">
    <div class="md-12 mb-2">          
        <button type="button" id="ModalForm" class="btn col-md-12 btn-lg animated infinite pulse" data-toggle="modal" data-target="#admissionform" data-whatever="@mdo" style="background-color: #00193f; color: white;">Proceed with Admission <i class="far fa-hand-point-left"></i></button>        
    </div>
<!-- modificatio search div -->
    <!-- div of ajax and json generated universities shortlisted are here.... -->
                <div class="card" id="notevaluate">
                    <div class="card-body">
                        <div class="media row">
                        <div class="col-md-12 col-sm-12 text-center" style="color: red;"><p>Evaluate your Profile first using free evaluation tool</p>
                        </div>
                        </div>
                    </div>
                </div>
  </div>


   <?php 
 $email = $_SESSION['Email'];
 $select = "SELECT * FROM `student_information` WHERE `STUDENT_EMAIL` = '$email'";
 $select = $conn->query($select);
 if ($select->num_rows > 0 ) 
 {

     $row = mysqli_fetch_array($select,MYSQLI_ASSOC);
     
 }
  ?>  
  <div class="col-md-5">
 <!--    <div class="card col-md-12 col-sm-12 mb-2 ">
        <img src="img/nomadcredits.png" alt="Nomad Credits">
    </div> -->
    <form class="needs-validation" id="StudentRecord" method="POST" novalidate>
    <div class="card">
            <div class="card-body">
                    <h2 class="text-center"><i class="fas fa-university"></i>Fill out the fields to explore more about universities</h2>
                    <h5 class="card-title"><i class="fas fa-graduation-cap"></i> Current Education</h5>
                    <p class="card-text"></p>
              <div class="form-row">
                <div class="col-md-6 mb-3 col-sm-6">
                  <label for="CurrentDegree">Current Degree</label>
                  
                  <select id="CurrentDegree" name="CurrentDegree" class="form-control">
                    <option value="" >Choose...</option>s
                    <option value="BE" <?php if($row['CURRENT_DEGREE'] == "BE") echo 'selected="selected"'; ?>>BE</option>
                    <option value="B.Sc" <?php if($row['CURRENT_DEGREE'] == "B.Sc") echo 'selected="selected"'; ?>>B.Sc</option>
                    <option value="B.Tech" <?php if($row['CURRENT_DEGREE'] == "B.Tech") echo 'selected="selected"'; ?>>B.Tech</option>
                    <option value="MBA" <?php if($row['CURRENT_DEGREE'] == "MBA") echo 'selected="selected"'; ?>>MBA</option>
                    <option value="MCA" <?php if($row['CURRENT_DEGREE'] == "MCA") echo 'selected="selected"'; ?>>MCA</option>
                    <option value="ME" <?php if($row['CURRENT_DEGREE'] == "ME") echo 'selected="selected"'; ?>>ME</option>
                    <option value="M.Sc" <?php if($row['CURRENT_DEGREE'] == "M.Sc") echo 'selected="selected"'; ?>>M.Sc</option>
                    <option value="M.Tech" <?php if($row['CURRENT_DEGREE'] == "M.Tech") echo 'selected="selected"'; ?>>M.Tech</option>
                    <option value="Other UG/PG" <?php if($row['CURRENT_DEGREE'] == "Other UG/PG") echo 'selected="selected"'; ?>>Other UG/PG</option>
                  </select>
                  
                </div>
                <div class="col-md-6 mb-3 col-sm-6">
                  <label for="CurrentMajor">Current Major</label>
                  <select id="CurrentMajor" name="CurrentMajor" class="form-control">
                    <option value="">Choose...</option>
                    <option value="Aeronotical" <?php if($row['CURRENT_MAJOR'] == "Aeronotical") echo 'selected="selected"'; ?>  >Aeronotical</option>
                    <option value="Agriculture"  <?php if($row['CURRENT_MAJOR'] == "Agriculture") echo 'selected="selected"'; ?>  >Agriculture</option>
                    <option value="AIE" <?php if($row['CURRENT_MAJOR'] == "AIE") echo 'selected="selected"'; ?> >AIE</option>
                    <option value="Automobile" <?php if($row['CURRENT_MAJOR'] == "Automobile") echo 'selected="selected"'; ?> >Automobile</option>
                    <option value="BioChemical" <?php if($row['CURRENT_MAJOR'] == "BioChemical") echo 'selected="selected"'; ?> >BioChemical</option>
                    <option value="BioInformatics" <?php if($row['CURRENT_MAJOR'] == "BioInformatics") echo 'selected="selected"'; ?> >BioInformatics</option>
                    <option value="BioMedical" <?php if($row['CURRENT_MAJOR'] == "BioMedical") echo 'selected="selected"'; ?> >BioMedical</option>
                    <option value="BioTechnology" <?php if($row['CURRENT_MAJOR'] == "BioTechnology") echo 'selected="selected"'; ?> >BioTechnology</option>
                    <option value="Chemical" <?php if($row['CURRENT_MAJOR'] == "Chemical") echo 'selected="selected"'; ?> >Chemical</option>
                    <option value="Civil" <?php if($row['CURRENT_MAJOR'] == "Civil") echo 'selected="selected"'; ?> >Civil</option>
                    <option value="CSE" <?php if($row['CURRENT_MAJOR'] == "CSE") echo 'selected="selected"'; ?> >CSE</option>
                    <option value="ECE" <?php if($row['CURRENT_MAJOR'] == "ECE") echo 'selected="selected"'; ?> >ECE</option>
                    <option value="EEE" <?php if($row['CURRENT_MAJOR'] == "EEE") echo 'selected="selected"'; ?> >EEE</option>
                    <option value="EIE" <?php if($row['CURRENT_MAJOR'] == "EIE") echo 'selected="selected"'; ?> >EIE</option>
                    <option value="EnergyTechnology" <?php if($row['CURRENT_MAJOR'] == "EnergyTechnology") echo 'selected="selected"'; ?> >EnergyTechnology</option>
                    <option value="Environmental" <?php if($row['CURRENT_MAJOR'] == "Environmental") echo 'selected="selected"'; ?> >Environmental</option>
                    <option value="FireSafety" <?php if($row['CURRENT_MAJOR'] == "FireSafety") echo 'selected="selected"'; ?> >FireSafety</option>
                    <option value="FoodTechology" <?php if($row['CURRENT_MAJOR'] == "FoodTechology") echo 'selected="selected"'; ?> >FoodTechology</option>
                    <option value="Genetic" <?php if($row['CURRENT_MAJOR'] == "Genetic") echo 'selected="selected"'; ?> >Genetic</option>
                    <option value="GeoInformatics" <?php if($row['CURRENT_MAJOR'] == "GeoInformatics") echo 'selected="selected"'; ?> >GeoInformatics</option>
                    <option value="GeoScience" <?php if($row['CURRENT_MAJOR'] == "GeoScience") echo 'selected="selected"'; ?> >GeoScience</option>
                    <option value="IndustrailEngg" <?php if($row['CURRENT_MAJOR'] == "IndustrailEngg") echo 'selected="selected"'; ?> >IndustrailEngg</option>
                    <option value="IndustrialProduction" <?php if($row['CURRENT_MAJOR'] == "IndustrialProduction") echo 'selected="selected"'; ?> >IndustrialProduction</option>
                    <option value="InstrumentaionControl" <?php if($row['CURRENT_MAJOR'] == "InstrumentaionControl") echo 'selected="selected"'; ?> >InstrumentaionControl</option>
                    <option value="IT" <?php if($row['CURRENT_MAJOR'] == "IT") echo 'selected="selected"'; ?> >IT</option>
                    <option value="Leather" <?php if($row['CURRENT_MAJOR'] == "Leather") echo 'selected="selected"'; ?> >Leather</option>
                    <option value="ManMadFiber" <?php if($row['CURRENT_MAJOR'] == "ManMadFiber") echo 'selected="selected"'; ?> >ManMadFiber</option>
                    <option value="Manufacturing" <?php if($row['CURRENT_MAJOR'] == "Manufacturing") echo 'selected="selected"'; ?> >Manufacturing</option>
                    <option value="Marine" <?php if($row['CURRENT_MAJOR'] == "Marine") echo 'selected="selected"'; ?> >Marine</option>
                    <option value="MaterialScience" <?php if($row['CURRENT_MAJOR'] == "MaterialScience") echo 'selected="selected"'; ?> >MaterialScience</option>
                    <option value="Mechanical" <?php if($row['CURRENT_MAJOR'] == "Mechanical") echo 'selected="selected"'; ?> >Mechanical</option>
                    <option value="Mechatronics" <?php if($row['CURRENT_MAJOR'] == "Mechatronics") echo 'selected="selected"'; ?> >Mechatronics</option>
                    <option value="Metallurgical" <?php if($row['CURRENT_MAJOR'] == "Metallurgical") echo 'selected="selected"'; ?> >Metallurgical</option>
                    <option value="Mining" <?php if($row['CURRENT_MAJOR'] == "Mining") echo 'selected="selected"'; ?> >Mining</option>
                    <option value="OceanEngineering" <?php if($row['CURRENT_MAJOR'] == "OceanEngineering") echo 'selected="selected"'; ?> >OceanEngineering</option>
                    <option value="ProductionEngineering" <?php if($row['CURRENT_MAJOR'] == "ProductionEngineering") echo 'selected="selected"'; ?> >ProductionEngineering</option>
                    <option value="ProductionIndustrial" <?php if($row['CURRENT_MAJOR'] == "ProductionIndustrial") echo 'selected="selected"'; ?> >ProductionIndustrial</option>
                    <option value="Textile" <?php if($row['CURRENT_MAJOR'] == "Textile") echo 'selected="selected"'; ?> >Textile</option>
                    <option value="Other" <?php if($row['CURRENT_MAJOR'] == "Other") echo 'selected="selected"'; ?> >Other</option>	
                  </select>
                  
                  </div>
                
                <div class="col-md-12 mb-3">
                  <label for="AttendedUniversity">Attended College/University</label>
                  <select id="AttendedUniversity" name="AttendedUniversity" class="form-control">
                    <option value="" >Select university</option>
                    <option value="IIT-Madras" <?php if($row['ATTENDED_UNIVERSITY'] == "IIT-Madras") echo 'selected="selected"'; ?> >IIT Madras </option>
                    <option value="IIT-Bombay" <?php if($row['ATTENDED_UNIVERSITY'] == "IIT-Bombay") echo 'selected="selected"'; ?> >IIT Bombay </option>
                    <option value="IIT-Kharagpur" <?php if($row['ATTENDED_UNIVERSITY'] == "IIT-Kharagpur") echo 'selected="selected"'; ?> >IIT Kharagpur </option>
                    <option value="IIT-Delhi" <?php if($row['ATTENDED_UNIVERSITY'] == "IIT-Delhi") echo 'selected="selected"'; ?> >IIT Delhi </option>
                    <option value="IIT-Kanpur" <?php if($row['ATTENDED_UNIVERSITY'] == "IIT-Kanpur") echo 'selected="selected"'; ?> >IIT Kanpur </option>
                    <option value="IIT-Roorkee" <?php if($row['ATTENDED_UNIVERSITY'] == "IIT-Roorkee") echo 'selected="selected"'; ?> >IIT Roorkee </option>
                    <option value="IIT-Guwahati" <?php if($row['ATTENDED_UNIVERSITY'] == "IIT-Guwahati") echo 'selected="selected"'; ?> >IIT Guwahati </option>
                    <option value="Anna_University_Chennai" <?php if($row['ATTENDED_UNIVERSITY'] == "Anna_University_Chennai") echo 'selected="selected"'; ?> >Anna University, Chennai </option>
                    <option value="Jadavpur University" <?php if($row['ATTENDED_UNIVERSITY'] == "Jadavpur University") echo 'selected="selected"'; ?> >Jadavpur University </option>
                    <option value="IIT-Hyderabad" <?php if($row['ATTENDED_UNIVERSITY'] == "IIT-Hyderabad") echo 'selected="selected"'; ?> >IIT Hyderabad </option>
                    <option value="NIT-Tiruchirappalli" <?php if($row['ATTENDED_UNIVERSITY'] == "NIT-Tiruchirappalli") echo 'selected="selected"'; ?> >NIT Tiruchirappalli </option>
                    <option value="NIT-Rourkela" <?php if($row['ATTENDED_UNIVERSITY'] == "NIT-Rourkela") echo 'selected="selected"'; ?> >NIT Rourkela </option>
                    <option value="VIT-Vellore" <?php if($row['ATTENDED_UNIVERSITY'] == "VIT-Vellore") echo 'selected="selected"'; ?> >VIT, Vellore </option>
                    <option value="Institute of Chemical Tech., Mumbai" <?php if($row['ATTENDED_UNIVERSITY'] == "Institute of Chemical Tech., Mumbai") echo 'selected="selected"'; ?> >Institute of Chemical Tech., Mumbai </option>
                    <option value="IIT-Indore" <?php if($row['ATTENDED_UNIVERSITY'] == "IIT-Indore") echo 'selected="selected"'; ?> >IIT Indore </option>
                    <option value="BITS Pilani" <?php if($row['ATTENDED_UNIVERSITY'] == "BITS Pilani") echo 'selected="selected"'; ?> >BITS Pilani </option>
                    <option value="Indian Institute of Engg., Sci. and Tech., Shibpur" <?php if($row['ATTENDED_UNIVERSITY'] == "Indian Institute of Engg., Sci. and Tech., Shibpur") echo 'selected="selected"'; ?> >Indian Institute of Engg., Sci. and Tech., Shibpur </option>
                    <option value="IIT-Bhubaneswar" <?php if($row['ATTENDED_UNIVERSITY'] == "IIT-Bhubaneswar") echo 'selected="selected"'; ?> >IIT Bhubaneswar </option>
                    <option value="IIT-Patna" <?php if($row['ATTENDED_UNIVERSITY'] == "IIT-Patna") echo 'selected="selected"'; ?> >IIT Patna </option>
                    <option value="Jamia Millia Islamia" <?php if($row['ATTENDED_UNIVERSITY'] == "Jamia Millia Islamia") echo 'selected="selected"'; ?> >Jamia Millia Islamia </option>
                    <option value="IIT-Ropar" <?php if($row['ATTENDED_UNIVERSITY'] == "IIT-Ropar") echo 'selected="selected"'; ?> >IIT Ropar </option>
                    <option value="NIT-Surathkal" <?php if($row['ATTENDED_UNIVERSITY'] == "NIT-Surathkal") echo 'selected="selected"'; ?> >NIT Surathkal </option>
                    <option value="ISM Dhanbad" <?php if($row['ATTENDED_UNIVERSITY'] == "ISM Dhanbad") echo 'selected="selected"'; ?> >ISM Dhanbad </option>
                    <option value="College of Engineering, Pune" <?php if($row['ATTENDED_UNIVERSITY'] == "College of Engineering, Pune") echo 'selected="selected"'; ?> >College of Engineering, Pune </option>
                    <option value="Shanmugha Arts,Science,Tech & Research Academy, Thanjavur" <?php if($row['ATTENDED_UNIVERSITY'] == "Shanmugha Arts,Science,Tech & Research Academy, Thanjavur") echo 'selected="selected"'; ?> >Shanmugha Arts,Sci.,Tech. & Research Academy, Thanjavur </option>
                    <option value="Thapar University, Patiala" <?php if($row['ATTENDED_UNIVERSITY'] == "Thapar University, Patiala") echo 'selected="selected"'; ?> >Thapar University, Patiala </option>
                    <option value="Sri Sivasubramaniya Nadar College of Engg, Kalavakkam" <?php if($row['ATTENDED_UNIVERSITY'] == "Sri Sivasubramaniya Nadar College of Engg, Kalavakkam") echo 'selected="selected"'; ?> >Sri Sivasubramaniya Nadar College of Engg, Kalavakkam</option>
                    <option value="Indian Institute of Space,Sci. & Tech.,Thiruvananthapuram" <?php if($row['ATTENDED_UNIVERSITY'] == "Indian Institute of Space,Sci. & Tech.,Thiruvananthapuram") echo 'selected="selected"'; ?> >Indian Institute of Space,Sci. & Tech.,Thiruvananthapuram </option>
                    <option value="IIT-Mandi" <?php if($row['ATTENDED_UNIVERSITY'] == "IIT-Mandi") echo 'selected="selected"'; ?> >IIT Mandi </option>
                    <option value="IIT-Gandhinagar" <?php if($row['ATTENDED_UNIVERSITY'] == "IIT-Gandhinagar") echo 'selected="selected"'; ?> >IIT Gandhinagar </option>
                    <option value="IIT-Varanasi" <?php if($row['ATTENDED_UNIVERSITY'] == "IIT-Varanasi") echo 'selected="selected"'; ?> >IIT Varanasi </option>
                    <option value="Birla Institute of Tech., Ranchi" <?php if($row['ATTENDED_UNIVERSITY'] == "Birla Institute of Tech., Ranchi") echo 'selected="selected"'; ?> >Birla Institute of Tech., Ranchi </option>
                    <option value="PSG College of Techn., Coimbatore" <?php if($row['ATTENDED_UNIVERSITY'] == "PSG College of Techn., Coimbatore") echo 'selected="selected"'; ?> >PSG College of Techn., Coimbatore </option>
                    <option value="NIT Warangal" <?php if($row['ATTENDED_UNIVERSITY'] == "NIT Warangal") echo 'selected="selected"'; ?> >NIT Warangal </option>
                    <option value="SRM Institute of Sci & Tech., Chennai" <?php if($row['ATTENDED_UNIVERSITY'] == "SRM Institute of Sci & Tech., Chennai") echo 'selected="selected"'; ?> >SRM Institute of Sci & Tech., Chennai </option>
                    <option value="National Institute of Industrial Engg, Mumbai" <?php if($row['ATTENDED_UNIVERSITY'] == "National Institute of Industrial Engg, Mumbai") echo 'selected="selected"'; ?> >National Institute of Industrial Engg, Mumbai </option>
                    <option value="Thiagarajar College of Engg, Madurai" <?php if($row['ATTENDED_UNIVERSITY'] == "Thiagarajar College of Engg, Madurai") echo 'selected="selected"'; ?> >Thiagarajar College of Engg, Madurai </option>
                    <option value="Pondicherry Engineering College, Puducherry" <?php if($row['ATTENDED_UNIVERSITY'] == "Pondicherry Engineering College, Puducherry") echo 'selected="selected"'; ?> >Pondicherry Engineering College, Puducherry </option>
                    <option value="Delhi Technological University, New Delhi" <?php if($row['ATTENDED_UNIVERSITY'] == "Delhi Technological University, New Delhi") echo 'selected="selected"'; ?> >Delhi Technological University, New Delhi </option>
                    <option value="Zakir Husain College of Engg & Tech., Aligarh" <?php if($row['ATTENDED_UNIVERSITY'] == "Zakir Husain College of Engg & Tech., Aligarh") echo 'selected="selected"'; ?> >Zakir Husain College of Engg & Tech., Aligarh </option>
                    <option value="Motilal Nehru National Institute of Tech., Allahabad" <?php if($row['ATTENDED_UNIVERSITY'] == "Motilal Nehru National Institute of Tech., Allahabad") echo 'selected="selected"'; ?> >Motilal Nehru National Institute of Tech., Allahabad </option>
                    <option value="Visvesvaraya National Institute of Tech., Nagpur" <?php if($row['ATTENDED_UNIVERSITY'] == "Visvesvaraya National Institute of Tech., Nagpur") echo 'selected="selected"'; ?> >Visvesvaraya National Institute of Tech., Nagpur </option>
                    <option value="Manipal Institute of Tech., Manipal" <?php if($row['ATTENDED_UNIVERSITY'] == "Manipal Institute of Tech., Manipal") echo 'selected="selected"'; ?> >Manipal Institute of Tech., Manipal </option>
                    <option value="NIT-Calicut" <?php if($row['ATTENDED_UNIVERSITY'] == "NIT-Calicut") echo 'selected="selected"'; ?> >NIT Calicut </option>
                    <option value="MS Ramaiah Institute of Tech., Bengaluru" <?php if($row['ATTENDED_UNIVERSITY'] == "MS Ramaiah Institute of Tech., Bengaluru") echo 'selected="selected"'; ?> >MS Ramaiah Institute of Tech., Bengaluru </option>
                    <option value="AMITY University, Gautam Budh Nagar" <?php if($row['ATTENDED_UNIVERSITY'] == "AMITY University, Gautam Budh Nagar") echo 'selected="selected"'; ?> >AMITY University, Gautam Budh Nagar </option>
                    <option value="Kalinga Institute of Industrial Tech., Bhubneswar" <?php if($row['ATTENDED_UNIVERSITY'] == "Kalinga Institute of Industrial Tech., Bhubneswar") echo 'selected="selected"'; ?> >Kalinga Institute of Industrial Tech., Bhubneswar </option>
                    <option value="Sri Venkateswara University, Tirupati" <?php if($row['ATTENDED_UNIVERSITY'] == "Sri Venkateswara University, Tirupati") echo 'selected="selected"'; ?> >Sri Venkateswara University, Tirupati </option>
                    <option value="RV College of Engineering, Bengaluru" <?php if($row['ATTENDED_UNIVERSITY'] == "RV College of Engineering, Bengaluru") echo 'selected="selected"'; ?> >RV College of Engineering, Bengaluru </option>
                    <option value="Sardar Vallabhbhai Patel National Institute of Tech., Surat" <?php if($row['ATTENDED_UNIVERSITY'] == "Sardar Vallabhbhai Patel National Institute of Tech., Surat") echo 'selected="selected"'; ?> >Sardar Vallabhbhai Patel National Institute of Tech., Surat </option>
                    <option value="Coimbatore Institute of Tech., Coimbatore" <?php if($row['ATTENDED_UNIVERSITY'] == "Coimbatore Institute of Tech., Coimbatore") echo 'selected="selected"'; ?> >Coimbatore Institute of Tech., Coimbatore </option>
                    <option value="BMS College of Engg, Bengaluru" <?php if($row['ATTENDED_UNIVERSITY'] == "BMS College of Engg, Bengaluru") echo 'selected="selected"'; ?> >BMS College of Engg, Bengaluru </option>
                    <option value="NIT-Silchar" <?php if($row['ATTENDED_UNIVERSITY'] == "NIT-Silchar") echo 'selected="selected"'; ?> >NIT Silchar </option>
                    <option value="Jaypee Institute of IT, Noida" <?php if($row['ATTENDED_UNIVERSITY'] == "Jaypee Institute of IT, Noida") echo 'selected="selected"'; ?> >Jaypee Institute of IT, Noida </option>
                    <option value="NIT Durgapur" <?php if($row['ATTENDED_UNIVERSITY'] == "NIT Durgapur") echo 'selected="selected"'; ?> >NIT Durgapur </option>
                    <option value="Indraprastha Institute of IT, New Delhi" <?php if($row['ATTENDED_UNIVERSITY'] == "Indraprastha Institute of IT, New Delhi") echo 'selected="selected"'; ?> >Indraprastha Institute of IT, New Delhi </option>
                    <option value="Kongu Engg College, Perundurai" <?php if($row['ATTENDED_UNIVERSITY'] == "Kongu Engg College, Perundurai") echo 'selected="selected"'; ?> >Kongu Engg College, Perundurai </option>
                    <option value="Vel Tech Rangarajan Dr S. R. and D Institute of Sci.&Tech., Chennai" <?php if($row['ATTENDED_UNIVERSITY'] == "Vel Tech Rangarajan Dr S. R. and D Institute of Sci.&Tech., Chennai") echo 'selected="selected"'; ?> >Vel Tech Rangarajan Dr S. R. and D Institute of Sci.&Tech., Chennai </option>
                    <option value="NIT-Hamirpur" <?php if($row['ATTENDED_UNIVERSITY'] == "NIT-Hamirpur") echo 'selected="selected"'; ?> >NIT Hamirpur </option>
                    <option value="NIT-Kurukshetra" <?php if($row['ATTENDED_UNIVERSITY'] == "NIT-Kurukshetra") echo 'selected="selected"'; ?> >NIT Kurukshetra </option>
                    <option value="Maulana Azad National Institute of Technology, Bhopal" <?php if($row['ATTENDED_UNIVERSITY'] == "Maulana Azad National Institute of Technology, Bhopal") echo 'selected="selected"'; ?> >Maulana Azad National Institute of Technology, Bhopal </option>
                    <option value="Karunya Institute of Technology amd Sciences, Coimbatore" <?php if($row['ATTENDED_UNIVERSITY'] == "Karunya Institute of Technology amd Sciences, Coimbatore") echo 'selected="selected"'; ?> >Karunya Institute of Technology amd Sciences, Coimbatore </option>
                    <option value="Jawaharlal Nehru Technological University, Hyderabad" <?php if($row['ATTENDED_UNIVERSITY'] == "Jawaharlal Nehru Technological University, Hyderabad") echo 'selected="selected"'; ?> >Jawaharlal Nehru Technological University, Hyderabad </option>
                    <option value="Shri Ramdeobaba College of Engineering and Management, Nagpur" <?php if($row['ATTENDED_UNIVERSITY'] == "Shri Ramdeobaba College of Engineering and Management, Nagpur") echo 'selected="selected"'; ?> >Shri Ramdeobaba College of Engineering and Management, Nagpur </option>
                    <option value="IIT-Jodhpur" <?php if($row['ATTENDED_UNIVERSITY'] == "IIT-Jodhpur") echo 'selected="selected"'; ?> >IIT Jodhpur </option>
                    <option value="Bharati Vidyapeeth Deemed University College of Engineering, Pune" <?php if($row['ATTENDED_UNIVERSITY'] == "Bharati Vidyapeeth Deemed University College of Engineering, Pune") echo 'selected="selected"'; ?> >Bharati Vidyapeeth Deemed University College of Engineering, Pune </option>
                    <option value="GH Raisoni College of Engineering, Nagpur" <?php if($row['ATTENDED_UNIVERSITY'] == "GH Raisoni College of Engineering, Nagpur") echo 'selected="selected"'; ?> >GH Raisoni College of Engineering, Nagpur </option>
                    <option value="KL College of Engineering, Vaddeswaram" <?php if($row['ATTENDED_UNIVERSITY'] == "KL College of Engineering, Vaddeswaram") echo 'selected="selected"'; ?> >KL College of Engineering, Vaddeswaram </option>
                    <option value="P. D. P. M. Indian Institute of IT, Design & Manufacturing, Jabalpur" <?php if($row['ATTENDED_UNIVERSITY'] == "P. D. P. M. Indian Institute of IT, Design & Manufacturing, Jabalpur") echo 'selected="selected"'; ?> >P. D. P. M. Indian Institute of IT, Design & Manufacturing, Jabalpur </option>
                    <option value="Malaviya National Institute of Technology, Jaipur" <?php if($row['ATTENDED_UNIVERSITY'] == "Malaviya National Institute of Technology, Jaipur") echo 'selected="selected"'; ?> >Malaviya National Institute of Technology, Jaipur </option>
                    <option value="D. Ambani Institute of Information & CT, Gandhinaga" <?php if($row['ATTENDED_UNIVERSITY'] == "D. Ambani Institute of Information & CT, Gandhinaga") echo 'selected="selected"'; ?> >D. Ambani Institute of Information & CT, Gandhinagar </option>
                    <option value="Siddaganga Institute of Technology, Tumkur" <?php if($row['ATTENDED_UNIVERSITY'] == "Siddaganga Institute of Technology, Tumkur") echo 'selected="selected"'; ?> >Siddaganga Institute of Technology, Tumkur </option>
                    <option value="Mepco Schlenk Engineering College, Sivakasi" <?php if($row['ATTENDED_UNIVERSITY'] == "Mepco Schlenk Engineering College, Sivakasi") echo 'selected="selected"'; ?> >Mepco Schlenk Engineering College, Sivakasi </option>
                    <option value="Guru Gobind Singh Indraprastha University, Dwarka" <?php if($row['ATTENDED_UNIVERSITY'] == "Guru Gobind Singh Indraprastha University, Dwarka") echo 'selected="selected"'; ?> >Guru Gobind Singh Indraprastha University, Dwarka </option>
                    <option value="International Institute of Information Technology, Hyderabad" <?php if($row['ATTENDED_UNIVERSITY'] == "International Institute of Information Technology, Hyderabad") echo 'selected="selected"'; ?> >International Institute of Information Technology, Hyderabad </option>
                    <option value="Faculty of Technology and Engineering, Vadodara" <?php if($row['ATTENDED_UNIVERSITY'] == "Faculty of Technology and Engineering, Vadodara") echo 'selected="selected"'; ?> >Faculty of Technology and Engineering, Vadodara </option>
                    <option value="Army Institute of Technology, Pune" <?php if($row['ATTENDED_UNIVERSITY'] == "Army Institute of Technology, Pune") echo 'selected="selected"'; ?> >Army Institute of Technology, Pune </option>
                    <option value="PSNA College of Engineering and Technology, Dindigul" <?php if($row['ATTENDED_UNIVERSITY'] == "PSNA College of Engineering and Technology, Dindigul") echo 'selected="selected"'; ?> >PSNA College of Engineering and Technology, Dindigul </option>
                    <option value="Nirma University, Ahmedabad" <?php if($row['ATTENDED_UNIVERSITY'] == "Nirma University, Ahmedabad") echo 'selected="selected"'; ?> >Nirma University, Ahmedabad </option>
                    <option value="University College of Engineering, Hyderabad" <?php if($row['ATTENDED_UNIVERSITY'] == "University College of Engineering, Hyderabad") echo 'selected="selected"'; ?> >University College of Engineering, Hyderabad </option>
                    <option value="Sagi Ramakrishnam Raju Engineering College, Bhimavaram" <?php if($row['ATTENDED_UNIVERSITY'] == "Sagi Ramakrishnam Raju Engineering College, Bhimavaram") echo 'selected="selected"'; ?> >Sagi Ramakrishnam Raju Engineering College, Bhimavaram </option>
                    <option value="Kumaraguru College of Technology, Coimbatore" <?php if($row['ATTENDED_UNIVERSITY'] == "Kumaraguru College of Technology, Coimbatore") echo 'selected="selected"'; ?> >Kumaraguru College of Technology, Coimbatore </option>
                    <option value="Jaypee University of Information Technology, Solan" <?php if($row['ATTENDED_UNIVERSITY'] == "Jaypee University of Information Technology, Solan") echo 'selected="selected"'; ?> >Jaypee University of Information Technology, Solan </option>
                    <option value="RMK Engineering College, Kavaraipettai" <?php if($row['ATTENDED_UNIVERSITY'] == "RMK Engineering College, Kavaraipettai") echo 'selected="selected"'; ?> >RMK Engineering College, Kavaraipettai </option>
                    <option value="Punjab Engineering College, Chandigarh" <?php if($row['ATTENDED_UNIVERSITY'] == "Punjab Engineering College, Chandigarh") echo 'selected="selected"'; ?> >Punjab Engineering College, Chandigarh </option>
                    <option value="PES University, Bengaluru" <?php if($row['ATTENDED_UNIVERSITY'] == "PES University, Bengaluru") echo 'selected="selected"'; ?> >PES University, Bengaluru </option>
                    <option value="NIT-Manipur" <?php if($row['ATTENDED_UNIVERSITY'] == "NIT-Manipur") echo 'selected="selected"'; ?> >NIT Manipur </option>
                    <option value="Vignan’s Foundation for Science, Technology and Research, Guntur" <?php if($row['ATTENDED_UNIVERSITY'] == "Vignan’s Foundation for Science, Technology and Research, Guntur") echo 'selected="selected"'; ?> >Vignan’s Foundation for Science, Technology and Research, Guntur </option>
                    <option value="BS Abdur Rahman Institute of Science and Technology, Chennai" <?php if($row['ATTENDED_UNIVERSITY'] == "BS Abdur Rahman Institute of Science and Technology, Chennai") echo 'selected="selected"'; ?> >BS Abdur Rahman Institute of Science and Technology, Chennai </option>
                    <option value="Chaitanya Bharathi Institute of Technology, Hyderabad" <?php if($row['ATTENDED_UNIVERSITY'] == "Chaitanya Bharathi Institute of Technology, Hyderabad") echo 'selected="selected"'; ?> >Chaitanya Bharathi Institute of Technology, Hyderabad </option>
                    <option value="Saveetha Engineering College, Sriperumbudur" <?php if($row['ATTENDED_UNIVERSITY'] == "Saveetha Engineering College, Sriperumbudur") echo 'selected="selected"'; ?> >Saveetha Engineering College, Sriperumbudur </option>
                    <option value="CV Raman College of Engineering, Bhubneshwar" <?php if($row['ATTENDED_UNIVERSITY'] == "CV Raman College of Engineering, Bhubneshwar") echo 'selected="selected"'; ?> >CV Raman College of Engineering, Bhubneshwar </option>
                    <option value="College of Engineering, Trivandrum" <?php if($row['ATTENDED_UNIVERSITY'] == "College of Engineering, Trivandrum") echo 'selected="selected"'; ?> >College of Engineering, Trivandrum </option>
                    <option value="Maharashtra Institute of Technology, Pune" <?php if($row['ATTENDED_UNIVERSITY'] == "Maharashtra Institute of Technology, Pune") echo 'selected="selected"'; ?> >Maharashtra Institute of Technology, Pune </option>
                    <option value="BMS Institute of Technology and Management, Bengaluru" <?php if($row['ATTENDED_UNIVERSITY'] == "BMS Institute of Technology and Management, Bengaluru") echo 'selected="selected"'; ?> >BMS Institute of Technology and Management, Bengaluru </option>
                    <option value="Sri Sai Ram Engineering College, Chennai" <?php if($row['ATTENDED_UNIVERSITY'] == "Sri Sai Ram Engineering College, Chennai") echo 'selected="selected"'; ?> >Sri Sai Ram Engineering College, Chennai </option>
                    <option value="St Joseph’s College of Engineering, Chennai" <?php if($row['ATTENDED_UNIVERSITY'] == "St Joseph’s College of Engineering, Chennai") echo 'selected="selected"'; ?> >St Joseph’s College of Engineering, Chennai </option>
                    <option value="Andhra University, Visakhapatnam" <?php if($row['ATTENDED_UNIVERSITY'] == "Andhra University, Visakhapatnam") echo 'selected="selected"'; ?> >Andhra University, Visakhapatnam </option>
                    <option value="KS Rangasamy College of Technology, Tiruchengode" <?php if($row['ATTENDED_UNIVERSITY'] == "KS Rangasamy College of Technology, Tiruchengode") echo 'selected="selected"'; ?> >KS Rangasamy College of Technology, Tiruchengode </option>
                    <option value="NIT-Meghalaya" <?php if($row['ATTENDED_UNIVERSITY'] == "NIT-Meghalaya") echo 'selected="selected"'; ?> >NIT Meghalaya </option>
                    <option value="Other" <?php if($row['ATTENDED_UNIVERSITY'] == "Other") echo 'selected="selected"'; ?> >Other</option>
                  </select>
                  
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-3 col-sm-3">
                  <label for="PassingYear">Year of Passing</label>
                  <select id="PassingYear" name="PassingYear" class="form-control">
                    <option value="">Choose</option>
                    <option value="2017" <?php if($row['PASSING_YEAR'] == "2017") echo 'selected="selected"'; ?> >2017</option>
                    <option value="2016" <?php if($row['PASSING_YEAR'] == "2016") echo 'selected="selected"'; ?> >2016</option>
                    <option value="2015" <?php if($row['PASSING_YEAR'] == "2015") echo 'selected="selected"'; ?> >2015</option>
                    <option value="2014" <?php if($row['PASSING_YEAR'] == "2014") echo 'selected="selected"'; ?> >2014</option>
                    <option value="2013" <?php if($row['PASSING_YEAR'] == "2013") echo 'selected="selected"'; ?> >2013</option>
                    <option value="2012" <?php if($row['PASSING_YEAR'] == "2012") echo 'selected="selected"'; ?> >2012</option>
                    <option value="2011" <?php if($row['PASSING_YEAR'] == "2011") echo 'selected="selected"'; ?> >2011</option>
                    <option value="2010" <?php if($row['PASSING_YEAR'] == "2010") echo 'selected="selected"'; ?> >2010</option>
                    <option value="2009" <?php if($row['PASSING_YEAR'] == "2009") echo 'selected="selected"'; ?> >2009</option>
                    <option value="2008" <?php if($row['PASSING_YEAR'] == "2008") echo 'selected="selected"'; ?> >2008</option>
                    <option value="2007" <?php if($row['PASSING_YEAR'] == "2007") echo 'selected="selected"'; ?> >2007</option>
                    <option value="2006" <?php if($row['PASSING_YEAR'] == "2006") echo 'selected="selected"'; ?> >2006</option>
                  </select>
            <!--           <div class="invalid-tooltip">
                        Please provide a valid city.
                      </div> -->
                </div>
                <div class="col-md-3 mb-3 col-sm-3">
                  <label for="Percentage">Percentage</label>
                  <input type="text" class="form-control" id="Percentage" name="Percentage" placeholder="Eg: 56" value="<?php echo $row['PERCENTAGE']; ?> " required>
            <!--       <div class="invalid-tooltip">
                    Please provide a valid state.
                  </div> -->
                </div>
                <div class="col-md-2 mb-3 col-sm-3">
                  <label for="CGPAScore">GPA</label>
                  <input type="text" class="form-control" id="CGPAScore" name="CGPAScore" placeholder="" value="<?php echo $row['GPA']; ?> " required>
                <!--   <div class="invalid-tooltip">
                    Please provide a valid zip.
                  </div> -->
                </div>
                
                <div class="col-md-3 mb-3 col-sm-3">
                  <label for="NoOfBacklogs">No.Backlogs</label>
                  <input type="text" class="form-control" id="NoOfBacklogs" name="NoOfBacklogs" placeholder="if 0 then -"  value="<?php echo $row['BACKLOGS_COUNT']; ?> " required>
               <!--    <div class="invalid-tooltip">
                    Please provide a valid zip.
                  </div> -->
                </div>
                <span  class="form-text text-muted text-justify" style="color:green;">* If No backlogs,0 CGPA or No experience then put  " - "</span>
              </div>
       </div>
</div>

<!-- Work Experience form start here -->
   <div class="card mt-2 ">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-briefcase"></i> Work Experience</h5>
            
            <!-- <form> -->
              <div class="form-row">
                <div class="col mr-3">
                     <label for="YearsOfExperience">Years of Experience</label>
                      <input type="text" id="YearsOfExperience" name="YearsOfExperience" class="form-control" placeholder="" value="<?php echo $row['WORK_EXPERIENCE_COUNT']; ?> ">
                </div>
                <div class="col">
                          <label>Experience Letter</label><span id="ExperienceLetterErr" style="color: red; font-size: 15px;"> *</span>  <br>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input ml-2 ExperienceLetter" type="radio" name="ExperienceLetter" id="ExperienceLetterY" value="YES"  <?php if($row['EXPERIENCE_LETTER'] == "YES") echo 'checked'; ?> >
                          <label class="form-check-label ml-1" for="ExperienceYes">YES</label>
                      </div>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input ml-2 ExperienceLetter" type="radio" name="ExperienceLetter" id="ExperienceLetterN" value="NO"  <?php if($row['EXPERIENCE_LETTER'] == "NO") echo 'checked'; ?> >
                          <label class="form-check-label ml-1" for="ExperienceNo">NO</label>
                      </div>

                </div>
              </div>
              <div class="my-1 ">
                    <div class="form-group">
                    <label for="ExperienceON">Technology / Platform</label>
                    <select class="form-control" id="ExperienceON">
                      <option value="">Select</option>
                      <option value="Android Development" <?php if($row['WORKED_ON'] == "Android Development") echo 'selected="selected"'; ?> >Android Development</option>
                      <option value="BDE" <?php if($row['WORKED_ON'] == "BDE") echo 'selected="selected"'; ?> >BDE</option>
                      <option value="BI/DWH/Reporting Tools" <?php if($row['WORKED_ON'] == "BI/DWH/Reporting Tools") echo 'selected="selected"'; ?> >BI/DWH/Reporting Tools</option>
                      <option value="DBA" <?php if($row['WORKED_ON'] == "DBA") echo 'selected="selected"'; ?> >DBA</option>
                      <option value="ERP(SAP, Oracle Apps, PeopleSoft)" <?php if($row['WORKED_ON'] == "ERP(SAP, Oracle Apps, PeopleSoft)") echo 'selected="selected"'; ?> >ERP(SAP, Oracle Apps, PeopleSoft)</option>
                      <option value="Full Stack Developer" <?php if($row['WORKED_ON'] == "Full Stack Developer") echo 'selected="selected"'; ?> >Full Stack Developer</option>
                      <option value="iOS Dev" <?php if($row['WORKED_ON'] == "iOS Dev") echo 'selected="selected"'; ?> >iOS Dev</option>
                      <option value="ITES/BPO/Customer Support" <?php if($row['WORKED_ON'] == "ITES/BPO/Customer Support") echo 'selected="selected"'; ?> >ITES/BPO/Customer Support</option>
                      <option value="Mainframes" <?php if($row['WORKED_ON'] == "Mainframes") echo 'selected="selected"'; ?> >Mainframes</option>
                      <option value="S/W Engg. (.Net)" <?php if($row['WORKED_ON'] == "S/W Engg. (.Net)") echo 'selected="selected"'; ?> >S/W Engg. (.Net)</option>
                      <option value="S/W Engg. (C,C++)" <?php if($row['WORKED_ON'] == "S/W Engg. (C,C++)") echo 'selected="selected"'; ?> >S/W Engg. (C,C++)</option>
                      <option value="S/W Engg. (Java)" <?php if($row['WORKED_ON'] == "S/W Engg. (Java)") echo 'selected="selected"'; ?> >S/W Engg. (Java)</option>
                      <option value="S/W Engg. (Perl)" <?php if($row['WORKED_ON'] == "S/W Engg. (Perl)") echo 'selected="selected"'; ?> >S/W Engg. (Perl)</option>
                      <option value="S/W Engg. (Python)" <?php if($row['WORKED_ON'] == "S/W Engg. (Python)") echo 'selected="selected"'; ?> >S/W Engg. (Python)</option>
                      <option value="S/W Engg. (Ruby)" <?php if($row['WORKED_ON'] == "S/W Engg. (Ruby)") echo 'selected="selected"'; ?> >S/W Engg. (Ruby)</option>
                      <option value="System Adminstrator(Linux/Windows)" <?php if($row['WORKED_ON'] == "System Adminstrator(Linux/Windows)") echo 'selected="selected"'; ?> >System Admins.(Linux/Windows)</option>
                      <option value="Testing/QA" <?php if($row['WORKED_ON'] == "Testing/QA") echo 'selected="selected"'; ?> >Testing/QA</option>
                      <option value="Web Tech(UI/UX Development)" <?php if($row['WORKED_ON'] == "Web Tech(UI/UX Development)") echo 'selected="selected"'; ?> >Web Tech(UI/UX Development)</option>
                      <option value="Non-IT" <?php if($row['WORKED_ON'] == "Non-IT") echo 'selected="selected"'; ?> >Non-IT</option>
                      <option value="other" <?php if($row['WORKED_ON'] == "other") echo 'selected="selected"'; ?> >other</option>
                    </select>
                  </div>
              </div>
        <!-- </form> -->
          </div>
    </div> 

    <!--start of education loan card     -->
     
    <div class="card mt-2">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-suitcase"></i> Education Loan</h5>
              
               <div class="form-row">
                <div class="col-md-6 mb-3 col-sm-6">
                  <label for="LoanAmount"><i class="fas fa-rupee-sign"></i> Loan Amount</label>
                  
                  <select id="LoanAmount" name="LoanAmount" class="form-control">
                    <option value="" >Select</option>
                    <option value="Not Required" <?php if($row['LOAN_AMOUNT_REQUIRED'] == "Not Required") echo 'selected="selected"'; ?> >Not Required</option>
                    <option value="15Lac - 20Lac" <?php if($row['LOAN_AMOUNT_REQUIRED'] == "15Lac - 20Lac") echo 'selected="selected"'; ?> >15Lac - 20Lac </option>
                    <option value="20Lac - 25Lac" <?php if($row['LOAN_AMOUNT_REQUIRED'] == "20Lac - 25Lac") echo 'selected="selected"'; ?> >20Lac - 25Lac</option>
                    <option value="25Lac - 30Lac" <?php if($row['LOAN_AMOUNT_REQUIRED'] == "25Lac - 30Lac") echo 'selected="selected"'; ?> >25Lac - 30Lac</option>
                    <option value="30Lac - 35Lac" <?php if($row['LOAN_AMOUNT_REQUIRED'] == "30Lac - 35Lac") echo 'selected="selected"'; ?> >30Lac - 35Lac</option>
                    <option value="35Lac - 40Lac" <?php if($row['LOAN_AMOUNT_REQUIRED'] == "35Lac - 40Lac") echo 'selected="selected"'; ?> >35Lac - 40Lac</option>          
                    <option value="40Lac - 45Lac" <?php if($row['LOAN_AMOUNT_REQUIRED'] == "40Lac - 45Lac") echo 'selected="selected"'; ?> >40Lac - 45Lac</option>    
                    <option value="45Lac - 50Lac" <?php if($row['LOAN_AMOUNT_REQUIRED'] == "45Lac - 50Lac") echo 'selected="selected"'; ?> >45Lac - 50Lac</option>
                    <option value="50Lac - 55Lac" <?php if($row['LOAN_AMOUNT_REQUIRED'] == "50Lac - 55Lac") echo 'selected="selected"'; ?> >50Lac - 55Lac</option> 
                    <option value="55Lac - 60Lac" <?php if($row['LOAN_AMOUNT_REQUIRED'] == "55Lac - 60Lac") echo 'selected="selected"'; ?> >55Lac - 60Lac</option>
                    <option value="More than 60Lac" <?php if($row['LOAN_AMOUNT_REQUIRED'] == "More than 60Lac") echo 'selected="selected"'; ?> >More than 60Lac</option>
                   </select>
                </div>
                <div class="col-md-6 mb-3 col-sm-6">
                      <label for="RequiredBenificial">Required Benificial</label>
                      <select id="RequiredBenificial" class="form-control">
                        <option value="">Choose...</option>
                        <option value="Less Rate of Int" <?php if($row['REQUIRED_BENIFICIAL'] == "Less Rate of Int") echo 'selected="selected"'; ?> >Less Rate of Int</option>
                        <option value="No Co-Applicant Loan" <?php if($row['REQUIRED_BENIFICIAL'] == "No Co-Applicant Loan") echo 'selected="selected"'; ?> >No Co-Applicant Loan</option>
                        <option value="Unsecured Loan" <?php if($row['REQUIRED_BENIFICIAL'] == "Unsecured Loan") echo 'selected="selected"'; ?> >Unsecured Loan</option>
                        <option value="Own Family Fund" <?php if($row['REQUIRED_BENIFICIAL'] == "Own Family Fund") echo 'selected="selected"'; ?> >Own Family Fund</option>
                        <option value="Not Thinked" <?php if($row['REQUIRED_BENIFICIAL'] == "Not Thinked") echo 'selected="selected"'; ?> >Not Thinked</option>
                      </select>
                  

                  </div>
                  
                  <div class="col-md-6 mb-3 col-sm-6">
                        <label for="AdmitionPlanning"><i class="fa fa-cloud"></i> Planning For</label>
                        
                        <select id="AdmitionPlanning" class="form-control">
                          <option value="">Choose...</option>
                          <option value="Fall 18" <?php if($row['PLANNING_FOR'] == "Fall 18") echo 'selected="selected"'; ?> >Fall 18</option>
                          <option value="Fall 19" <?php if($row['PLANNING_FOR'] == "Fall 19") echo 'selected="selected"'; ?> >Fall 19</option>
                          <option value="Spring 18" <?php if($row['PLANNING_FOR'] == "Spring 18") echo 'selected="selected"'; ?> >Spring 18</option>
                          <option value="Spring 19" <?php if($row['PLANNING_FOR'] == "Spring 19") echo 'selected="selected"'; ?> >Spring 19</option>
                          <option value="Summer 18" <?php if($row['PLANNING_FOR'] == "Summer 18") echo 'selected="selected"'; ?> >Summer 18</option>
                          <option value="Summer 19" <?php if($row['PLANNING_FOR'] == "Summer 19") echo 'selected="selected"'; ?> >Summer 19</option>
                        </select>
                  
                  </div>
                  <div class="col-md-6 mb-3 col-sm-6" >
                      <label for="DreamUniversity"><i class="fa fa-university"></i> Dream University</label>
                      <input type="text" class="form-control" name="DreamUniversity" id="DreamUniversity" placeholder="Dream Uni." value="<?=$row['DREAM_UNIVERSITY'];?>">     
                  </div>
              </div>
            </div>          
      </div>  
              <div class="form-group row">
                <div class="col">
                      <small id="emailHelp" class="form-text text-muted text-justify" style="color:green;">By clicking register now, you agree to our Terms and confirm that you have read our <a href="terms.php"  target="_blank">Data Policy</a>. You may receive SMS message and email notifications from Trraks.com and can opt out at any time.</small>
                </div>
              </div>
         <button type="submit" name="SAVE_RECORD" class="btn btn-lg btn-block mt-2" style="background-color: #00193f; color: white"><span id="loader4"><img src="img/form_loading.gif" alt="form_loader" width="25px"></span>SAVE RECORD</button>
</form>   
   
</div>     
<!--end of education loan card-->  

    </div>
    </div>     
</div>


<div class="modal fade bg-one" data-backdrop="static" id="admissionform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content bg-color">
              <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLabel"><b>Admission Form</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            
            <input type="text" class="form-control drop" id="Student_name" value="<?=$_SESSION['Full_Name'];?>" placeholder="Your Full Name">
          </div>

          <div class="form-group">
            
            <input type="email" class="form-control drop" id="Student_email" value="<?=$_SESSION['Email'];?>" placeholder="Enter Your Email">
          </div>

          <div class="row"> 
          <div class="form-group col-md-6 col-sm-6">
            
            <input type="tel" class="form-control drop" id="Student_mobile" value="<?=$_SESSION['Mo_No'];?>" placeholder="Enter Your Contact No">
          </div>
           <div class="form-group col-md-6 col-sm-6">
            <select class="custom-select mr-sm-2 drop"  id="student_city" name="stud_city" >
                    <option value="">Current location</option>
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
                    <option value="kurnool" <?php if($_SESSION['Current_Location'] == "kurnool") echo 'selected="selected"'; ?>>kurnool</option>
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
          </div>          
<div class="row">
            <div class="form-group col-md-6 col-sm-6">
                    <select class="custom-select my-1 mr-sm-2 drop" style="margin-bottom:20px" id="expected_country" name="country">
                    <option value="">Desired country</option>
                    <option value="USA" <?php if($_SESSION['country'] == "usa") echo 'selected="selected"'; ?>>USA</option>
                    <option value="Canada" <?php if($_SESSION['country'] == "canada") echo 'selected="selected"'; ?>>Canada</option>
                    <!--
                    <option value="UK">UK</option>
                    <option value="Germany">Germany</option>
                    <option value="Australia">Australia</option>
                    <option value="New Zealand">New Zealand</option>
                       -->
                        </select>

            </div>            
           <div class="form-group col-md-6 col-sm-6"> 
          <select class="custom-select my-1 mr-sm-2 drop" id="expected_stream" name="stream">
            <option value="">Desired Stream</option>
            <option value="MS" <?php if($_SESSION['stream'] == "MS") echo 'selected="selected"'; ?>>MS</option>
            <option value="MBA" <?php if($_SESSION['stream'] == "MBA") echo 'selected="selected"'; ?>>MBA</option>
                </select>
            </div>      
</div>
    

         <div class="form-group"> 
          <select class="custom-select my-1 mr-sm-2 drop" id="desired_program" name="stream">
            <option value="">Desired Program</option>
                   
                    <option value="Aeronotical">Aeronotical</option>
                    <option value="Agriculture">Agriculture</option>
                    <option value="AIE">AIE</option>
                    <option value="Automobile">Automobile</option>
                    <option value="BioChemical">BioChemical</option>
                    <option value="BioInformatics">BioInformatics</option>
                    <option value="BioMedical">BioMedical</option>
                    <option value="BioTechnology">BioTechnology</option>
                    <option value="Chemical">Chemical</option>
                    <option value="Civil">Civil</option>
                    <option value="CSE">CSE</option>
                    <option value="ECE">ECE</option>
                    <option value="EEE">EEE</option>
                    <option value="EIE">EIE</option>
                    <option value="EnergyTechnology">EnergyTechnology</option>
                    <option value="Environmental">Environmental</option>
                    <option value="FireSafety">FireSafety</option>
                    <option value="FoodTechology">FoodTechology</option>
                    <option value="Genetic">Genetic</option>
                    <option value="GeoInformatics">GeoInformatics</option>
                    <option value="GeoScience">GeoScience</option>
                    <option value="IndustrailEngg">IndustrailEngg</option>
                    <option value="IndustrialProduction">IndustrialProduction</option>
                    <option value="InstrumentaionControl">InstrumentaionControl</option>
                    <option value="IT">IT</option>
                    <option value="Leather">Leather</option>
                    <option value="ManMadFiber">ManMadFiber</option>
                    <option value="Manufacturing">Manufacturing</option>
                    <option value="Marine">Marine</option>
                    <option value="MaterialScience">MaterialScience</option>
                    <option value="Mechanical">Mechanical</option>
                    <option value="Mechatronics">Mechatronics</option>
                    <option value="Metallurgical">Metallurgical</option>
                    <option value="Mining">Mining</option>
                    <option value="OceanEngineering">OceanEngineering</option>
                    <option value="ProductionEngineering">ProductionEngineering</option>
                    <option value="ProductionIndustrial">ProductionIndustrial</option>
                    <option value="Textile">Textile</option>
                    <option value="Other">Other</option>    

                </select>
            </div>

               <div class="form-group">
                          <input type="text" class="form-control drop-space" id="univname" placeholder="Enter University Name planning for">
             </div>              
     <div class="row">
             <div class="form-group col-md-4 col-sm-4">
          <select class="custom-select my-1 mr-sm-2 drop" id="desired_intake_date" name="stream">
                       <option value="">Select intake date</option>  
                       <option value="1">1</option>   
                       <option value="2">2</option>   
                       <option value="3">3</option>   
                       <option value="4">4</option>   
                       <option value="5">5</option>   
                       <option value="6">6</option>   
                       <option value="7">7</option>   
                       <option value="8">8</option>   
                       <option value="9">9</option>   
                       <option value="10">10</option>   
                       <option value="11">11</option>   
                       <option value="12">12</option>   
                       <option value="13">13</option>   
                       <option value="14">14</option>   
                       <option value="15">15</option>   
                       <option value="16">16</option>   
                       <option value="17">17</option>   
                       <option value="18">18</option>   
                       <option value="19">19</option>   
                       <option value="20">20</option>   
                       <option value="21">21</option>   
                       <option value="22">22</option>   
                       <option value="23">23</option>   
                       <option value="24">24</option>   
                       <option value="25">25</option>   
                       <option value="26">26</option>   
                       <option value="27">27</option>   
                       <option value="28">28</option>   
                       <option value="29">29</option>   
                       <option value="30">30</option>   
                       <option value="31">31</option>   
          </select>                
             </div>
             <div class="form-group col-md-4 col-sm-4">
          <select class="custom-select my-1 mr-sm-2 drop " id="desired_intake_season" name="stream">
                          <option value="">Desired Intake month</option>
                          <option value="January">January</option>
                          <option value="February">February</option>                        
                          <option value="March">March</option>
                          <option value="April">April</option>
                          <option value="May">May</option>                        
                          <option value="June">June</option>   
                          <option value="July">July</option>   
                          <option value="August">August</option>   
                          <option value="September">September</option>   
                          <option value="October">October</option>   
                          <option value="November">November</option>   
                          <option value="December">December</option>   
          </select>                
             </div>
               <div class="form-group col-md-4 col-sm-4">
                          <select class="custom-select my-1 mr-sm-2 drop" id="desired_intake_year" name="stream">
                                <option value="">Desired Intake Year</option>
                                  <option value="2018">2018</option>
                                   <option value="2019">2019</option>
                                    <option value="2020">2020</option>

                        </select>
             </div>
         
     </div>    

         <div class="row"> 
             <div class="form-group col-md-6 col-sm-6">
          <select class="custom-select mr-sm-2 drop" id="EntranceExam" name="stream">
                         <option value="">Entrance Exam Given?</option>
                          <option value="GMAT">GMAT</option>
                          <option value="GRE">GRE</option>     
          </select>                
             </div>
               <div class="form-group col-md-6 col-sm-6">
                    <input type="text" class="form-control drop-space" id="EntranceExamScore" placeholder="Enter Entrance Exam Score">
             </div>

        </div>

         <div class="row"> 
             <div class="form-group col-md-6 col-sm-6">
          <select class="custom-select mr-sm-2 drop" id="VerbalExam" name="stream">
                         <option value="">Verbal Exam Given?</option>
                          <option value="IELTS">IELTS</option>
                          <option value="PTE">PTE</option>  
                          <option value="TOEFL">TOEFL</option>     
          </select>              
             </div>
               <div class="form-group col-md-6 col-sm-6">
                          <input type="text" class="form-control drop-space" id="VerbalExamScore" placeholder="Enter Verbal Exam Score">
             </div>

        </div>

         <div class="form-group"> 
          <select class="custom-select my-1 mr-sm-2 drop" id="loan_requirement" name="stream">
            <option value="">Looking for Loan?</option>
            <option value="YES">YES</option>
            <option value="NO">NO</option>
          </select>
        </div>


           <div class="form-group">
            
            <input type="text" class="form-control drop-space" id="loan_amount" placeholder="Enter loan amount Eg : 50Lacs if NO then put '-' ">
          </div> 
                   
      
          <div class="modal-footer">
            <button type="button" id="submit" class="btn btn-primary" style="margin-right:185px" > Apply <span id="loader3"><img src="img/form_loading.gif" alt="form_loader" width="25px"></span></button>
          </div>
        </form>

    </div>
  </div>
</div>

</div>
                                          
                                        
<div id="modaloutput">  

<div class="modal fade bottom" id="form_responceupdated" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;" >
    <div class="modal-dialog modal-frame modal-fluid modal-bottom " role="document">
        <div class="modal-content"  style=" background-color: #5fff426b;">
            <div class="modal-body text-center">
               <span> <h3 style="color:white;">data updated successfully</h3> </span>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bottom" id="form_responceinserted" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;" >
    <div class="modal-dialog modal-frame modal-fluid modal-bottom " role="document">
        <div class="modal-content"  style=" background-color: #5fff426b;">
            <div class="modal-body text-center">
               <span> <h3 style="color:white;">data inserted successfully</h3> </span>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bottom" id="form_responcefail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;">
    <div class="modal-dialog modal-frame modal-fluid modal-bottom " role="document">
        <div class="modal-content" style=" background-color: #ff000096;">
            <div class="modal-body text-center">
               <span> <h3 style="color:white;">Something went wrong try again..!</h3> </span>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>


 <?php
 }
else
{ ?>
  <script>
     alert('Please login first');
         
            window.location.href='index.php';
            // $('#login').modal('show');
      
    </script>
<?php
}  
include("footer.php");
  ?>
 
<!-- Result generating script starts here... -->
  <script>
    var nameReg = /^[A-Za-z ]+$/;
    var numberReg =  /^[0-9]/;    
        $(document).ready(function(){
             $("#loader3").hide();
             $("#loader4").hide();
                $("#submit").click(function(){

                var Name = $("#Student_name").val();
                    if(Name == "")
                     {
                         $("#Student_name").css("border", "1px solid red");
                      
                         // setTimeout(function(){ $('#Student_name').css("border", "1px solid"); }, 2000);
                     }
                     else
                     {
                      
                      $("#Student_name").css("border", "1px solid green");
                      }


                 var Email = $("#Student_email").val();
                    if(Email == "")
                     {
                         $("#Student_email").css("border", "1px solid red");
                      
                         // setTimeout(function(){ $('#Student_name').css("border", "1px solid"); }, 2000);
                     }
                     else
                     {
                      
                      $("#Student_email").css("border", "1px solid green");
                      }


                  var Mobile_number = $("#Student_mobile").val();
                    if(Mobile_number == "")
                     {
                         $("#Student_mobile").css("border", "1px solid red");
                      
                         // setTimeout(function(){ $('#Student_mobile').css("border", "1px solid"); }, 2000);
                     }
                     else
                     {
                      
                      $("#Student_mobile").css("border", "1px solid green");
                      }


                   var current_location = $("#student_city").val();
                    if(current_location == "")
                     {
                         $("#student_city").css("border", "1px solid red");
                      
                         // setTimeout(function(){ $('#Student_name').css("border", "1px solid"); }, 2000);
                     }
                     else
                     {
                      
                      $("#student_city").css("border", "1px solid green");
                      }
                    var expected_country = $("#expected_country").val();
                    if(expected_country == "")
                     {
                         $("#expected_country").css("border", "1px solid red");
                      
                         // setTimeout(function(){ $('#Student_name').css("border", "1px solid"); }, 2000);
                     }
                     else
                     {
                      
                         $("#expected_country").css("border", "1px solid green");
                      }


             var expected_stream = $("#expected_stream").val();
                    if(expected_stream == "")
                     {
                         $("#expected_stream").css("border", "1px solid red");
                      
                         // setTimeout(function(){ $('#expected_stream').css("border", "1px solid"); }, 2000);
                     }
                     else
                     {
                      
                      $("#expected_stream").css("border", "1px solid green");
                      }
             var desired_program = $("#desired_program").val();
                    if(desired_program == "")
                     {
                         $("#desired_program").css("border", "1px solid red");
                      
                         // setTimeout(function(){ $('#Student_name').css("border", "1px solid"); }, 2000);
                     }
                     else
                     {
                      
                      $("#desired_program").css("border", "1px solid green");
                      }

             
          var univname = $("#univname").val();
                    if(univname == "" || !nameReg.test(univname))
                     {
                         $("#univname").css("border", "1px solid red");
                      
                         // setTimeout(function(){ $('#desired_intake_season').css("border", "1px solid"); }, 2000);
                     }
                     else
                     {
                      
                      $("#univname").css("border", "1px solid green");
                      }


            var desired_intake_date = $("#desired_intake_date").val();
                    if(desired_intake_date == "")
                     {
                         $("#desired_intake_date").css("border", "1px solid red");
                      
                         // setTimeout(function(){ $('#desired_intake_season').css("border", "1px solid"); }, 2000);
                     }
                     else
                     {
                      
                      $("#desired_intake_date").css("border", "1px solid green");
                      }


             var desired_intake_season = $("#desired_intake_season").val();
                    if(desired_intake_season == "")
                     {
                         $("#desired_intake_season").css("border", "1px solid red");
                      
                         // setTimeout(function(){ $('#desired_intake_season').css("border", "1px solid"); }, 2000);
                     }
                     else
                     {
                      
                      $("#desired_intake_season").css("border", "1px solid green");
                      }


            var desired_intake_year = $("#desired_intake_year").val();
                    if(desired_intake_year == "")
                     {
                         $("#desired_intake_year").css("border", "1px solid red");
                      
                         // setTimeout(function(){ $('#desired_intake_year').css("border", "1px solid"); }, 2000);
                     }
                     else
                     {
                      
                      $("#desired_intake_year").css("border", "1px solid green");
                      }

                 var EntranceExam = $("#EntranceExam").val();
                    if(EntranceExam == "")
                     {
                         $("#EntranceExam").css("border", "1px solid red");
                      
                         // setTimeout(function(){ $('#loan_requirement').css("border", "1px solid"); }, 2000);
                     }
                     else
                     {
                      
                      $("#EntranceExam").css("border", "1px solid green");
                      }
                 var EntranceExamScore = $("#EntranceExamScore").val();
                    if(EntranceExamScore == "" || !numberReg.test(EntranceExamScore))
                     {
                         $("#EntranceExamScore").css("border", "1px solid red");
                      
                         // setTimeout(function(){ $('#loan_requirement').css("border", "1px solid"); }, 2000);
                     }
                     else
                     {
                      
                      $("#EntranceExamScore").css("border", "1px solid green");
                      }
                 var VerbalExam = $("#VerbalExam").val();
                    if(VerbalExam == "")
                     {
                         $("#VerbalExam").css("border", "1px solid red");
                      
                         // setTimeout(function(){ $('#loan_requirement').css("border", "1px solid"); }, 2000);
                     }
                     else
                     {
                      
                      $("#VerbalExam").css("border", "1px solid green");
                      }
                 var VerbalExamScore = $("#VerbalExamScore").val();
                    if(VerbalExamScore == "" || !numberReg.test(VerbalExamScore))
                     {
                         $("#VerbalExamScore").css("border", "1px solid red");
                      
                         // setTimeout(function(){ $('#loan_requirement').css("border", "1px solid"); }, 2000);
                     }
                     else
                     {
                      
                      $("#VerbalExamScore").css("border", "1px solid green");
                      }





             var loan_requirement = $("#loan_requirement").val();
                    if(loan_requirement == "")
                     {
                         $("#loan_requirement").css("border", "1px solid red");
                      
                         // setTimeout(function(){ $('#loan_requirement').css("border", "1px solid"); }, 2000);
                     }
                     else
                     {
                      
                      $("#loan_requirement").css("border", "1px solid green");
                      }


            var loan_amount = $("#loan_amount").val();
                    if(loan_amount == "")
                     {
                         $("#loan_amount").css("border", "1px solid red");
                      
                         // setTimeout(function(){ $('#loan_amount').css("border", "1px solid"); }, 2000);
                     }
                     else
                     {
                      
                      $("#loan_amount").css("border", "1px solid green");
                      }





   if (Name !== '' && Email !== '' && Mobile_number !== '' && current_location !== '' && expected_country !== '' && expected_stream !== '' && desired_program !== '' && desired_intake_date !=='' && desired_intake_season !== '' &&  desired_intake_year !== '' && loan_requirement !== '' && loan_amount !== '' && EntranceExam !== '' &&  EntranceExamScore !== '' && VerbalExam !== '' && VerbalExamScore !== '' && univname !== '')
        {

                      var data_string = "NAME=" + Name + "&EMAIL=" + Email + "&Mobile_number=" + Mobile_number + "&current_location=" + current_location + "&expected_country=" + expected_country + "&expected_stream=" + expected_stream + "&desired_program=" + desired_program + "&desired_intake_season=" + desired_intake_season + "&desired_intake_year=" + desired_intake_year + "&loan_requirement=" + loan_requirement + "&loan_amount=" + loan_amount + "&EntranceExam=" + EntranceExam + "&EntranceExamScore=" + EntranceExamScore + "&VerbalExam=" + VerbalExam + "&VerbalExamScore=" + VerbalExamScore + "&univname=" + univname + "&desired_intake_date="+ desired_intake_date; 
                
                     $.ajax({  
                          type: 'POST',
                          url: 'admission_form_submit.php',
                          data: data_string,
                          beforeSend: function(){
                              // Show image container
                              $("#loader3").show();
                             },
                          success:(function(data) 
                          {
                               // alert(data);
                               $("#loader3").hide();
                             if (data == "inserted") 
                             {
                                alert("Your application for admission submitted successfully.");
                                $('#admissionform').modal('hide');
                                // window.location.href = "universities.php";
                             }else if(data == "fail")
                             {
                                    alert("something went wrong while submitting data.Try again");
                                    // $('#admissionform').modal('hide');
                                    // window.location.href = "universities.php";
                             }else if (data == "exists") 
                             {
                                    alert("Already applied for admission");
                                    $('#admissionform').modal('hide');
                                    // window.location.href = "universities.php";
                             }else
                             {
                                alert("fields are empty");
                                // $('#admissionform').modal('hide');
                             }
                          })
                   });
                      // console.log(data_string);
    }

                });

        });




 $(document).ready(function() {

            var Email = '<?= addslashes($_SESSION['Email']); ?>';
             var Country = '<?= addslashes($_SESSION['country']); ?>';
             var ExpStream = '<?= addslashes($_SESSION['stream']); ?>';
             var EntExam = '<?= addslashes($_SESSION['EntExam']); ?>';
             var EntScore = '<?= addslashes($_SESSION['EntExamScr']); ?>';
             var VerbExam = '<?= addslashes($_SESSION['VerExam']); ?>';
             var VerbScore = '<?= addslashes($_SESSION['VerExamScr']); ?>';
             var record = 'COUNTRY=' + Country + '&EMAIL=' + Email + '&ExpStream=' + ExpStream + '&EntExam=' + EntExam + '&EntScore=' + EntScore + '&VerbExam=' + VerbExam + '&VerbScore=' + VerbScore;
                    $.ajax({  
                          type: 'POST',
                          url: 'resultgenerating.php',
                          data: record,
                          success:(function(data) 
                          {
                             // alert(data);

                              var generated_result = JSON.parse(data);
                              // console.log();
                              var length = generated_result.length;
                                // alert(data);
                              
                              if (data == "false") {
                                    setTimeout(function() {
                                        $("#notevaluate").hide()
                                    }, 3000);
                                // $('#notevaluate').show();
                                 var x='  <div class="card"><div class="card-body"><div class="media row"><div class="col-md-12 col-sm-12 text-center" style="color: red;"><p>No record Found, Evaluate again</p></div></div></div></div>';
                                   $("#shortlisted-university").append(x);
                            }else
                            {
                                $('#notevaluate').hide();
                             for(var i=0; i < length; i++)
                              {
                                 var x='<div class="card mb-1"><div class="card-body" style="background-color: #ddd"><div class="media row"><div class="col-md-3 col-sm-4"><img class="img-thumbnail mt-3" id="UNIVERSITY_IMG" src="' + generated_result[i].UNIVERSITY_IMG + '" alt="' + generated_result[i].IMG_NAME + '"></div> <div class="col-md-5 col-sm-8"><p class="h3"><a style="color:#18183b" target="_blank">' + generated_result[i].UNIVERSITY_NAME + '</a></p>  <p class="h6 font-weight-light"><a href="' + generated_result[i].WEBSITE + '" target="_blank">' + generated_result[i].WEBSITE + '</a></p><p><small></small></p></div><div class="col-md-4"><div class="row">        <div class="md-12 mt-2">       </div></div></div></div></div>';
                                   $("#shortlisted-university").append(x);

                              }
                               $( "#ModalForm" ).click(function() {
                                  $("#admissionform").show();
                                });
                                   
                            }
                             
                          })
                   });

 }); 

 $(document).ready(function() {

    var button = '<?= addslashes($_GET['EVALUATE']); ?>';

   
     var MobileNumber = $("#User_MobileNumber").val();   
              var Email = '<?= addslashes($_SESSION['Email']); ?>';
             var Country = '<?= addslashes($_SESSION['country']); ?>';
             var ExpStream = '<?= addslashes($_SESSION['stream']); ?>';
             var EntExam = '<?= addslashes($_SESSION['EntExam']); ?>';
             var EntScore = '<?= addslashes($_SESSION['EntExamScr']); ?>';
             var VerbExam = '<?= addslashes($_SESSION['VerExam']); ?>';
             var VerbScore = '<?= addslashes($_SESSION['VerExamScr']); ?>';
             if (button == "EVALUATE") 
             {

             var record = 'COUNTRY=' + Country + '&EMAIL=' + Email + '&ExpStream=' + ExpStream + '&EntExam=' + EntExam + '&EntScore=' + EntScore + '&VerbExam=' + VerbExam + '&VerbScore=' + VerbScore + '&MobileNumber=' + MobileNumber;
                    $.ajax({  
                          type: 'POST',
                          url: 'scores_savingtrraks.php',
                          data: record,
                          success:(function(data) 
                          {
                                // alert(data);
                          })
                   });
             }   
              // alert('saving'); 





 }); 

    // <button type="button" id="ModalForm" class="btn btn-primary col-md-12" data-toggle="modal" data-target="#admissionform" data-whatever="@mdo">Proceed with admission</button>        </div>
// result Generating script ends here...

// Form submission script starts here....

 $(document).ready(function() {
$("#ExperienceLetterErr").hide();



  $( "#StudentRecord" ).submit(function( event ) 
  {
    var MobileNumber = $("#User_MobileNumber").val();

    // console.log(MobileNumber);
    var nameReg = /^[A-Za-z ]+$/;
    var numberReg =  /^[0-9]/;
var numcharReg = /[1-9-\-]/;
    var CurrentDegree = $("#CurrentDegree").val();
    if(CurrentDegree == "")
     {
         $("#CurrentDegree").css("border", "1px solid red");
      
         setTimeout(function(){ $('#CurrentDegree').css("border", "1px solid"); }, 10000);
     }
     else
     {
      
      $("#CurrentDegree").css("border", "1px solid green");
      }


    var CurrentMajor = $("#CurrentMajor").val();
    if(CurrentMajor == "")
     {
         $("#CurrentMajor").css("border", "1px solid red");
      
         setTimeout(function(){ $('#CurrentMajor').css("border", "1px solid"); }, 10000);
     }
     else
     {
      
      $("#CurrentMajor").css("border", "1px solid green");
      }


    var AttendedUniversity = $("#AttendedUniversity").val();
    if(AttendedUniversity == "")
     {
         $("#AttendedUniversity").css("border", "1px solid red");
      
         setTimeout(function(){ $('#AttendedUniversity').css("border", "1px solid"); }, 10000);
     }
     else
     {
      
      $("#AttendedUniversity").css("border", "1px solid green");
      }


    var PassingYear = $("#PassingYear").val();
    if(PassingYear == "")
     {
         $("#PassingYear").css("border", "1px solid red");
      
         setTimeout(function(){ $('#PassingYear').css("border", "1px solid"); }, 10000);
     }
     else
     {
      
      $("#PassingYear").css("border", "1px solid green");
      }

    var Percentage = $("#Percentage").val();
    if(Percentage == "" || Percentage > 100 || !numcharReg.test(Percentage))
     {
         $("#Percentage").css("border", "1px solid red");
      
         setTimeout(function(){ $('#Percentage').css("border", "1px solid"); }, 10000);
     }
     else
     {
      
      $("#Percentage").css("border", "1px solid green");
      }

    var CGPAScore = $("#CGPAScore").val();
    if(CGPAScore == "" || !numcharReg.test(CGPAScore))
     {
         $("#CGPAScore").css("border", "1px solid red");
      
         setTimeout(function(){ $('#CGPAScore').css("border", "1px solid"); }, 10000);
     }
     else
     {
      
        $("#CGPAScore").css("border", "1px solid green");
      }

    var NoOfBacklogs = $("#NoOfBacklogs").val();
    if(NoOfBacklogs == "" || NoOfBacklogs > 10 || !numcharReg.test(NoOfBacklogs))
     {
         $("#NoOfBacklogs").css("border", "1px solid red");
      
         setTimeout(function(){ $('#NoOfBacklogs').css("border", "1px solid"); }, 10000);
     }
     else
     {
      
      $("#NoOfBacklogs").css("border", "1px solid green");
      }

    var YearsOfExperience = $("#YearsOfExperience").val();
    if(YearsOfExperience == ""  || YearsOfExperience > 15 || !numcharReg.test(YearsOfExperience))
     {
         $("#YearsOfExperience").css("border", "1px solid red");
      
         setTimeout(function(){ $('#YearsOfExperience').css("border", "1px solid"); }, 10000);
     }
     else
     {
      
      $("#YearsOfExperience").css("border", "1px solid green");
      }    
    var ExperienceLetter = $(".ExperienceLetter:checked").val();
    if(ExperienceLetter !== "YES" || ExperienceLetter !== "NO")
     {
         $("#ExperienceLetterErr").show();
         setTimeout(function(){ $('#ExperienceLetterErr').hide(); }, 10000);
     }
     else
     {
      $("#ExperienceLetterErr").show();
        $("#ExperienceLetterErr").css("color", "green");
      }

    var ExperienceON = $("#ExperienceON").val();
    if(ExperienceON == "")
     {
         $("#ExperienceON").css("border", "1px solid red");
      
         setTimeout(function(){ $('#ExperienceON').css("border", "1px solid"); }, 10000);
     }
     else
     {
      
      $("#ExperienceON").css("border", "1px solid green");
      }
    var LoanAmount = $("#LoanAmount").val();
    if(LoanAmount == "")
     {
         $("#LoanAmount").css("border", "1px solid red");
      
         setTimeout(function(){ $('#LoanAmount').css("border", "1px solid"); }, 10000);
     }
     else
     {
      
      $("#LoanAmount").css("border", "1px solid green");
      }

    var RequiredBenificial = $("#RequiredBenificial").val();
    if(RequiredBenificial == "")
     {
         $("#RequiredBenificial").css("border", "1px solid red");
      
         setTimeout(function(){ $('#RequiredBenificial').css("border", "1px solid"); }, 10000);
     }
     else
     {
      
      $("#RequiredBenificial").css("border", "1px solid green");
      }

    var AdmitionPlanning = $("#AdmitionPlanning").val();
    if(AdmitionPlanning == "")
     {
         $("#AdmitionPlanning").css("border", "1px solid red");
      
         setTimeout(function(){ $('#AdmitionPlanning').css("border", "1px solid"); }, 10000);
     }
     else
     {
      
      $("#AdmitionPlanning").css("border", "1px solid green");
      }

    var DreamUniversity = $("#DreamUniversity").val();
    if(DreamUniversity == "" || !nameReg.test(DreamUniversity))
     {
         $("#DreamUniversity").css("border", "1px solid red");
      
         setTimeout(function(){ $('#DreamUniversity').css("border", "1px solid"); }, 10000);
     }
     else
     {
      
      $("#DreamUniversity").css("border", "1px solid green");
      }

var Email = '<?= addslashes($_SESSION['Email']); ?>';
    var StudentRecordString = 'CurrentDegree=' + CurrentDegree + '&CurrentMajor=' + CurrentMajor + '&AttendedUniversity=' + AttendedUniversity + '&PassingYear=' + PassingYear + '&Percentage=' + Percentage + '&CGPAScore=' + CGPAScore + '&NoOfBacklogs=' + NoOfBacklogs + '&YearsOfExperience=' + YearsOfExperience + '&ExperienceLetter=' + ExperienceLetter + '&ExperienceON=' + ExperienceON + '&LoanAmount=' + LoanAmount + '&RequiredBenificial=' + RequiredBenificial + '&AdmitionPlanning=' + AdmitionPlanning + '&DreamUniversity=' + DreamUniversity + '&Email=' + Email;


   if (CurrentDegree !== '' && CurrentMajor !== '' && AttendedUniversity !== '' && PassingYear !== '' && Percentage !== '' && CGPAScore !== '' && NoOfBacklogs !== '' && YearsOfExperience !== '' &&  ExperienceON !== '' && LoanAmount !== '' && RequiredBenificial !== '' && AdmitionPlanning !== '' && DreamUniversity !== '')
        {
            // console.log(ExperienceLetter);
                     $.ajax({  
                          type: 'POST',
                          url: 'studentrecord.php',
                          data: StudentRecordString,
                          beforeSend: function(){
                              // Show image container
                              $("#loader4").show();
                             },

                          success:(function(data) 
                          {

                                 // alert(data);
                                $("#loader4").hide();
                                if(data === 'updated'){
                                            $('#form_responceupdated').modal('show');
                                }else if(data === 'inserted'){
                                        $('#form_responceinserted').modal('show');
                                }
                                else{
                                    $('#form_responcefail').modal('show');
                                }
                           
                                 
                                    // $("#form_responce").show();
                          })
                   });
        }
  event.preventDefault();
});
 });

// Form submission script ends here...

</script>
