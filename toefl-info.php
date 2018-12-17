<?php 
include("header.php");
 ?>
<style>
<style>
    .clr{
        color: orangered;
    }  
    .txt{
        text-align: justify;
    }
    
    .progress-container {
  width: 100%;
  height: 8px;
  background: #ccc;
}

.progress-bar {
  height: 8px;
  background: orangered;
  width: 0%;
}
 h4{
        font-weight: 400;
    }
    h5{
        font-weight: 400;
    }

/* Desktops and laptops ----------- */
@media only screen  and (min-width : 1224px) {

    .menus
    {
        position: fixed;

      width: 100%;
    }
}    
</style>
<!-- <body> -->
<div class="container">

       <!--start of overview-->
    
    <div class="bd-example mt-5" data-spy="scroll" data-target="#navbar-example" style="position: relative;" id="spy-eg">
  <div class="row ">
    <div class="col-md-4 col-sm-12 menu-items ">
          <nav id="navbar-example3" class="navbar navbar-light bg-light menus">

                  <nav class="nav nav-pills flex-column" >
                    <a class="nav-link clr" href="#item-1">What is Toefl?</a>

                    <a class="nav-link clr" href="#item-2">TOEFL Exam.</a>

                    <a class="nav-link  clr" href="#item-3">TOEFL Information.</a>
                  </nav>
                    
        </nav>
    </div>
    <div class="col-md-8 col-sm-12">
     <div class="progress-container sticky-top">
    <div class="progress-bar" id="myBar"></div>
  </div>  
      <div data-spy="scroll" data-target="#list-example #navbar-example3" data-offset="0"  class="scrollspy-example-2">
       
        <h4 id="item-1" style="color: darkblue;">Toefl (Test of English as Foreign Language)?</h4>
     <p class="txt">The Test of English as a Foreign Language (web based test) is intended to quantify whether
somebody is set up to live and flourish in an English-talking condition. More than 1 million
individuals overall select to take an English-talking capability exam every year with a specific end
goal to go to an English-talking college or just as a refresher course to enhance their English abilities.
TOEFL scores are frequently utilized by colleges and universities as a confirmation prerequisite for
understudies who have gotten their training in a non-English talking nation.<br><b> The TOEFL test
measures the capacity of non-local English speakers to utilize and comprehend English as it&#39;s
perused, composed, heard and talked in the college classroom. In the event that you need to learn
at an English-talking college or program, no other test can get you to the same number of goals
around the globe as the TOEFL test.</b></p>
       
        <h4 id="item-2" style="color: darkblue;">The TOEFL exam comprises of the accompanying four areas:</h4>
        <p><b>Reading</b></p>
        <p class="txt">The perusing area of the TOEFL exam incorporates two principle question sorts: Multiple Choice and
Drag-and- Drop. This area contains between 36-56 addresses and is 60-80 minutes long.</p>
       
       <p><b>Listening</b></p>
       <p class="txt">The Listening area of the TOEFL exam contains comparable sorts of inquiries as the perusing
segment (Multiple Choice and Drag-and- Drop). This segment has between 34-51 addresses and is
around 60-a hour and a half long.</p>
      
       <p><b>Speaking</b></p>
       <p class="txt">Test takers are furnished with a receiver to record themselves reacting to two sorts of prompts in
the talking area. Two assignments in provoke one comprise of free reactions, and four undertakings
in incite two require test takers to react to a progression of discussions, addresses and perusing

sections. Test takers have approximately one moment for each incite to record their reactions.
Altogether, the talking segment takes 20 minutes to finish.</p>
      
        <p><b>Writing</b></p>
       <p class="txt">The exam closes with the composition area, which requires test takers to create composed
reactions to two errands: one free undertaking, and one assignment in which a reaction to perusing
and listening material is made. This area comprises of two expositions and is 50 minutes in length.</p>
       
       <hr>
       <h4 id="item-3" style="color: darkblue;">TOEFL Exam Information:</h4>
        <p class="txt">This area assesses your comprehension of communicated in English in North America. This segment
has three sections. You will have 35 minutes to answer 50 questions.</p>
       <p><b>Section A 30 questions<br><br>
            Section B 8 questions<br><br>
            Section C12 questions<br></b></p>
           
       
       <p class="txt">The Institutional TOEFL is controlled by schools and colleges. The Educational Testing Service (ETS)
sends the test materials which have been utilized either on the Friday Testing Program or the
Saturday Testing Program to the school or college that controls the test. The school or college that
directs the test utilizes the test score for the situation of the understudies who wish to select in an
English as a Second Language (ESL) program or for affirmation purposes into the school or college
customary projects.<br><br>
 Different foundations, be that as it may, don&#39;t consider the Institutional TOEFL
test comes about legitimate for admission to their own particular ESL or general projects. The
expense for the Institutional TOEFL shifts. A few establishments charge US $30 for the test. In spite
of the fact that there is no passing or coming up short score for TOEFL, for the most part a score of
400 is viewed as low and a score of 600 or above magnificent.<br><br>
Every school, college, or
establishment has its own particular TOEFL score confirmation necessity. The score required differs
relying upon the field of study (non-specialized or specialized) and the program (two-year,
undergrad or graduate) for which you are applying. A score of 400 or above for a two-year program,
500 or above for an undergrad program, and 550 or above for a graduate program is by and large
required.</p>
       
        
     
     
      </div>
    </div>
  </div>
  
</div>
    </div>
<!--   <div class="container-fluid">  
          <div class="row ">
            <div class="button position-sticky text-center js-bottom-corner-btns" style="background-color: #fd53207a; width: 50px; left: 100%;">
               <a href="#top" class="mk-quick-contact-wrapper  js-bottom-corner-btn js-bottom-corner-btn--contact is-active"><i class="fa fa-angle-double-up h2"></i></a>
            </div> 
        </div> 
 </div> -->
  <?php 
include("footer.php");
   ?>  
<script>
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}
</script>   

<script>
    $('#spy-eg').scrollspy({ target: '#navbar-example' })
  </script>
