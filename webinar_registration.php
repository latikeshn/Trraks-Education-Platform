<?php 
include("header.php");


 ?>
<div class="container">
  <div class="row">
    <div class="header  col-md-12 col-sm-12 mt-4">
      
    <h1 class="text-center" style="color:#e76318"><b>WEBINAR REGISTRATION </b></h1>
    <h4 text align="center" style="color: #ff4000">Register yourself to get free webinar session</h4>
    </div>
  </div>

<div class="row mt-4">
  <div class="col-md-7">
    <div class="row">

      <div class="col-md-12 col-sm-12">
              <h5 class="text-center"><b>Webinar Faculty Profile</b></h5> <br>
              <b class="ml-4">Ms.Shemida</b>
              <ul>
                    (English language specialist and certified behavioral therapist at plusPrep Education)<br>
                   <i class="fa fa-circle" style="font-size:10px;color:orangered"></i> Over 11 years of teaching experience<br>
                   <i class="fa fa-circle" style="font-size:10px;color:orangered"></i> Has taught English programs & Business Communication in over 10 countries<br>
                   <i class="fa fa-circle" style="font-size:10px;color:orangered"></i> Postgraduation inpsychotherapy(Middlesex University,UK)<br>
                   <i class="fa fa-circle" style="font-size:10px;color:orangered"></i> Has a perfect 9 band score on the IELTS<br>
                   <i class="fa fa-circle" style="font-size:10px;color:orangered"></i> Scored 86 on the PTE<br>
                   <i class="fa fa-circle" style="font-size:10px;color:orangered"></i> Trained over 3000 students on English Language program         
              </ul>
      </div>


  
         <div class="col-md-12 col-sm-12">
              <h5 class="text-center" ><b>Contents of webinar</b></h5>
              <ul>
                        <i class="fa fa-check" style="font-size:20px;color:orangered"></i> introduction to PTE*<br>
                   <i class="fa fa-check" style="font-size:20px;color:orangered"></i> Question Types & Score Pattern*<br>
                    <i class="fa fa-check" style="font-size:20px;color:orangered"></i> Real Time Question Solving*<br>
                    <i class="fa fa-check" style="font-size:20px;color:orangered"></i> How to Ace PTE Sections*<br>
                   <i class="fa fa-check" style="font-size:20px;color:orangered"></i> How to build Solid Vocabulary*<br>
                   <i class="fa fa-check" style="font-size:20px;color:orangered"></i> FAQ's*            
              </ul>

          </div>      
    </div>



  </div>
     <div class="col-md-5 col-sm-12">
          <h5 class="text-center mb-4" style="color: #1c3664;font-size: 20px;" ><b>TAKE PART IN THE WEBINAR </b></h5>
        <form id="WEBINAR_REGISTER" method="POST">
              <div class="form-group row">
                <div class="col">
                  <input type="text" class="form-control" id="Student_Name" value="<?=$_SESSION['Full_Name'];?>" placeholder="Enter Full Name" >
                </div>
              </div>
              <div class="form-group row">
                <div class="col">
                  <input type="text" class="form-control" id="Student_Contact" value="<?=$_SESSION['Mo_No'];?>" placeholder="Enter Best Contact No." >
                </div>
              </div>
              <div class="form-group row">
                <div class="col">
                  <input type="email" class="form-control" id="Student_Email" value="<?=$_SESSION['Email'];?>" placeholder="Enter Email For Verification" >
                </div>
              </div>
                   
              <div class="form-row space">
                <div class="col">
                  <input type="text" class="form-control" id="Student_Current_City" value="<?=$_SESSION['Current_Location'];?>" placeholder="Your Current City" >
                </div>
                <div class="col">
                  <input type="text" class="form-control" id="Student_Current_State" placeholder="Your Current State" >
                </div>
              </div>

              <div class="form-group row">
                <div class="col">
                  <select class="form-control mt-3" id="Country_Planning" name="" >
                    <option value="" selected>Country you are plannig</option>
                    <option value="USA">USA</option>
                    <option value="UK">UK</option>
                    <option value="Canada">Canada</option>
                    <option value="Germany">Germany</option>
                    <option value="Australia">Australia</option>
                    <option value="New Zealand">New Zealand</option>
                  </select>
                </div>
              </div>
