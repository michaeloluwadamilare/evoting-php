<!DOCTYPE>
<html>
<head>
	<title>Contact Us</title>
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
						        <li class="active"><a href="contact.html">Contact Us</a></li>
						        <li><a href="about.php">About Us</a></li> 
						      </ul>
						    </div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<div class="container" style="border-right:2px solid #000; border-left:2px solid #000; height:700px">
			<div class="row" style="margin-top:40px;">
				<div class="col-md-7">
	                <center><h5 style="font-family: hobo std;"><u>MORE ENQUIRIES</u></h5></center>
	                <form>
	                    <div class="form-group">
	                        <label>Name</label><input type="text" class="form-control" required>
	                    </div>
	                    <div class="form-group">
	                        <label>Phone Number</label><input type="text" class="form-control" required>
	                    </div>
	                    <div class="form-group">
	                        <label>Email</label><input type="email" class="form-control" placeholder="username@email.com" required>
	                    </div>
	                    Comment<textarea class="form-control"></textarea><br>
	                     <center><button class="btn btn-danger">SUBMIT</button></center>
	                </form>
            	</div>
            	<div class="col-md-1"></div>
	            <div class="col-md-4">
	               <h5 style="font-family: hobo std;"><u>CONTACT US</u></h5>
	                <b>Our Head Office</b>
	                <p>No 33, Edwood ward street,
	                <p>Off Clinton bustop,
	                <p>Washinton D.C.
	                <p>P.M.B 1515.</p>
	                <p></p>
	                <b>Our branch</b>
	                <p>No 15, Jam fortune,
	                <p>Adjacent Kwara radio,
	                <p>Ilorin,Kwara State.
	                <p>P.M.B 2415.</p>
	                <div>
	                    <p><b><i>Website</i></b>: <a href="#">www.onlinevoting.com</a>
	                    <p><b><i>Email</i> <span class="glyphicon glyphicon-envelope"> </b> : <a href="#">darefelix3858@gmail.com</a>
	                    <p><b><i>Call</i> <span class="glyphicon glyphicon-phone-alt"> </b> : 08134603858, 07087178945</p>
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