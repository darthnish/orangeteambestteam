<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/parties/parties.css">
    <!-- Google font  -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Zilla+Slab+Highlight:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php
    if(empty($_GET["party"]) OR $_GET["party"] !== "liberal" AND $_GET["party"] !== "ndp" AND $_GET["party"] !== "conservative" AND $_GET["party"] !== "green" ){
        echo "<script>location.replace('404.html')</script>";
    }

    include 'partials/parties-functions.php';

    $currentParty = $_GET["party"];

    $partyData = new Party();
    $partyData->getData();
    $partyData->getParty($currentParty);

    $partyPolicies = new Policies();
    $partyPolicies->getData();
    $partyPolicies->getIcons($currentParty);

?>

<div class="parties-hero <?php $partyData->getHero() ?>">
    <div class="parties-hero--overlay">
    <nav class="navbar navbar-expand-lg nav-bar--party">
        <a class="navbar-brand" href="#">
            <img class="logo" src="img/logo/logo_white.svg" width="120" height="auto" alt="img">
        </a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown nav-li">
                    <a class="nav-link dropdown-toggle nav-a nav-party text-white temp-size" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PARTY</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item nav-a nav-a-img" href="liberal.php">
                            <img src="img/logo/liberal_logo.svg" width="120" height="40" alt="liberalParty">
                        </a>
                        <a class="dropdown-item nav-a nav-a-img" href="liberal.php">
                            <img src="img/logo/conservative_logo.png" width="120" height="auto" alt="liberalParty">
                        </a>
                        <a class="dropdown-item nav-a nav-a-img" href="liberal.php">
                            <img src="img/logo/ndp_logo.svg" width="120" height="40" alt="liberalParty">
                        </a>
                        <a class="dropdown-item nav-a nav-a-img" href="liberal.php">
                            <img src="img/logo/green_logo.svg" width="120" height="50" alt="liberalParty">
                        </a>
                    </div>
                </li>
                <li class="nav-item active  nav-li">
                    <a class="nav-link nav-a text-white temp-size" href="#">WHO'S MY MP <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item nav-compare  nav-li">
                    <a class="nav-link nav-a text-white temp-size" href="#">COMPARE</a>
                </li>
                <li class="nav-item  nav-li">
                    <a class="navbar-brand" href="#">
                        <img src="img/icon/mail_white.png" width="50" height="40" alt="img">
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid d-flex align-items-end">
        <div class="parties-information">
            <h1 class="page-heading"><?php if($currentParty==="ndp"){ echo "New Democratic Party";}else{$partyData->getTitle();}?></h1>
            <p class="parties-information__description"><?php echo $partyData->party->description?></p>
            <div class="parties-information__status d-flex flex-wrap flex-md-row justify-content-md-between">
                <div class="party-status">
                    <h4 class="party-status__heading">Current Leader</h4>
                    <p class="party-status__p"><?php echo $partyData->party->leader?><p>
                </div>
                <div class="party-status party-status--social">
                    <h4 class="party-status__heading">Social Media</h4>
                    <a class="party__link" href="<?php echo $partyData->party->twitter?>" target="_blank"><i class="fa fa-facebook-official party-social-icn fa-lg" aria-hidden="true"></i></a>
                    <a class="party__link" href="<?php echo $partyData->party->facebook?>" target="_blank"><i class="fa fa-twitter party-social-icn fa-lg" id="facebook-party" aria-hidden="true"></i></a>
                </div>
                <div class="party-status party-status--members party-status--grow">
                    <h4 class="party-status__heading">Party Member's in The Senate</h4>
                    <div class="party-status__bar d-flex justify-content-between align-items-center">
                        <div class="member-cal d-flex justify-content-end align-items-center background--<?php echo $partyData->partyName?>" id="senate-bar">
                            <small class="member-cal__number" id="senate-num"><?php echo $partyData->party->senate?></small>
                        </div>
                            <small class="member-cal__number">/105</small>
                    </div>
                </div>
                <div class="party-status party-status--members">
                    <h4 class="party-status__heading">Party Member's in the House Of Commons</h4>
                    <div class="party-status__bar d-flex justify-content-between align-items-center">
                        <div class="member-cal d-flex justify-content-end align-items-center background--<?php echo $partyData->partyName ?>" id="commons-bar">
                            <small class="member-cal__number" id="commons-num"><?php echo $partyData->party->commons?></small>
                        </div>
                        <small class="member-cal__number">/338</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<main class="container-fluid container--party_page">
    <div class="d-flex flex-column flex-md-row justify-content-between">
        <section class="party-policies">
            <h1 class="section-heading">Party Policies</h1>
            <div class="row d-flex flex-wrap no-gutters" id="policy-section">
                <?php echo $partyPolicies->partyPolicies($currentParty) ?>
            </div>
        </section>
        <section class="party-history">
            <div class="party-history__content">
                <h4 class="section-small-heading text-center">History</h4>
                <div class="history-border border-right--<?php echo $partyData->partyName ?>"></div>
                <?php echo $partyData->getHistory() ?>
            </div>
        </section>
    </div>
    <section class="party-key">
        <h1 class="section-heading">Key Members of the Party</h1>
        <div class="row d-flex flex-wrap no-gutters">
            <?php echo $partyData->getMembers() ?>
    </section>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/parties.js"></script>
</body>
</html>
