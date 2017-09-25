
<?php include "mail.php"; ?>

<div class="overlay"></div>

<nav class="navbar navbar-expand-lg navbar-light nav-desktop navbar-static-top">
	<div class="container-fluid">
		 <a class="navbar-brand" href="#">
      		<img src="img/logo/logo_black.svg" width="140" height="65" alt="img">
    	</a>
		<button class="navbar-toggle nav-mobile" data-toggle="collapse">
			<a class="navbar-brand button_mobile_menu">
					  <img src="img/icon/menu_black.svg" width="50" height="40" alt="img">
			 </a>
		</button>
	    <div class="collapse navbar-collapse menu_section navHeaderCollapse" >
		     <ul class="navbar-nav navbar-right pull-right">
	             <li class="nav-item dropdown nav-li">
			         	<a class="nav-link dropdown-toggle nav-a nav-party" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PARTY</a>
			         	<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item nav-a nav-a-img" href="liberal.php">
	                         <img src="img/logo/liberal_logo.svg" width="120" height="40" alt="liberalParty">
	                    </a>
	                    <a class="dropdown-item nav-a nav-a-img" href="conservative.php">
	                         <img src="img/logo/conservative_logo.png" width="120" height="auto" alt="liberalParty">
	                    </a>
	                    <a class="dropdown-item nav-a nav-a-img" href="ndp.php">
	                         <img src="img/logo/ndp_logo.svg" width="120" height="40" alt="liberalParty">
	                    </a>
	                    <a class="dropdown-item nav-a nav-a-img" href="green.php">
	                         <img src="img/logo/green_logo.svg" width="120" height="50" alt="liberalParty">
	                    </a>
			         	</div>
					</li>
				 <li class="nav-item active  nav-li">
		         	<a class="nav-link nav-a" href="my-mp.php">WHO'S MY MP <span class="sr-only">(current)</span></a>
		        </li>
		        <li class="nav-item nav-compare  nav-li">
		         	<a class="nav-link nav-a" href="compare-parties.php">COMPARE PARTY</a>
		        </li>
		        <li class="nav-item  nav-li">
	                <a class="navbar-brand nav-subscribe" href="#" data-toggle="modal" data-target="#exampleModal">
	   	      		        <img src="img/icon/mail_black.svg" width="50" height="40" alt="img">
	   	    	   </a>
		        </li>
		    </ul>
		</div>
	</div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light nav-mobile">
		 <a class="navbar-brand">
      		<img src="img/logo/logo_black.svg" width="140" height="65" alt="img">
    	</a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
	     <ul class="navbar-nav">
             <li class="nav-item  nav-li nav-desctop">
                 <a class="navbar-brand button_mobile_menu">
                           <img src="img/icon/menu_black.svg" width="50" height="40" alt="img">
                  </a>
           </li>
       </ul>
   </div>
</nav>

<nav class="mobile_menu">
    <div class="row mobile_menu_top">
        <div class="col-10">
            <a class="f-brand nav-subscribe" href="#" data-toggle="modal" data-target="#exampleModal">
                    <img src="img/icon/mail_black.svg" alt="subscribe">
           </a>
        </div>
        <div class="col-2">
            <a class="navbar-brand menu_close">
                    <img src="img/icon/close.svg" alt="close">
           </a>
        </div>
    </div>
    <div class="mobile_menu_list">
        <ul>
            <li class="h3">PARTY</li>
                <ul class="submenu_parties">
                    <li class="h5">Liberal Party</li>
                    <li class="h5">Conservative Party</li>
                    <li class="h5">New Democratic Party</li>
                    <li class="h5">Green Party</li>
                </ul>
            <li class="h3">WHO'S MY MP</li>
            <li class="h3">COMPARE PARTY</li>
        </ul>
    </div>
    <div class="mobile_menu_sns">
        <nav class="navbar navbar-light d-flex justify-content-end">
            <a class="navbar-brand" href="facebook.com">
                <img src="img/sns/facebook_black.svg" width="40" height="40" class="d-inline-block align-top" alt="facebook">
            </a>
            <a class="navbar-brand" href="twitter.com">
                <img src="img/sns/twitter_black.svg" width="40" height="40" class="d-inline-block align-top" alt="twitter">
            </a>
            <a class="navbar-brand" href="instagram.com">
                <img src="img/sns/instagram_black.svg" width="40" height="40" class="d-inline-block align-top" alt="instagram">
            </a>
        </nav>
    </div>
</nav>
