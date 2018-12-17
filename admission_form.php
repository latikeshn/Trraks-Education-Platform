<?php 
include('header.php');
 ?>
<div class="container">
	<div class="row m-2  justify-content-md-center">
		<div class="col-md-12 text-center">
			<h2><b>ADMISSION FORM</b></h2>
		</div>
		<div class="col-md-6 align-self-center ">
		<form>
          <div class="form-group">
            
            <input type="text" class="form-control drop" id="Student_name" value="" placeholder="Your Full Name">
          </div>
		<div class="row"> 
	          <div class="form-group col-md-6 col-sm-6">
	            
	            <input type="email" class="form-control drop" id="Student_email" value="" placeholder="Enter Your Email">
	          </div>
	         <div class="form-group col-md-6 col-sm-6">
	            
	            <input type="text" class="form-control drop" id="email_otp" value="" placeholder="Coad recieved on Email">
	          </div>
					
		</div>

          <div class="row"> 
          <div class="form-group col-md-6 col-sm-6">
            
            <input type="tel" class="form-control drop" id="Student_mobile" value="" placeholder="Mobile No. Eg: 918993###### ">
          </div>
           <div class="form-group col-md-6 col-sm-6">
	            
	            <input type="text" class="form-control drop" id="mobile_otp" value="" placeholder="OTP recieved on mobile number">
	          </div>

          </div>  <small id="send_notification" style="color: green;">Verification codes sent to mentioned email and contact number.</small>
          <div class="form-group" style="float: right">
          	<img src="img/trraks_loader.gif" id="trraks_loader" alt="form_loader" width="55px"></span>
          	<button class="btn btn-default" id="admission_otps" type="button">Send OTP's</button>
          </div>
          <div class="form-group">
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
                   
      <hr>
           <div class="form-group row">
               <div class="col">
                              <small id="emailHelp" class="form-text text-muted text-justify" style="color:green;">By clicking Apply, you agree to our Terms and confirm that you have read our <a href="terms.php"  target="_blank">Data Policy</a>. You may receive SMS message and email notifications from Trraks.com and can opt out at any time.</small>
               </div>
         </div>
          <div class="form-group">
            <button type="button" id="apply_admission" class="btn btn-lg btn-primary" style="width:100%; background-color:#00193f;" > APPLY <span id="loader3"><img src="img/form_loading.gif" alt="form_loader" width="25px"></span></button>
          </div>
        </form>


		</div>
	</div>
</div>


 <?php 
include('footer.php');
  ?>

<script>
	 $("#trraks_loader").hide();
	  $(document).ready(function() {

          $('#send_notification').hide();
			            
			$( "#admission_otps" ).click(function() {
				console.log("clicked");
			          var STUD_NAME = $('#Student_name').val();
			          var STUD_EMAIL = $('#Student_email').val();
			          var STUD_MOBILE = $('#Student_mobile').val();
			          var verification_data = 'NAME=' + STUD_NAME + '&EMAIL='+ STUD_EMAIL + '&MOBILE=' + STUD_MOBILE;
			          if (STUD_EMAIL.match(/([\w\-]+\@[\w\-]+\.[\w\-]+)/) && STUD_MOBILE.match(/^91[0-9]{10}/)) {
			                $.ajax({  
			                  type: 'POST',
			                  url: 'sendotps.php',
			                  data: verification_data,
	                          beforeSend: function(){
	                              // Show image container
	                             	 $("#trraks_loader").show();
	                             },
			                  success:(function(data) 
			                  {
			                  	// alert(data);
			                  	$("#trraks_loader").hide();
			                        if (data == "true") {
			                                  alert("This email or contact number is already requested for Admission Process.");
			                        }else if(data == "msgfail"){
			                          alert("Enter valid email address, Mail not sent on given email ID.");
			                        }else if( data == "send"){
			                          // alert("Check your email and mobile number for verification code.");
			                                                    $("#send_notification").show();
			                          setTimeout(function() { $("#send_notification").hide(); }, 5000);   
			                        }
               			         $("#Student_email").css("border", "1px solid green");
                                        $("#Student_mobile").css("border", "1px solid green");
			                  })
			                });  
			              }else{
			                      if (!STUD_EMAIL.match(/([\w\-]+\@[\w\-]+\.[\w\-]+)/)) 
			                      {
			                       $("#Student_email").focus();
                                      $("#Student_email").css("border", "1px solid red");
				                   }else if (!STUD_MOBILE.match(/^91[0-9]{10}/)) 
				                   {
				                   	$("#Student_mobile").focus();
                                        $("#Student_mobile").css("border", "1px solid red");
				                   }
			              }
			});
			 // event.preventDefault();
});


