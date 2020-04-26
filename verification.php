<!DOCTYPE>
<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/glyphicons-halflings-regular.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="plugins/Font-Awesome/css/font-awesome.css" />
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
						        <li class="active"><a href="verification.php"><span class="glyphicon glyphicon-user"> Register</a></li> 
						        <li><a href="contact.php">Contact Us</a></li>
						        <li><a href="about.php">About Us</a></li> 
						      </ul>
						    </div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<div class="container" style="border-right:2px solid #000; border-left:2px solid #000; height:700px;">
			<div class="row" style="margin-top:40px;">
            	<div class="col-md-3"></div>
            	<div class="col-md-6">
            		 <div style="background-color:#f55; font-family:cursive; color:white;"><marquee><h4>---PLEASE ENTER VALID NATIONAL ID NUMBER---</h4></marquee></div>
            		<form method="post">
            			<div class="form-group">
		                    <label>National ID</label><input type="text" name="natid" class="form-control" placeholder="Enter national ID number" required>
		             	</div>
		             	<button class="btn btn-danger" name="verify">Verify</button>
		             	
		            </form>
            	</div>
            	<div class="col-md-3">
            		<div class="row">
            		<div class="col-md-12">
            			
            			<?php 
            				require_once("connect.php");
            				if (isset($_POST['verify'])) {
            					
            					extract($_POST);

            					$sql = "SELECT * FROM voters_natid WHERE natId = '$natid'";
            					$query = mysql_query($sql) or die(mysql_error());
            					if (mysql_num_rows($query) == 1) {
            						
            						$result = mysql_fetch_array($query)or die(mysql_error());
            						echo '<div class="alert alert-success">
            								Congratulation! Your National ID has been verified successfully, click the Next Button to proceed<br />
            								<a href="register.php?natid='.$result['natId'].'&id='.$result['id'].'"><button class="btn btn-success btn-lg">Next</button></a>
            						</div>';

            					}
            					else{
            						echo '<div class="alert alert-danger">This National ID is not valid, please check and try again</div>';
            					}
            				}
            			?>

            		</div>
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
    <script src="plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
    <script type="text/javascript">
	  $('.dropdown').hover(function(){
	      $('.dropdown-toggle', this).trigger('click');
	  });
	</script>
         <!-- PAGE LEVEL SCRIPTS -->
    <script src="plugins/jasny/js/bootstrap-fileupload.js"></script>
         <!-- END PAGE LEVEL SCRIPTS -->
     <!-- END BODY -->
</body>
</html>