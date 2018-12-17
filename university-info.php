<?php 
include("header.php");
 $_SESSION['worldrank'] = $_GET['worldrank'];
 $_SESSION['country'] = $_GET['country'];
 ?>
<div class="container">

  <div class="card m-2" >
              <div class="row justify-content-center m-2">
                    <div class="col-md-3 col-sm-12 text-center" >
                        <div class="card" id="university_imgname">
                          <!-- ajax fetch respoce image -->
                        </div>
                      
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                         <h3><strong id="university_name">
                          <!-- Ajax fetch university name here -->
                            
                          </strong></h3><h5 style="margin-bottom: 4px;">
                            <strong id="university_address">Nashik,Australia</strong></h5>
                    </div>
                    <div class="col-md-3 col-sm-6">
                      <b>Country Rank </b><b class="clr">#45</b><br>
                      <b>World Rank </b><b class="clr" id="university_worldrank">1</b>
                    </div>
               </div>
  <div class="card-body">
   <div class="row">
          <div class="col-md-6 col-sm-12">

             <div class="card-header" style="font-size: 20px; padding: 2px;"><h4 class="card-title">OVERVIEW</h4>    
              </div>
                      
              <p class="card-text" id="overview" style="text-align: justify;"><span class="mr-5"></span>
              UNSW Sydney(The University of New South Wales) is one of the worlds leading research and teaching universities. Established in 1949, we are home to more than 52,000 students from over 130 countries and an alumni community of 250,000 than spans the world.<br>
              No longer young in years we ramain young in sprit, committed to pioneering research and preparing the next genertion of talented global citizens for career success.<br>
              A postgraduate degree at UNSW Australia is your opportunity to tackle the world’s challenges alongside the brightest minds in the country. Close partnerships with government and industry mean our researchers benefit from knowledge sharing and better realise commercial breakthroughs.</p>
          </div>
             
             <!--start of location-->
             <div class="col-md-6 col-sm-12">
                <div class="card bg-light">
                    <div class="card-header" style="font-size: 20px; padding: 3px;">
                      University cutoff Scores
                    </div>
                    <div class="card-body col-md-12 col-sm-3">
                   <!--      GRE : <span>360  &emsp;</span>
                         GMAR : <span>908 &emsp;</span>
                         IELTS : <span>9 &emsp;</span>
                         PTE : <span>90 &emsp;</span>
                         TOEFL : <span>90 &emsp;</span> -->
<!--                          <div style="float:left; margin-right:50px;">
                             GRE <br>
                             <span id="GRE_CUTOFF"> 340 </span>
                          </div>
                
                         <div style="float:left; margin-right:50px;">
                             GMAT <br>
                               <span id="GMAT_CUTOFF"> 800 </span>
                          </div>
                         <div style="float:left; margin-right:50px;">
                             IELTS <br>
                              <span id="IELTS_CUTOFF"> 9 </span>
                          </div>
                          <div style="float:left; margin-right:50px;">
                             PTE <br>
                               <span id="PTE_CUTOFF"> 90 </span>
                          </div>
                          <div style="float:left;">
                             TOEFL <br>
                               <span id="TOEFL_CUTOFF"> 90 </span>
                          </div> -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">GRE</th>
      <th scope="col">GMAT</th>
      <th scope="col">IELTS</th>
      <th scope="col">PTE</th>
      <th scope="col">TOEFL</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td ><span id="GRE_CUTOFF"> - </span></td>
      <td><span id="GMAT_CUTOFF"> - </span></td>
      <td><span id="IELTS_CUTOFF"> - </span></td>
      <td><span id="PTE_CUTOFF"> - </span></td>
      <td> <span id="TOEFL_CUTOFF"> - </span></td>
    </tr>
  </tbody>
</table>
                   
                    </div>
                </div>
         <!--end of location-->
            </div>  

    </div>
              
  </div>
</div>
   <!--end of overview-->
             <!--start of student and fees structure-->
<div class="card m-2">
            <div class="card-header" style="font-size: 20px;">
              University Highlights
            </div>         
             
             
    <div class="row m-2">
      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title" style="font-size: 25px;">Students and Staff</h5>
            <p class="card-text"><b>Total Students - 39,784</b><br></p>
                       <ul style="list-style-type:circle">
                          <li>28% PG Students</li>
                          <li>78% UG Students</li>
                          
                        </ul>  
                        <p class="card-text"><b>International students - 14,292</b><br></p>
                          <ul style="list-style-type:circle">
                            <li>49% PG Students</li>
                            <li>51% UG Students</li>
                            
                          </ul>  
                         <hr>
                          <p class="card-text"><b>Total faculty staff - 2,924</b><br></p>
                            <ul style="list-style-type:circle">
                                <li>1612 International Staff</li>
                                <li>1312 Domestic Staff</li>
                            </ul>  
           </div>
        </div>
      </div>
      
      
      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title" style="font-size: 25px;">Fees Structure</h5>
            <p class="card-text">
                <b> Application Fees : </b> $45 <br>
                <b> Tuetion Fees : </b> $28,000 - $30,000 <br>
            </p>
            
          </div>
          </div>
        <!--start of loction-->
      
        <div class="card mt-2">
          <div class="card-header">
            <h5 class="card-title" style="font-size: 25px;">Location</h5>
            </div>
          <div class="card-body">
            
              <div id="googlemap" style="border: 2px solid grey; width:200px; height:230px;">
