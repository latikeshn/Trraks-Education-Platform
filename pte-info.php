<?php 
include("header.php");
 ?>
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
</style>
<!-- <body> -->
<div class="container">

   
    <!--start of overview-->
    
    <div class="bd-example mt-5" data-spy="scroll" data-target="#navbar-example" style="position: relative;" id="spy-eg">
  <div class="row ">
    <div class="col-md-4 col-sm-12 ">
          <nav id="navbar-example3" class="navbar navbar-light bg-light ">

                  <nav class="nav nav-pills flex-column" >
                    <a class="nav-link clr" href="#item-1">What is PTE (Pearson Test of English)?</a>

                    <a class="nav-link clr" href="#item-2">PTE Approach:</a>

                    <a class="nav-link  clr" href="#item-3">Composed Discourse incorporates 4 criteria</a>
                  </nav>
                    
        </nav>
    </div>
    <div class="col-md-8 col-sm-12">
     <div class="progress-container sticky-top">
    <div class="progress-bar" id="myBar"></div>
  </div>  
      <div data-spy="scroll" data-target="#list-example #navbar-example3" data-offset="0"  class="scrollspy-example-2">
       
        <h4 id="item-1" style="color: darkblue;">PTE (Pearson Test of English)?</h4>
     <p class="txt">The PTE is a much as of late contrived English dialect test like IELTS and TOEFL. It has been propelled
overall just in 2009. PTE is the Pearson&#39;s Test of English which is being led by the Pearson Language
Tests is the most youthful one of its sort which is acknowledged by most B-schools over the world.
The primary viewpoints that keep it ahead in the race are that the consequences of this test are

given inside five working days, which is truly speedier contrasted with both the IELTS and TOEFL.
Likewise, the test outcomes are more extravagantly planned than those given for the IELTS. The
thermometer-style Global Scale of English is utilized to give a correct review of the English dialect
abilities in different territories, for example, linguistic use, familiarity, elocution and composing
aptitudes too. This test has picked up acknowledgment by more than 6000 colleges over the globe.
This PC based test assesses the capability of the hopeful in English Language and the general scores
go from is 10-90 points.<br><br>
      Inquiries regularly test 2 abilities together, for example, listening and reading or reading and talking.
The entire test is done in a solitary session, enduring 3 hours and is taken sitting at a PC in a safe test
condition. The talking some portion of the exam is done at the PC. Your voice is recorded and sent
for stamping. PTE Academic surveys the greater part of your English aptitudes — reading, writing,
listening and speaking, and is intended to reflect how you will utilize English at think about, at work,
and at play, in your new life abroad. The PTE Academic is created by Pearson.<br><br>
     The PTE Professional™ exam is another approach to precisely, effectively and extensively measure
talked and composed English familiarity for worldwide business experts. Pointed toward people
whose first dialect is not English, PTE Professional™ is a viable approach to evaluate a person&#39;s
capacity to capably work inside worldwide business settings that require solid English relational
abilities.
      </p>
       
        <h4 id="item-2" style="color: darkblue;">PTE Approach:</h4>
        <p class="txt">At the time you plan your exam, you will be given two approaches that read as takes after:</p>
            <ol type="1">
                <li>Non-exposure strategy</li>
                <p class="txt">I acknowledge the terms and states of the PTE Professional Non-Disclosure Agreement (NDA)
including acknowledgment that all substance is ensured protected innovation and divulgence of any
sort will affect my bid for confirmation and potentially result in lawful indictment.</p>
               <li>Security strategy</li>
                <p class="txt">I agree to the accumulation, utilize, exchange, and capacity of my own information to Pearson VUE,
its approved outsiders and satisfaction merchants, or any substance giving financing to my exam. I
likewise approve my information to be arranged with all other competitor information for
distribution of total applicant measurable reports.</p>
            </ol>
       
      
       
       <p class="txt">PTE (Academic) In Pearson Test of English Written talk empowering aptitudes in just evaluated in an
Essay. PTE Academic test takers can get 1 or 2 articles which must be finished in 20 minutes.</p>
      
      <h4 id="item-3" style="color: darkblue;">Composed Discourse incorporates 4 criteria</h4>
        <ul>
            <li>Task Achievement</li><br>
            <li>Coherence and Cohesion</li><br>
            <li>Lexical Resource</li><br>
            <li>Grammatical Range and Accuracy</li><br>
        </ul>
       
     
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
 </div>  -->    
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
