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
    <form action="mail/mail.php" method="POST">
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
