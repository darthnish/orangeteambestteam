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
<div class="parties-hero">
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
        <div class="parties-information ">
            <h1 class="page-heading"></h1>
            <p class="parties-information__description"></p>
            <div class="parties-information__status d-flex flex-wrap flex-md-row justify-content-md-between">
                <div class="party-status">
                    <h4 class="party-status__heading">Current Leader</h4>
                    <p class="party-status__p"></p>
                </div>
                <div class="party-status party-status--social">
                    <h4 class="party-status__heading">Social Media</h4>
                    <a class="party__link" id="facebook-party" target="_blank"><i class="fa fa-facebook-official party-social-icn fa-lg" aria-hidden="true"></i></a>
                    <a class="party__link" id="twitter-party" target="_blank"><i class="fa fa-twitter party-social-icn fa-lg" id="facebook-party" aria-hidden="true"></i></a>
                </div>
                <div class="party-status party-status--members party-status--grow">
                    <h4 class="party-status__heading">Party Member's in The Senate</h4>
                    <div class="party-status__bar d-flex justify-content-between align-items-center">
                        <div class="member-cal member-cal--liberal d-flex justify-content-end align-items-center" id="senate-bar">
                            <small class="member-cal__number" id="senate-num"></small>
                        </div>
                            <small class="member-cal__number">/105</small>
                    </div>
                </div>
                <div class="party-status party-status--members">
                    <h4 class="party-status__heading">Party Member's in the House Of Commons</h4>
                    <div class="party-status__bar d-flex justify-content-between align-items-center">
                        <div class="member-cal member-cal--liberal d-flex justify-content-end align-items-center" id="commons-bar">
                            <small class="member-cal__number" id="commons-num"></small>
                        </div>
                        <small class="member-cal__number">/105</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><main class="container-fluid container--party_page">
    <div class="d-flex flex-column flex-md-row justify-content-between">
        <section class="party-policies">
            <h1 class="section-heading">Party Policies</h1>
            <div class="row d-flex flex-wrap no-gutters" id="policy-section">
                <!--<div class="col policy">
                    <div class="policy__card d-flex border--liberal flex-column">
                        <div class="card__header d-flex flex-row">
                            <i class="card__icn card__icn--new"></i><h3 class="card-heading color--liberal">Health</h3>
                        </div>
                        <p>Hi My Name is bob asdasdasd . The Liberal party promises to restore the Old Age Security age of eligibility back to 65 years from the current 67 and increase the Guaranteed Income Supplement for single low-income seniors by ten percent. The party promises to introduce.</p>
                    </div>
                </div>
                <div class="col policy">
                    <div class="policy__card d-flex border--liberal flex-column">
                        <div class="card__header d-flex flex-row">
                            <i class="card__icn material-icons md-24 color--liberal">school</i><h3 class="card-heading color--liberal">Education</h3>
                        </div>
                        <p>Hi My Name is bob asdasdasd . The Liberal party promises to restore the Old Age Security age of eligibility back to 65 years from the current 67 and increase the Guaranteed Income Supplement for single low-income seniors by ten percent. The party promises to introduce.</p>
                    </div>
                </div>
                <div class="col policy">
                    <div class="policy__card d-flex border--liberal flex-column">
                        <div class="card__header d-flex flex-row">
                            <i class="card__icn material-icons md-24 color--liberal">account_balance</i><h3 class="card-heading color--liberal">Economy</h3>
                        </div>
                        <p>Hi My Name is bob asdasdasd . The Liberal party promises to restore the Old Age Security age of eligibility back to 65 years from the current 67 and increase the Guaranteed Income Supplement for single low-income seniors by ten percent. The party promises to introduce.</p>
                    </div>
                </div>
                <div class="col policy">
                    <div class="policy__card border--liberal d-flex flex-column">
                        <div class="card__header d-flex flex-row">
                            <i class="card__icn color--liberal">
                            </i><h3 class="card-heading color--liberal">Ecology</h3>
                        </div>
                        <p>Hi My Name is bob asdasdasd . The Liberal party promises to restore the Old Age Security age of eligibility back to 65 years from the current 67 and increase the Guaranteed Income Supplement for single low-income seniors by ten percent. The party promises to introduce.</p>
                    </div>
                </div>
                <div class="col policy">
                    <div class="policy__card border--liberal d-flex flex-column">
                        <div class="card__header d-flex flex-row">
                            <i class="card__icn material-icons md-24 color--liberal">work</i><h3 class="card-heading color--liberal">Jobs</h3>
                        </div>
                        <p>Hi My Name is bob asdasdasd . The Liberal party promises to restore the Old Age Security age of eligibility back to 65 years from the current 67 and increase the Guaranteed Income Supplement for single low-income seniors by ten percent. The party promises to introduce.</p>
                    </div>
                </div>
                <div class="col policy">
                    <div class="policy__card border--liberal border--liberal d-flex flex-column">
                        <div class="card__header d-flex flex-row">
                            <i class="card__icn material-icons md-24 color--liberal">public</i><h3 class="card-heading color--liberal">Foreign Policy</h3>
                        </div>
                        <p>Hi My Name is bob asdasdasd . The Liberal party promises to restore the Old Age Security age of eligibility back to 65 years from the current 67 and increase the Guaranteed Income Supplement for single low-income seniors by ten percent. The party promises to introduce.</p>
                    </div>
                </div>
                <div class="col policy">
                    <div class="policy__card border--liberal d-flex flex-column">
                        <div class="card__header d-flex flex-row"><i class="card__icn">
                        </div>
                        <p>Hi My Name is bob asdasdasd . The Liberal party promises to restore the Old Age Security age of eligibility back to 65 years from the current 67 and increase the Guaranteed Income Supplement for single low-income seniors by ten percent. The party promises to introduce.</p>
                    </div>
                </div>
                <div class="col policy">
                    <div class="policy__card border--liberal d-flex flex-column">
                        <div class="card__header d-flex flex-row">
                            <i class="card__icn material-icons md-24 color--liberal"></i>
                            <h3 class="card-heading color--liberal">Social Issues</h3>
                        </div>
                        <p>Hi My Name is bob asdasdasd . The Liberal party promises to restore the Old Age Security age of eligibility back to 65 years from the current 67 and increase the Guaranteed Income Supplement for single low-income seniors by ten percent. The party promises to introduce.</p>
                    </div>
                </div>
                <div class="col policy">
                    <div class="policy__card border--liberal d-flex flex-column">
                        <div class="card__header d-flex flex-row">
                            <i class="card__icn material-icons md-24 color--liberal">home</i><h3 class="card-heading color--liberal">Housing</h3>
                        </div>
                        <p>Hi My Name is bob asdasdasd . The Liberal party promises to restore the Old Age Security age of eligibility back to 65 years from the current 67 and increase the Guaranteed Income Supplement for single low-income seniors by ten percent. The party promises to introduce.</p>
                    </div>
                </div>-->
            </div>
        </section>
        <section class="party-history">
            <div class="party-history__content">
                <h4 class="section-small-heading text-center">History</h4>
                <div class="history-border border-right--liberal"></div>
                <div class="party-history__bit">
                    <div class="party-history__year d-flex align-content-center">
                        <div class="party-history__marker background--liberal"></div>
                        <p class="party-history__date">2015</p>
                    </div>
                    <h5 class="party-history__history-heading">Trudeau Leads</h5>
                    <p class="party-history__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid, si non sensus modo ei sit datus, verum etiam animus hom.</p>
                </div>
                <div class="party-history__bit">
                    <div class="party-history__year d-flex align-content-center">
                        <div class="party-history__marker background--liberal"></div>
                        <p class="party-history__date">2015</p>
                    </div>
                    <h5 class="party-history__history-heading">Trailing The Conservatives</h5>
                    <p class="party-history__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid, si non sensus modo ei sit datus, verum etiam animus hom.</p>
                </div>
                <div class="party-history__bit">
                    <div class="party-history__year d-flex align-content-center">
                        <div class="party-history__marker background--liberal"></div>
                        <p class="party-history__date">2015</p>
                    </div>
                    <h5 class="party-history__history-heading">Trailing The Conservatives</h5>
                    <p class="party-history__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid, si non sensus modo ei sit datus, verum etiam animus hom.</p>
                </div>
                <div class="party-history__bit">
                    <div class="party-history__year d-flex align-content-center">
                        <div class="party-history__marker background--liberal"></div>
                        <p class="party-history__date">2015</p>
                    </div>
                    <h5 class="party-history__history-heading">Trailing The Conservatives</h5>
                    <p class="party-history__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid, si non sensus modo ei sit datus, verum etiam animus hom.</p>
                </div>
                <div class="party-history__bit">
                    <div class="party-history__year d-flex align-content-center">
                        <div class="party-history__marker background--liberal"></div>
                        <p class="party-history__date">2015</p>
                    </div>
                    <h5 class="party-history__history-heading">Trailing The Conservatives</h5>
                    <p class="party-history__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid, si non sensus modo ei sit datus, verum etiam animus hom.</p>
                </div>
            </div>
        </section>
    </div>
    <section class="party-key">
        <h1 class="section-heading">Key Members of the Party</h1>
        <div class="row d-flex flex-wrap no-gutters">
            <div class="col members">
                <img class="members__image" src="img/parties/members/justin_trudeau.jpg">
                    <div class="members__plate">
                        <div class="name__plate">
                            <h4 class="members-name background--liberal">Justin Trudeau</h4>
                        </div>
                        <div class="name__plate">
                        <h5 class="members-name background--liberal members-pm">23rd Prime Minister</h5>
                        </div>
                    <div class=title_plate">
                        <h6 class="members-name background--liberal members-title">House Leader</h6>
                    </div>
                </div>
            </div>
            <div class="col members">
                <img class="members__image" src="img/parties/members/justin_trudeau.jpg">
                <div class="members__plate">
                    <div class="news__plate"></div>
                    <h4 class="members-name background--liberal">Justin Trudeau</h4>
                    <div class=title_plate">
                        <h6 class="members-name background--liberal members-title">House Leader</h6>
                    </div>
                </div>
            </div>
            <div class="col members">
                <img class="members__image" src="img/parties/members/justin_trudeau.jpg">
                <div class="members__plate">
                    <div class="news__plate"></div>
                    <h4 class="members-name background--liberal">Jody Wilson-Raybould</h4>
                    <div class=title_plate">
                        <h6 class="members-name background--liberal members-title">Minister of Justice &
                            Attorney General of Canda</h6>
                    </div>
                </div>
            </div>
            <div class="col members">
                <img class="members__image" src="img/parties/members/justin_trudeau.jpg">
                <div class="members__plate">
                    <div class="news__plate"></div>
                    <h4 class="members-name background--liberal">Justin Trudeau</h4>
                    <div class=title_plate">
                        <h6 class="members-name background--liberal members-title">House Leader</h6>
                    </div>
                </div>
            </div>
            <div class="col members">
                <img class="members__image" src="img/parties/members/justin_trudeau.jpg">
                <div class="members__plate">
                    <div class="news__plate"></div>
                    <h4 class="members-name background--liberal">Justin Trudeau</h4>
                    <div class=title_plate">
                        <h6 class="members-name background--liberal members-title">House Leader</h6>
                    </div>
                </div>
            </div>
            <div class="col members">
                <img class="members__image" src="img/parties/members/justin_trudeau.jpg">
                <div class="members__plate">
                    <div class="news__plate"></div>
                    <h4 class="members-name background--liberal">Justin Trudeau</h4>
                    <div class=title_plate">
                        <h6 class="members-name background--liberal members-title">House Leader</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

    var partyName = getPartyName();

    $.ajax({
        url: "data/parties.json",
        dataType: "json",
        success : function(data) {
            var partyData = data[partyName];
            showData(partyData);
        }
    });

    function getPartyName() {
        var url = window.location.search.substring(1);
        var urlArray = url.split('&');

        for (var i = 0; i < urlArray.length; i++) {
            var partyName = urlArray[i].split('=');
            if (partyName[0] === 'party' && partyName[1] === "liberal" || partyName[1] === "conservative" || partyName[1] === "green" || partyName[1] === "NDP") {
                return partyName[1];
            }
            else{
                location.replace("404.html");
            }
        }
    }

    function showData(party) {
        $(".page-heading").text(partyName + " Party");
        $(".party-status__p").text(party.leader);
        $(".parties-information__description").text(party.description);
        $("#twitter-party").attr("href", party.twitter);
        $("#facebook-party").attr("href", party.facebook);

        $("#senate-num").text(party.senate);
        $("#commons-num").text(party.commons);


        $("#commons-bar").css("width",getPercentage(party.commons + 80,338));
        $("#senate-bar").css("width",getPercentage(party.senate + 50,105));

        $(".parties-hero").addClass("parties-hero--liberal");


        showPolicies(party.policies, party.icons);

    }
    

    function showPolicies(partyPolicies, partyIcons) {
        var policyCards = "";
        $.each( partyPolicies, function( key, value ) {
            policyCards += "<div class='col policy'><div class='policy__card d-flex border--" + partyName + " flex-column'><div class='card__header d-flex flex-row'><i class='card__icn material-icons md-24 color--"+ partyName  +"'>"+ partyIcons[key] +"</i><h3 class='card-heading color--" + partyName + "'>" + key +"</h3> </div><p>" + value + "</p> </div> </div>";
        });

        $( "#policy-section" ).append( policyCards );

    }


    function getPercentage(numOne,numTwo) {
        return (numOne/numTwo) * 100;
    }









</script>
</body>
</html>