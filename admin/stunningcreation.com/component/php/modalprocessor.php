
<?php

function spamcheck($field) {
  // Sanitize e-mail address
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
  // Validate e-mail address
  if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
    return TRUE;
  } else {
    return FALSE;
  }
}
?>
<?php
// display form if user has not clicked submit
if (!isset($_POST["submit"])) {
?>
 <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" method="post" action="component/php/modalprocessor.php">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title" id="myModalLabel">Instant Quote </h4>
		      </div>
		      <div class="modal-body">
			        <div class="form-group">
				    	<label for= "contact-name" class="col-lg-2" control-label> Name:</label>
				    		<div class="col-lg-10">
				    		
				    			<input type="text" class="form-control" id="name" placeholder="Full Name" />
				    		
				    		</div>
				    </div>
				    				
				    <div class="form-group">
				    	<label for= "contact-email" class="col-lg-2" control-label> Email:</label>
				    		<div class="col-lg-10">
				    			
				    			<input type="email" class="form-control" id="email" placeholder="xyz@example.com" />
				    		</div>
				    </div>
				    				
				    <div class="form-group">
				    	<label for= "contact-msg" class="col-lg-2" control-label> Message:</label>
				    		<div class="col-lg-10">
				    			
				    			<textarea class="form-control" id ="message" rows="8"> </textarea>
				    		
				    		</div>
				    </div>    
		      </div> <!--end of modal-body-->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <input class="btn btn-primary" type="submit" name="submit" value="Request Quote" />
		        <!--button type="submit" class="btn btn-primary"> Request Quote </button-->
		      </div>
      </form> <!--end of form-->
    </div>
  </div>
</div>     

<?php
if (isset($_POST["email"])) {
    // Check if "from" email address is valid
    $mailcheck = spamcheck($_POST["email"]);
    if ($mailcheck==FALSE) {
      echo "Invalid input!";
          } else {
      $name=$_POST["name"];
      $email = $_POST["email"]; // sender
      $message = $_POST["message"];
      // message lines should not exceed 70 characters (PHP rule), so wrap it
      $message = wordwrap($message, 70);
      // send mail
      mail("mr.shakti.gurung@gmail.com",$message,"From: $name\n");
      
      /* Displaying the Message*/
     
      echo "Thank you for contacting us. We will get back to you asap.";
      
    }
  }
?>
<div class="container">
<a href="../../index.php"> Home </a>
</div>