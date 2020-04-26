<!DOCTYPE>
<html>
<head>
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/glyphicons-halflings-regular.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="plugins/magic/magic.css" />
<style type="text/css">
	body{
	background-color: lavenderblush;
}

.wrapper{
	width: 100%;
	min-height: 600px;
	overflow:hidden;
}
@media(min-width:1200px){
	.wrapper{
	width: 100%;
	}
}
@media(min-width:400px){
	.wrapper{
	width: 100%;
	}
}
.header{
	width: 100%;
	background-color: #000;
	min-height: 30px;
}
.footer{
	width: 100%;
	min-height: 50px;
	background-color: #000;
	margin-top: 10px;
}
</style>

</head>
<body>
	<div class="wrapper">
		<div class="header">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-5" style="color:white; font-family:hobo std"><h3>ONLINE VOTING SYSTEM</h3></div>
				<div class="col-md-5">
					<nav class="navbar navbar-inverse">
					  <div class="container-fluid">
						    <div class="navbar-header">
						      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span> 
						      </button>
						    </div>
						    <div class="collapse navbar-collapse" id="myNavbar">
						      <ul class="nav navbar-nav">
						        <li><a href="index.php"><span class="glyphicon glyphicon-home"> Home</a></li>
						        <li><a href="verification.php"><span class="glyphicon glyphicon-user"> Register</a></li>  
						        <li><a href="contact.php">Contact Us</a></li>
						        <li class="active"><a href="about.php">About Us</a></li> 
						      </ul>
						    </div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<div class="container" style="border-right:2px solid #000; border-left:2px solid #000; height:700px">
			<div class="row" style="margin-top:40px;">
				<div class="col-md-1"></div> 
	            <div class="col-md-3">
	                <div class="row">
	                    <div class="col-md-12"><img src="img/story.jpg" class="img-responsive img-rounded" alt="our story" width="100%"></div>
	                    EliteBTechnology.com began in 2018. After years in the web hosting industry, we realized that it was near impossible for the average Jane or Joe to create their own website. Traditional web hosting services were simply too complicated, time consuming, and expensive to manage.
	                </div>
	            </div>
	            <div class="col-md-1"></div> 
	            <div class="col-md-3">
	                <div class="row">
	                    <div class="col-md-12"><img src="img/vision.jpg" class="img-responsive img-rounded" alt="our vision" width="100%"></div>
	                    Every Individual Deserves a Website<br>We believe every individual should have the power to create their own website or online store. If you can point and click, you can create a professional website or online store using our free and intuitive tools.
	                </div>
	            </div>
	            <div class="col-md-1"></div>
	            <div class="col-md-3">
	                <div class="row">
	                    <div class="col-md-12"><img src="img/mission.jpg" class="img-responsive img-rounded" alt="our mission" width="100%"></div>
	                    At EliteBTechnology.com, we strive to provide exactly what our customers are looking for. A huge part of our brainstorming process is looking at our client feedback to make sure you're well taken care of.
	                </div>
	            </div>
			</div>
		</div>
		<div class="footer">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					Web based balloting conserves resources by reducing the amount of paper associated with an election and also ensures safegaurds in place to protect voting information and voters identities.<br>
					<center>Copyright Reserved &copy; &#124; 2018</center><br>
					<center>DESIGNED BY: MICHAEL OLUWADAMILARE.</center>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</div>


	<!-- GLOBAL SCRIPTS -->
    <script src="js/jquery-2.0.3.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
<script type="text/javascript">
  $('.dropdown').hover(function(){
      $('.dropdown-toggle', this).trigger('click');
  });
</script>
<script src="js/login.js"></script>
   
    <!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>