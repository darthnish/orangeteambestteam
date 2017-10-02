<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Icon  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/parties/parties.css">
    <link rel="stylesheet" href="css/compare.css">
    <!--Google font  -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,900|Zilla+Slab:400,500,500i,600,700" rel="stylesheet">

  </head>
  <?php

  include 'partials/parties-functions.php';

  $partyPolicies = new Policies();
  $partyPolicies->getData();
  $partyPolicies->getIcons("black", "policy-icon");

  ?>
  <body class="compare-parties">
	 <?php include "partials/header_2.php";  ?>
     <div class="container-fluid container-fluid--compare">
         <div class="row">
             <div class="col-xl-9 col-lg-8 col-md-12 main-compare">
                 <div class="compare-hero">
                     <h1 class="page-heading is-dark">Comparing Parties</h1>
                     <p class="parties-information__description is-dark compare-p" >To compare parties go through each policy and select the party you agree with. When you would like to see your results click the button in the sidebar.</p>
                     <a class="btn btn-primary solid-button" href="#begin">Begin Comparing <i class="d-air material-icons ">keyboard_backspace</i></a>
                 </div>
                 <div class="main-compare" id="begin">
                     <div class="main-compare__container d-flex flex-column flex-md-row justify-content-between" id="Health" >
                         <section class="topic-policies">
                             <h1 class="section-heading"><span class="policy-icon"><?php echo $partyPolicies->Health ?></span>Health</h1>
                             <div class="row d-flex flex-wrap no-gutters" id="policy-section">
                                 <?php $partyPolicies->topicPolicies("Health"); ?>
                             </div>
                         </section>
                     </div>
                     <div class="main-compare__container d-flex flex-column flex-md-row justify-content-between" id="Education">
                         <section class="topic-policies">
                             <h1 class="section-heading"><span class="policy-icon"><?php echo $partyPolicies->Education ?></span>Education</h1>
                             <div class="row d-flex flex-wrap no-gutters" id="policy-section">
                                 <?php $partyPolicies->topicPolicies("Education"); ?>
                             </div>
                         </section>
                     </div>
                     <div class="main-compare__container d-flex flex-column flex-md-row justify-content-between" id="Economy">
                         <section class="topic-policies">
                             <h1 class="section-heading"><span class="policy-icon"><?php echo $partyPolicies->Economy ?></span>Economy</h1>
                             <div class="row d-flex flex-wrap no-gutters" id="policy-section">
                                 <?php $partyPolicies->topicPolicies("Economy"); ?>
                             </div>
                         </section>
                     </div>
                     <div class="main-compare__container d-flex flex-column flex-md-row justify-content-between" id="Environment">
                         <section class="topic-policies">
                             <h1 class="section-heading"><span class="policy-icon"><?php echo $partyPolicies->Environment ?></span>Environment</h1>
                             <div class="row d-flex flex-wrap no-gutters" id="policy-section">
                                 <?php $partyPolicies->topicPolicies("Environment"); ?>
                             </div>
                         </section>
                     </div>
                     <div class="main-compare__container d-flex flex-column flex-md-row justify-content-between" id="Jobs">
                         <section class="topic-policies">
                             <h1 class="section-heading"><span class="policy-icon"><?php echo $partyPolicies->Jobs ?></span>Jobs</h1>
                             <div class="row d-flex flex-wrap no-gutters" id="policy-section">
                                 <?php $partyPolicies->topicPolicies("Jobs"); ?>
                             </div>
                         </section>
                     </div>
                     <div class="main-compare__container d-flex flex-column flex-md-row justify-content-between" id="Foreign Policy">
                         <section class="topic-policies">
                             <h1 class="section-heading"><span class="policy-icon"><?php echo $partyPolicies->ForeignPolicy ?></span>Foreign Policy</h1>
                             <div class="row d-flex flex-wrap no-gutters" id="policy-section">
                                 <?php $partyPolicies->topicPolicies("Foreign Policy"); ?>
                             </div>
                         </section>
                     </div>
                     <div class="main-compare__container d-flex flex-column flex-md-row justify-content-between" id="Families">
                         <section class="topic-policies">
                             <h1 class="section-heading"><span class="policy-icon"><?php echo $partyPolicies->Families ?></span>Families</h1>
                             <div class="row d-flex flex-wrap no-gutters" id="policy-section">
                                 <?php $partyPolicies->topicPolicies("Families"); ?>
                             </div>
                         </section>
                     </div>
                     <div class="main-compare__container d-flex flex-column flex-md-row justify-content-between" id="SocialIssues">
                         <section class="topic-policies">
                             <h1 class="section-heading"><span class="policy-icon"><?php echo $partyPolicies->SocialIssues ?></span>Social Issues</h1>
                             <div class="row d-flex flex-wrap no-gutters" id="policy-section">
                                 <?php $partyPolicies->topicPolicies("Social Issues"); ?>
                             </div>
                         </section>
                     </div>
                     <div class="main-compare__container d-flex flex-column flex-md-row justify-content-between" id="Housing">
                         <section class="topic-policies">
                             <h1 class="section-heading"><span class="policy-icon"><?php echo $partyPolicies->Housing ?></span>Housing</h1>
                             <div class="row d-flex flex-wrap no-gutters" id="policy-section">
                                 <?php $partyPolicies->topicPolicies("Housing"); ?>
                             </div>
                         </section>
                     </div>
                 </div>
             </div>
             <div class="col-xl-3 col-lg-4 col-md-12 sidebar-compare" id="sidebar">
                 <div class="nav-bar d-flex flex-md-nowrap  flex-md-nowrap flex-lg-wrap">
                    <section class="select-party">
                        <h4 class="sidebar-heading"><span class="e-none">Select</span> Parties <span class="e-none">To Compare</span></h4>
                        <div class="d-flex plus-each align-items-center d-lg-block">
                        <label class='form-check-label d-flex align-items-center'>
                            <div class="party-option">
                                <input class='topic-policies__radio' type='checkbox' name='green' id='green' value='green' checked>
                                <span class='custom-radio__topic color--green border--green-2'></span>
                            </div>
                            <p class="party-select__name g-p"><span class="e-none">Green Party</span></p>
                        </label>
                        <label class='form-check-label d-flex align-items-center'>
                            <div class="party-option">
                                <input class='topic-policies__radio' type='checkbox' name='ndp' id='ndp' value='ndp' checked>
                                <span class='custom-radio__topic border--ndp-2'></span>
                            </div>
                            <p class="party-select__name n-p"><span class="e-none">NDP</span></p>
                        </label> <label class='form-check-label d-flex align-items-center'>
                            <div class="party-option">
                                <input class='topic-policies__radio' type='checkbox' name='liberal' id='liberal' value='liberal' checked>
                                <span class='custom-radio__topic border--liberal-2'></span>
                            </div>
                            <p class="party-select__name l-p"><span class="e-none">Liberal</span></p>
                        </label>
                        <label class='form-check-label d-flex align-items-center'>
                            <div class="party-option">
                                <input class='topic-policies__radio' type='checkbox' name='green' id='green' value='green' checked>
                                <span class='custom-radio__topic border--conservative-2'></span>
                            </div>
                            <p class="party-select__name c-p"><span class="e-none">Conservative</span></p>
                        </label>
                        </div>
                    </section>
                     <section class="select-party">
                         <h4 class="sidebar-heading"><span class="e-none">Jump To</span> Policy</h4>
                         <?php  $partyPolicies->getIcons("white", " "); ?>
                         <div class="flex-icons d-flex flex-md-nowrap flex-lg-wrap">
                             <?php
                                foreach ($partyPolicies->data->liberal->policies as $key => $value) {

                                    $noSpaceKey =  str_replace(" ","",$key);
                                    echo "<a class='sidebar-icon sidebar-icon--active material-icons white-tooltip' href='#".  $noSpaceKey ."' data-toggle='tooltip' data-placement='top'data-animation='false' title='".$key ."'>";
                                    echo $partyPolicies->$noSpaceKey;
                                    echo "</a>";
                                }
                             ?>
                         </div>
                     </section>
                     <a class="btn btn-primary light-button results results--main" href="#" data-toggle="modal" data-target="#exampleModal">View Results</a>
                 </div>
             </div>
         </div>
     </div>
    <a class="btn btn-primary light-button results  d-lg-none" href="#" id="">Results</a>

     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                 </div>
             </div>
         </div>
     </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        //Enables Smooth Scrolling
        $(document).scroll(function() {
            var yaxis = $(document).scrollTop(),
                sidebar = $("#sidebar");
            if(yaxis >= 120)  {
                sidebar.addClass("fixed-bar");
            } else {
                sidebar.removeClass("fixed-bar");
            }
        });

        //ADD TOOL TIP
        $(function () {
            $('[data-toggle="tooltip"]').tooltip(false)
        });

        //Enables Smooth Scrolling
        $(document).ready(function(){
            $('a[href^="#"]').on('click',function (e) {
                e.preventDefault();

                var target = this.hash;
                var $target = $(target);

                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top
                }, 800, 'swing', function () {
                    window.location.hash = target;
                });
            });
        });

        //Enables Modal
        $('#results').on('shown.bs.modal', function () {
            $('#myInput').focus()
        })
    </script>
  </body>
</html>
