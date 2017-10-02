
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Subscribe</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <form action="mail.php" method="POST">
        <div class="modal-body">
        	  <div class="row">
        	    <div class="col-12">
        	      <input type="text" class="form-control" name="subscribe-name" placeholder="Full name">
        	    </div>
        	    <div class="col-12">
        	      <input type="mail" class="form-control" name="subscribe-email" placeholder="Email">
        	    </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="subscribe" class="btn">Subscribe</button>
        </div>
    </form>
  </div>
</div>
</div>

<!-- <?php
if(isset($_POST['subscribe'])) {
    $to = $_POST['subscribe-email'];
    $subject = "Thank you for Subscribe";
    $message="<div style='width: 500px; height: auto; background: white; display: block; margin: auto; '>\n";
    $message.=     "<div style='width: 100%; height: 10%; padding-top: 1em; padding-left: 6%;'>\n";
    $message.=         "<img class='width: 25%; height: auto;' src='img/logo/logo_black.svg' alt='logo'>\n";
    $message.=     "</div>\n";
    $message.=     "<div style='width: 100%; height: auto; padding-top: 1em; margin-bottom: 1em; '>\n";
    $message.=         "<div style='width: 100%; height: 20%; padding-left: 7%; margin-top: 5%;'>\n";
    $message.=             "<h1 style='ont-family: 'Zilla Slab', serif; font-size: 2.4em;'>Thank you for subscribe</h1>\n";
    $message.=             "<h4 style='ont-family: 'Lato', sans-serif; font-weight: 700; padding-top: 1em; '>Hi, ".$_POST['subscribe_name']." </h4>\n";
    $message.=             "<p style='font-family: 'Lato', sans-serif; padding-top: 1em; font-weight: 400; font-size: 1em; margin-bottom: 1.5em; '>We will send you about our news.<br>You can get imformation about us and<br>let’s vote for next election.</p>\n";
    $message.=         "</div>"; //close "mail_body_title"
    $message.=         "<div style='width: 85%; height: 350px; display: block; margin: auto; background-image: url(../img/mail.png); background-repeat: no-repeat; background-position: center; background-size: contain; text-align: center; '>\n";
    $message.=             "<h1 style='line-height: 350px; font-family: 'Zilla Slab', serif; color: white; font-size: 2.6em;'>Let's Compare Parties</h1>\n";
    $message.=         "</div>\n";
    $message.=         "<div style='display: block; width: 100%; height: auto; text-align: center; '>\n";
    $message.=             "<p style='adding-top: 3.5em; font-weight: 400; font-size: 1em; '>You can go to our site and compare <br>which party you are.</p>\n";
    $message.=             "<button type='button' style='width: 50%; height: auto; display: block; margin: auto; background: #231f20; color: white; font-family: 'Zilla Slab', serif; font-weight: 600; font-size: 1.4em; line-height: 2.4em; border: none; margin-top: 2em; margin-bottom: 1.5em; '>COMPARE</button>\n";
    $message.=         "</div>\n";
    $message.=         "<div style='adding-top: 3em; width: 100%; text-align: center; padding-bottom: 4em; '>\n";
    $message.=             "<h1 style='font-family: 'Zilla Slab', serif; font-size: 2.4em; margin-bottom: .5em; '>Connect Us</h1>\n";
    $message.=             "<div style='width: 70%; height: auto; display: block; margin: auto; text-align: center; padding-top: 1em; '>\n";
    $message.=                 "<a href='facebook.com'>\n";
    $message.=                     "<img src='img/sns/facebook_black.svg' alt='facebook' style='width: 10%; height: auto; margin-right: 1em; margin-left: 1em; display: inline-block!important; vertical-align: top!important; '>\n";
    $message.=                 "</a>\n";
    $message.=                 "<a href='twitter.com'>\n";
    $message.=                     "<img src='img/sns/twitter_black.svg' alt='twitter' style='width: 10%; height: auto; margin-right: 1em; margin-left: 1em; display: inline-block!important; vertical-align: top!important; '>\n";
    $message.=                 "</a>\n";
    $message.=                 "<a href='instagram.com'>\n";
    $message.=                     "<img src='img/sns/instagram_black.svg' alt='instagram' style='width: 10%; height: auto; margin-right: 1em; margin-left: 1em;' display: inline-block!important; vertical-align: top!important; \n";
    $message.=                 "</a>\n";
    $message.=             "</div>\n"; //close "mail_sns_icon"
    $message.=         "</div>\n"; //close "mail_sns"
    $message.=     "</div>\n"; //close "mail_body"
    $message.=     "<div style='padding-top: 1em; width: 100%; height: auto; text-align: center; '>\n";
    $message.=         "<div style='display: block; margin: auto; width: 300px; height: 60px; border-top: 1px gray solid; '>\n";
    $message.=             "<p style='font-family: 'Lato', sans-serif; font-size: .8em; color: #231f20; padding-top: 1em; '>© Copyright 2017, Group Project By Orange Team. </p>\n";
    $message.=         "</div>\n";
    $message.=     "</div>\n"; //close "mail_footer"
    $message.= "</div>\n"; //close "mail_template"
    $headers = "From: info@canadaparties.ca \r\n";

    $didMail = mail($to, $subject, $message, $headers);
    if($didMail == true) {
        echo "Thank you for subscribe";
    }
    else {
        echo "Please Try Again";
    }
}
else {
    echo "Fill in the blank";
}

?> -->
