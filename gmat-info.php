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
                    <a class="nav-link clr" href="#item-1">GMAT?</a>

                    <a class="nav-link clr" href="#item-2">GMAT Format and Timing</a>

                    <a class="nav-link  clr" href="#item-3">Other Information</a>
                  </nav>
                    
        </nav>
    </div>
    <div class="col-md-8 col-sm-12">
     <div class="progress-container sticky-top">
    <div class="progress-bar" id="myBar"></div>
  </div>  
      <div data-spy="scroll" data-target="#list-example #navbar-example3" data-offset="0"  class="scrollspy-example-2">
       
        <h4 id="item-1" style="color: darkblue;">GMAT (Graduate Management Admission Test)?</h4>
     <p class="txt">The Graduate Management Admission Test (GMAT) is a PC versatile test planned to evaluate
investigative, perusing, composing, critical thinking capacities, tending to information adequacy
rationale, and basic thinking aptitudes for use in admission to a graduate administration program,
for example, a MBA. GMAT is an enrolled trademark of the GMAC. More than 2,100 colleges and
foundations utilize the GMAT Score as a major aspect of the determination criteria for their more
than 5900 graduate administration programs including MBA, Master of Accountancy, and Master of
Finance programs.<br><br>
As indicated by the test owning organization, the Graduate Management Admission Council (GMAC),
the GMAT evaluates information of certain linguistic use and learning of certain variable based math,
geometry, and number juggling that it accepts to be key to genuine business and administration
achievement. It can be taken up to five times each year. Each endeavor must be no less than 16 days
separated. The GMAT is directed in state sanctioned test bases in 114 nations on the world.
      </p>
       
        <h4 id="item-2" style="color: darkblue;">GMAT Format and Timing:</h4>
        <p class="txt">The GMAT test comprises of four areas: an expository written work evaluation, a coordinated
thinking segment, a quantitative segment, and a verbal segment. Add up to testing time is three and
a half hours, however test takers should get ready for an aggregate time of around four hours, with
breaks. Time term is limited for each segment and that number of inquiries as well as beneath</p>
            
        <p class="txt"><b>Section Question types No. of questions Time</b></p>
      
       
       <p class="txt">Diagnostic Writing Assessment (AWA) Analysis of Argument 1 Topic 30 minutes</p>
       <p class="txt">Quantitative Section Data Sufficiency Problem Solving 37 Questions 75 minutes</p>
       <p class="txt">Discretionary 8-minute break</p>
       <p class="txt">Verbal Section Reading Comprehension Critical Reasoning Sentence Correction 41 Questions 75
minutes</p>
       <br>
       <p class="txt" id="item-3">
       The quantitative and verbal segments of the GMAT exam are both numerous decision and are
directed in the PC versatile configuration, changing in accordance with a test taker&#39;s level of
capacity. Test takers are given an issue of normal trouble toward the begin of the quantitative and
verbal areas.
     </p>
     
     <p class="txt">
       As inquiries are addressed mistakenly the PC gives the test taker inquiries of diminishing trouble and
as the addressed effectively, the PC gives the test taker progressively troublesome inquiries. This
procedure proceeds until test takers finish each segment. And soon thereafter the PC will have a
precise appraisal of their capacity level in that branch of knowledge and think of a crude score for
each area.
     </p>
     
     <p class="txt">
       Test takers may enlist either online at mba.com or by calling one of the test focuses. To plan an
exam, an arrangement must be made at one of the assigned test focuses. The GMAT may not be
taken more than once inside 31 days, regardless of the possibility that the scores are crossed out.
Official GMAT exam ponder materials are accessible on the mba.com online store and through
outsider sellers. The cost of the exam is $250. All candidates are required to introduce substantial ID
when taking the test. Endless supply of the test, test takers have the alternative of wiping out or
detailing their scores. Starting at July 2014, test takers were permitted to see their score before
settling on this choice.
     </p>
     
     <p class="txt">
     From the latest information discharged by GMAC, the normal score of all test takers is around 540.
The aggregate GMAT score ranges from 200 to 800 and measures execution on the quantitative and
verbal segments together. Execution on the AWA and IR areas don&#39;t tally toward the aggregate
score, those segments are scored independently. Scores are given in augmentations of 10.
     </p>
     
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