</script>

  <script>


  	 var source = '<?= addslashes($_GET['source']); ?>';
  	 // alert(source);
  	var nameReg = /^[A-Za-z ]+$/;
    var numberReg =  /^[0-9]/;    
        $(document).ready(function(){
             $("#loader3").hide();
             // $("#loader4").hide();
                $("#apply_admission").click(function(){

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

                 var Email_code = $("#email_otp").val();
                    if(Email == "")
                     {
                         $("#email_otp").css("border", "1px solid red");
                      
                         // setTimeout(function(){ $('#Student_name').css("border", "1px solid"); }, 2000);
                     }
                     else
                     {
                      
                      $("#email_otp").css("border", "1px solid green");
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


                  var Mobile_otp = $("#mobile_otp").val();
                    if(Mobile_number == "")
                     {
                         $("#mobile_otp").css("border", "1px solid red");
                      
                         // setTimeout(function(){ $('#Student_mobile').css("border", "1px solid"); }, 2000);
                     }
                     else
                     {
                      
                      $("#mobile_otp").css("border", "1px solid green");
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





   if (Name !== '' && Email !== '' && Mobile_number !== '' && current_location !== '' && expected_country !== '' && expected_stream !== '' && desired_program !== '' && desired_intake_date !=='' && desired_intake_season !== '' &&  desired_intake_year !== '' && loan_requirement !== '' && loan_amount !== '' && EntranceExam !== '' &&  EntranceExamScore !== '' && VerbalExam !== '' && VerbalExamScore !== '' && univname !== '' && Email_code !== '' && Mobile_otp !== '')
        {

                      var data_string = "NAME=" + Name + "&EMAIL=" + Email + "&Mobile_number=" + Mobile_number + "&current_location=" + current_location + "&expected_country=" + expected_country + "&expected_stream=" + expected_stream + "&desired_program=" + desired_program + "&desired_intake_season=" + desired_intake_season + "&desired_intake_year=" + desired_intake_year + "&loan_requirement=" + loan_requirement + "&loan_amount=" + loan_amount + "&EntranceExam=" + EntranceExam + "&EntranceExamScore=" + EntranceExamScore + "&VerbalExam=" + VerbalExam + "&VerbalExamScore=" + VerbalExamScore + "&univname=" + univname + "&desired_intake_date="+ desired_intake_date + "&source=" + source + "&Email_code="+ Email_code + "&Mobile_otp=" + Mobile_otp; 
                

                     $.ajax({  
                          type: 'POST',
                          url: 'admission_process.php',
                          data: data_string,
                          beforeSend: function(){
                              // Show image container
                             	 $("#loader3").show();
                             },
                          success:(function(data) 
                          {
                               alert(data);
                             $("#loader3").hide();
                             if (data == "inserted") 
                             {
                                alert("Your application for admission submitted successfully.");
                                $('#admissionform').modal('hide');
                                window.location.href = "www.trraks.com";
                             }else if(data == "fail")
                             {
                                    alert("something went wrong while submitting data.Try again");
                                    // $('#admissionform').modal('hide');
                                    // window.location.href = "universities.php";
                             }else if (data == "exists") 
                             {
                                    alert("Already applied for admission process");
                                    // $('#admissionform').modal('hide');
                                     window.location.href = "www.trraks.com";
                             }else if( data == "notmatched"){
                             		alert("OTP not matched, Please check entered Verification coad's.");
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
  </script>