<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
   <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Make Your Vote - Home</title>
    <link rel="shortcut icon" type="image/ico" href="favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/landingpage.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">



    <!-- Google font  -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Zilla+Slab+Highlight:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Zilla+Slab:400,400i,500,500i,600,700" rel="stylesheet">

    <style>

    </style>
</head>
<body class="homepage">
    <?php include "partials/header_2.php";?>
    <div class="container-fluid bg-video homepage_container">
         <div class="row">
             <div class="col-md-12">
                 <video src="videos/canada.mp4" class="vid" muted autoplay loop preload="auto"></video>
             </div>
         </div>
    </div>
    <div class="container-fluid homepage_container">
        <div class="row no-pad mobile-bg">
           <div class="col-lg-3 col-md-12 col-sm-12 fill party">
               <div class="landing-overlay liberal">
                   <div class="main-content liberal-align">
                       <div class="homepage_logo_img">
                           <img class ="party-logo" src ="img/logo/liberal_white.svg" alt="Liberal Party">
                       </div>
                        <!--<p>Lorem Ipsum is simply dummy dummy</p>-->
                        <a class="nav-link nav-a e temp-size" href="parties.php?party=liberal">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-12 col-sm-12 fill party">
                <div class="landing-overlay conservative">
                   <div class="main-content">
                       <div class="homepage_logo_img">
                           <img class ="party-logo" src ="img/logo/conservative_white.png" alt="Conservative">
                        </div>
                        <!--<p>Lorem Ipsum is simply dummy dummy</p>-->
                        <a class="nav-link nav-a  temp-size" href="parties.php?party=conservative">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-12 col-sm-12 fill party">
                <div class="landing-overlay green-party">
                   <div class="main-content ">
                       <div class="homepage_logo_img">
                           <img class ="party-logo" src ="img/logo/green_white.svg" alt="Green Party">
                       </div>
                        <!--<p>Lorem Ipsum is simply dummy dummy</p>-->
                        <a class="nav-link nav-a  temp-size" href="parties.php?party=green">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 fill party">
                <div class="landing-overlay ndp">
                   <div class="main-content">
                       <div class="homepage_logo_img">
                           <img class ="party-logo" src ="img/logo/ndp_white.svg" alt="LNDP">
                       </div>
                        <!--<p>Lorem Ipsum is simply dummy dummy</p>-->
                        <a class="nav-link nav-a  temp-size" href="parties.php?party=ndp">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/video.js"></script>
</body>
</html>