<!--                 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3310.934201522396!2d151.2288289!3d-33.917093!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12b18b08c4ec05%3A0x59642a2ddff49922!2sThe+Science+Theatre!5e0!3m2!1sen!2sin!4v1521520717574" style="margin:2px; border:0; width:auto; height:220px; position: absolute;" ></iframe> -->
              </div>            
          </div>
        </div>
            
      <!--end of location-->
      
      </div>
    </div>    
</div>
    <!-- end of student and fee structure-->
   <!--start of available courses-->
   
<div class=" m-2">
          <div class="card">
          <div class="card-body">
                  <table class="table">
                        <thead>
                          <tr>
                            <th>
                                <h3 class=" mb-9">Importent Links</h3>
                            </th>
                          </tr>
                        </thead>
                    <tbody>
                          <tr>
                            <td>
                                <ul>
                                  <li><span style="font-size: 17px;">University link :</span> <span ><a href="" class="university_url" target="_blank"> <!-- university link from database --> </a></li>
                                  <li>Application link :<a href=""> www.google.com</a></li>
                                  <li>Scholarship link : <a href=""> www.google.com</a></li>
                                </ul>
                            </td>
                          </tr>
                    </tbody>    
                  </table>
          </div>
          </div>

</div>
</div>

</div>

 <?php 
include("footer.php");
  ?>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
 <script>

  $(document).ready(function() {
             var Country = '<?= addslashes($_SESSION['country']); ?>';
             var worldrank = '<?= addslashes($_SESSION['worldrank']); ?>';

             var record = "Country=" + Country + "&worldrank=" + worldrank ;
             $.ajax({
                  type: 'POST',
                  url: 'univ-info-generator.php',
                  data: record,
                  success: (function(data){
                      // alert(data);
                       var generated_result = JSON.parse(data);
                       $('#university_imgname').html('<img class="" src="' + generated_result[0]['UNIVERSITY_IMG'] + '" alt="' + generated_result[0]['IMG_NAME'] + '"  style="width: auto;height: 100px;">');
                       $("#university_name").html(generated_result[0]['UNIVERSITY_NAME']);
                       $(".university_url").html(generated_result[0]['WEBSITE']);
                       $(".university_url").attr("href", generated_result[0]['WEBSITE']);
                       $("#university_worldrank").html(generated_result[0]['UNIVERSITY_RANK']);
                       $("#GRE_CUTOFF").html(generated_result[0]['GRE_CUTOFF']);
                       $("#GMAT_CUTOFF").html(generated_result[0]['GMAT_CUTOFF']);
                       $("#IELTS_CUTOFF").html(generated_result[0]['IELTS_CUTOFF']);
                       $("#PTE_CUTOFF").html(generated_result[0]['PTE_CUTOFF']);
                       $("#TOEFL_CUTOFF").html(generated_result[0]['TOEFL_CUTOFF']);
                       // $("#overview").html(generated_result[0]['scholarship']);
                  })
             }); 
  });
//   function dosomething(data){
//     var generated_result = JSON.parse(data);
//     var length = data.length;
//     console.log(generated_result);
//     var UNIVERSITY_NAME = generated_result[0]['UNIVERSITY_NAME'];
//     alert(UNIVERSITY_NAME);


//      // console.log(generated_result['UNIVERSITY_NAME']);
// // for (var i = 0;i< length;i++) {
// // var universityID = generated_result[i].UNIVERSITY_ID;
// // console.log(generated_result[i].UNIVERSITY_RANK);
// // console.log(generated_result[i].UNIVERSITY_NAME);
// // console.log(generated_result[i].WEBSITE);
// // }
//      // console.log(universityID);
//     // console.log(generated_result.);
//     // console.log(generated_result.);
//     //    console.log(data);

//   }
// (function myMap() {
// var mapOptions = {
//     center: new google.maps.LatLng(51.5, -0.12),
//     zoom: 10,
//     mapTypeId: google.maps.MapTypeId.HYBRID
// }
// var map = new google.maps.Map(document.getElementById("googlemap"), mapOptions);
// })();

 </script> 