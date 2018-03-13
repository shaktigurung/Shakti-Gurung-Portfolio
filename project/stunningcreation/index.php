<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stunning Creation</title>

    <!-- Bootstrap -->
   <link href='http://fonts.googleapis.com/css?family=Lobster+Two|UnifrakturMaguntia|Shanti' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   </head>
  <body>
  
	  <section>
		  <!--Navigation-->
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
			         <li><a href="#">Home</a></li>
			        <li class="page-scroll"><a href="#about">About Us</a></li>
			        <li class="page-scroll"><a href="#service">Services</a></li>
			        <li class="page-scroll"><a href="#portfolio">Portfolio</a></li>
			        <li class="page-scroll"><a href="#contact">Contact</a></li>
			        <li class="quote"><a href="#myModal"><button class="btn btn-primary sml-btn" data-toggle="modal" data-target="#myModal"> Instant Quote </button></a></li>
			      </ul>
			      
			     </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
		 </nav><!--end of Navigation-->

		<!-- Main Banner -->
		<div class="head-bg">
					<div class="conatiner">
						<div class="col-lg-12 header-note">
							<a href="#"> <img src="component/images/logo.png" title="Flat style" /></a>
							<h1> We Create Amazing Websites to Satisfy Your Needs </h1>
							<a class="btn btn-primary big-btn" href="#">Learn More <span> </span></a>
						</div>
					</div>
		</div>
		<!--End of Main Banner-->  

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
		</div> <!--end of Modal-->    

		 
		  
		  <!--?php include 'component/php/navigation.php'; ?--> 
		  <div id="about">
		  <?php include 'component/php/aboutus.php'; ?>
		  </div>
		  <div id="service">
		  <?php include 'component/php/service.php'; ?>
		  </div>
		  <div id="portfolio">
		  <?php include 'component/php/portfolio.php'; ?>
		  </div>
		  <div id="contact">
		  <?php include 'component/php/contact.php'; ?>
		  </div>
	      <?php include 'component/php/socialmedia.php'; ?>
	      
	  </section>   	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/myjquery.js"></script>
  </body>
</html>