
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
<div class="container">
				<h2>Contact Us</h2>
				<p class="contact-head">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p> 
				<div class="row contact-form">
					<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
						<div class="col-md-6 text-box">
							<input name="name" type="text" placeholder="Name" />
							<input name="email" type="text" placeholder="Email" />
							<input name="subject" type="text" placeholder="Subject" />
						</div>
						<div class="col-md-6 textarea">
							<textarea name="message">Message</textarea>
						</div>
						<div class="clearfix"> </div><br />
						<input class="btn btn-primary btn-red-lg" type="submit" name="submit" value="Submit Message" />
					</form>
				</div>
</div> <!--end of container-->
 
<?php 
} else {  // the user has submitted the form
  // Check if the "from" input field is filled out
  if (isset($_POST["email"])) {
    // Check if "from" email address is valid
    $mailcheck = spamcheck($_POST["email"]);
    if ($mailcheck==FALSE) {
      echo "Invalid input!";
          } else {
      $name=$_POST["name"];
      $email = $_POST["email"]; // sender
      $subject = $_POST["subject"];
      $message = $_POST["message"];
      // message lines should not exceed 70 characters (PHP rule), so wrap it
      $message = wordwrap($message, 70);
      // send mail
      mail("mr.shakti.gurung@gmail.com",$subject,$message,"From: $name\n");
      
      /* Displaying the Message*/
     
      echo "Thank you for contacting us. We will get back to you asap.";
      
    }
  }
}
?>
<div class="container">
<a href="../../index.php"> Home </a>
</div>