<!--               <div class="form-group row">
                <div class="col">
                      <div class="g-recaptcha" data-sitekey="6LebLk4UAAAAAEvFxZSD3EidMDoUfzEwdCH9kWM1"></div>
                </div>
              </div> -->
              <div class="form-group row">
                <div class="col">
                      <small id="emailHelp" class="form-text text-muted text-justify" style="color:green;">By clicking register now, you agree to our Terms and confirm that you have read our <a href="terms.php"  target="_blank">Data Policy</a>. You may receive SMS message and email notifications from Trraks.com and can opt out at any time.</small>
                </div>
              </div>             
              <div class="form-group row ">
                <div class="col">
                    <!-- <i class="fa fa-check-circle mx-2 " style="color:orangered" aria-hidden="true"></i> -->
                    <button class="py-3 btn btn-primary button rounded-5 btn-block" name="WEBINAR_REGISTER" type="submit" value="" style="background-color: #2a2a2a; color:orangered;"><span id="loader"><img src="img/form_loading.gif" alt="form_loader" width="25px"></span> REGISTER NOW</button>
                </div>
              </div>
                      <!-- <button type="submit" class="btn btn-primary button rounded-5 btn-block"><b>Register Now</b></button> -->

        </form>
      </div>
      <div class="container py-4 ml-3 mr-3">
          <div class="row justify-content-center bg-dark-blue align-items-center py-4">
           
           <div class="col-md-3 col-sm-6 text-center">
               <h5><b>Next Seminar</b></h5>
           </div>
           <div class="col-md-3 col-sm-6 text-center">
               <h5><i class="fas fa-calendar mx-2" style="color:orangered" aria-hidden="true"></i><b>Date</b><br>
               <!-- May 1st 2018 --> - </h5>
               
           </div>
           <div class="col-md-3 col-sm-6 text-center">
               <h5><i class="fa fa-clock-o" style="color:orangered" aria-hidden="true"></i><b>time</b><br>
               <!-- 10:00am - 3:30pm --> - </h5>
           </div>
           <div class="col-md-3 col-sm-6 text-center">
               <h5 ><i class="fas fa-location-arrow mx-2" style="color:orangered;" aria-hidden="true"></i><b>Location</b> <br>
               - </h5>
           </div>
          </div>
      </div>    
  </div>

</div>
<div id="modaloutput">  
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_responceemailfail">
  Launch demo modal
</button> -->

<div class="modal fade bottom" id="form_responceemailfail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;">
    <div class="modal-dialog modal-frame modal-fluid modal-bottom " role="document">
        <div class="modal-content" style=" background-color: #ff000096;">
            <div class="modal-body text-center">
               <span> <h3 style="color:white;">Error while sending verification link on Email. Enter valid Email ID </h3> </span>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

  <div class="modal fade bottom" id="form_responceinsert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;" >
      <div class="modal-dialog modal-frame modal-fluid modal-bottom " role="document">
          <div class="modal-content"  style=" background-color: #5fff426b;">
              <div class="modal-body text-center">
                 <span> <h3 style="color:white;">Verification link sent on your email <br>Verify your Email ID</h3> </span>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>

 <div class="modal fade bottom" id="form_responceExists" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;" >
    <div class="modal-dialog modal-frame modal-fluid modal-bottom " role="document">
        <div class="modal-content"  style=" background-color: #5fff426b;">
            <div class="modal-body text-center">
               <span> <h3 style="color:white;">You are already registered with this Email ID</h3> </span>
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

