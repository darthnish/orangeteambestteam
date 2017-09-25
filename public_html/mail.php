
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
    <div class="modal-body">
        <form>
    	  <div class="row">
    	    <div class="col-12">
    	      <input type="text" class="form-control" name="subscribe-name" placeholder="Full name">
    	    </div>
    	    <div class="col-12">
    	      <input type="mail" class="form-control" name="subscribe-email" placeholder="Email">
    	    </div>
    	  </div>
    	</form>
    </div>
    <div class="modal-footer">
      <button type="submit" name="subscribe" class="btn">Subscribe</button>
    </div>
  </div>
</div>
</div>

<?php
if(isset($_POST['subscribe'])) {
    $to = $_POST['subscribe-email'];
    $subject = "Thank you for Subscribe";
    $message = "<div class='mail_template'>\n";
    $message. =     "<div class='mail_header'>\n";
    $message. =         "<img src='img/logo/logo_black.svg' alt='logo'>\n";
    $message. =     "</div>\n";
    $message. =     "<div class='mail_body'>\n";
    $message. =         "<div class='mail_body_title'>\n";
    $message. =             "<h1>Thank you for subscribe</h1>\n";
    $message. =             "<h4>Hi, ".$_POST['subscribe_name']." </h4>\n";
    $message. =             "<p>We will send you about our news.<br>You can get imformation about us and<br>let’s vote for next election.</p>\n"
    $message. =         "</div>"; //close "mail_body_title"
    $message. =         "<div class='mail_body_picture'>\n";
    $message. =             "<h1>Let's Compare Parties</h1>\n";
    $message. =         "</div>\n";
    $message. =         "<div class='mail_body_compare'>\n";
    $message. =             "<p>You can go to our site and compare <br>which party you are.</p>\n";
    $message. =             "<button type='button'>COMPARE</button>\n";
    $message. =         "</div>\n";
    $message. =         "<div class='mail_sns'>\n";
    $message. =             "<h1>Connect Us</h1>\n";
    $message. =             "<div class='mail_sns_icon'>\n";
    $message. =                 "<a href='facebook.com'>\n";
    $message. =                     "<img src='img/sns/facebook_black.svg' class='d-inline-block align-top' alt='facebook'>\n";
    $message. =                 "</a>\n";
    $message. =                 "<a href='twitter.com'>\n";
    $message. =                     "<img src='img/sns/twitter_black.svg' class='d-inline-block align-top' alt='twitter'>\n";
    $message. =                 "</a>\n";
    $message. =                 "<a href='instagram.com'>\n";
    $message. =                     "<img src='img/sns/instagram_black.svg' class='d-inline-block align-top' alt='instagram'>\n";
    $message. =                 "</a>\n";
    $message. =             "</div>\n"; //close "mail_sns_icon"
    $message. =         "</div>\n"; //close "mail_sns"
    $message. =     "</div>\n"; //close "mail_body"
    $message. =     "<div class='mail_footer'>\n";
    $message. =         "<div class='mail_footer_para'>\n";
    $message. =             "<p>© Copyright 2017, Group Project By Orange Team. </p>\n";
    $message. =         "</div>\n";
    $message. =     "</div>\n"; //close "mail_footer"
    $message. = "</div>\n"; //close "mail_template"
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

?>
