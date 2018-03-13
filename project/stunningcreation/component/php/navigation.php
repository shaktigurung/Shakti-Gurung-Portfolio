
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-star-empty"></span> Stunning Creation</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Contact</a></li>
        <li class="quote"><a href="#myModal"><button class="btn btn-primary sml-btn" data-toggle="modal" data-target="#myModal"> Instant Quote </button></a></li>
      </ul>
      
     </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!----start-container----->
<div class="head-bg">
			<div class="conatiner">
				<div class="col-lg-12 header-note">
					<a href="#"> <img src="component/images/logo.png" title="Flat style" /></a>
					<h1> We Create Amazing Websites to Satisfy Your Needs </h1>
					<a class="btn btn-primary big-btn" href="#">Learn More <span> </span></a>
				</div>
			</div>
</div>
<!----//End-container----->  

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title" id="myModalLabel">Instant Quote </h4>
		      </div>
		      <div class="modal-body">
			        <div class="form-group">
				    	<label for= "contact-name" class="col-lg-2" control-label> Name:</label>
				    		<div class="col-lg-10">
				    		
				    			<input type="text" class="form-control" id="contact-name" placeholder="Full Name" />
				    		
				    		</div>
				    </div>
				    				
				    <div class="form-group">
				    	<label for= "contact-email" class="col-lg-2" control-label> Email:</label>
				    		<div class="col-lg-10">
				    			
				    			<input type="email" class="form-control" id="contact-email" placeholder="xyz@example.com" />
				    		</div>
				    </div>
				    				
				    <div class="form-group">
				    	<label for= "contact-msg" class="col-lg-2" control-label> Message:</label>
				    		<div class="col-lg-10">
				    			
				    			<textarea class="form-control" rows="8"> </textarea>
				    		
				    		</div>
				    </div>    
		      </div> <!--end of modal-body-->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary"> Request Quote </button>
		      </div>
      </form> <!--end of form-->
    </div>
  </div>
</div>     

