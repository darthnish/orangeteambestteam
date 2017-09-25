
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
    $message = "";
    $headers = "From: info@canadaparties.ca"."\r\n";

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