include("footer.php");

  ?>

  <script>

    $(document).ready(function() {
$("#loader").hide();
  $( "#WEBINAR_REGISTER" ).submit(function( event ) {


    var nameReg = /^[A-Za-z ]+$/;
    var numberReg =  /^[0-9]/;
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var address1Reg = /^[A-Za-z]+$/;
    var address2Reg = /^[A-Za-z]+$/;

    var Student_Name = $("#Student_Name").val();

     if(Student_Name == "" || !nameReg.test(Student_Name))
     {
      $("#Student_Name").css("border", "1px solid red");
      
      setTimeout(function(){ $('#Student_Name').css("border", "1px solid"); }, 2000);
     }
     else
     {
      
      $("#Student_Name").css("border", "1px solid green");
      }

      var Student_Contact = $("#Student_Contact").val();
       if(Student_Contact == "" || !numberReg.test(Student_Contact))
       {
        $("#Student_Contact").css("border", "1px solid red");
        
        setTimeout(function(){ $('#Student_Contact').css("border", "1px solid"); }, 2000);
       }else
       {
        
        $("#Student_Contact").css("border", "1px solid green");
        }

      var Student_Email = $("#Student_Email").val();
      if(Student_Email == "" || !emailReg.test(Student_Email))
       {
        $("#Student_Email").css("border", "1px solid red");
        
        setTimeout(function(){ $('#Student_Email').css("border", "1px solid"); }, 2000);
       }else
       {
        
        $("#Student_Email").css("border", "1px solid green");
        }
      var Student_Current_City = $("#Student_Current_City").val();

      if(Student_Current_City == "" || !address1Reg.test(Student_Current_City))
       {
        $("#Student_Current_City").css("border", "1px solid red");
        
        setTimeout(function(){ $('#Student_Current_City').css("border", "1px solid"); }, 2000);
       }else
       {
        
        $("#Student_Current_City").css("border", "1px solid green");
        }


      var Student_Current_State = $("#Student_Current_State").val();
      if(Student_Current_State == "" || !address2Reg.test(Student_Current_City))
       {
            $("#Student_Current_State").css("border", "1px solid red");
            
            setTimeout(function(){ $('#Student_Current_State').css("border", "1px solid"); }, 2000);
       }
       else
       {
            $("#Student_Current_State").css("border", "1px solid green");
       }



      var Country_Planning = $("#Country_Planning").val();
      if(Country_Planning == "")
       {
          $("#Country_Planning").css("border", "1px solid red");
          
          setTimeout(function(){ $('#Country_Planning').css("border", "1px solid"); }, 2000);
       }else
       {
        
           $("#Country_Planning").css("border", "1px solid green");
        }

if (Student_Name !== '' && Student_Contact !== '' && Student_Email !== '' && Student_Current_City !== '' && Student_Current_State !== '' && Country_Planning !== '') {

        var StudentRecordString = 'Student_Name=' + Student_Name + '&Student_Contact=' + Student_Contact + '&Student_Email=' + Student_Email + '&Student_Current_City=' + Student_Current_City + '&Student_Current_State=' + Student_Current_State + '&Country_Planning=' + Country_Planning;
                     $.ajax({  
                          type: 'POST',
                          url: 'web_regi.php',
                          data: StudentRecordString,
                          beforeSend: function(){
                              // Show image container
                              $("#loader").show();
                             },
                          success:(function(data) 
                          {   
                            // alert(data);
                            $("#loader").hide();
                                if(data === 'Exists'){
                                            $('#form_responceExists').modal('show');
                                }else if(data === 'inserted'){
                                        $('#form_responceinsert').modal('show');
                                }else if(data === 'mailfail'){
                                        $('#form_responceemailfail').modal('show');
                                }
                                else if(data === 'fail'){
                                    $('#form_responcefail').modal('show');
                                }
                          })
                   });   
     }

    // console.log(Student_Name);
    // console.log(Student_Contact);
    // console.log(Student_Email);
    // console.log(Student_Current_City);
    // console.log(Student_Current_State);
    // console.log(Country_Planning);

  event.preventDefault();
});
 });

  </script>