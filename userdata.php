<!DOCTYPE>
<?php
    require_once 'session.php';
    confirm_logged_in();
    require_once 'connect.php';
?>
<html>
<head>
	<title>users page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/glyphicons-halflings-regular.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="plugins/Font-Awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="css/main.css" />
<style type="text/css">
	body{
	background-color: white;
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
th{

}
</style>

</head>
<body>
	<div class="wrapper">
		<div class="header">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-5" style="color:white; font-family:hobo std"><h3>ONLINE VOTING SYSTEM</h3></div>
				<div class="col-md-6">
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
						        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">E-Voting</a>
									<ul class="dropdown-menu"> 
								      <li>
								    	<?php  
			                    		$query = mysql_query("SELECT * FROM position") or die(mysql_error());
			                    		if ($query) {
			                    			while ($result = mysql_fetch_array($query)) {
			                    				echo '<li><a href="vote.php?position_id=' .$result['position_id'].'">'.$result['position_name'].'</a>';
			                    			}
			                    		}
			                    		?>	
			                    	 </li> 
					    			</ul>
								</li>
						        <li><a href="contact.php">Contact Us</a></li>
						        <li><a href="about.php">About Us</a></li>
						      </ul>
						    </div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<div class="container" style="border-right:2px solid #000; border-left:2px solid #000; min-height:700px;">
			<div class="row" style="margin-top:40px;">
            	<div class="col-md-4">
            		<div id="left" style="width: 100%;" >
			            <ul id="menu">
			            	<li class="panel active">
                               <a href="#" style="text-align: center; font-family: hobo std;">MAIN-MENU</a>
                            </li>   
			                <li class="panel ">
			                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">E-Voting </a>
			                    <ul class="collapse" id="form-nav">
			                    	<?php  
			                    		$query = mysql_query("SELECT * FROM position") or die(mysql_error());
			                    		if ($query) {
			                    			while ($result = mysql_fetch_array($query)) {

			                    				echo '<li><a href="vote.php?position_id='.$result['position_id'].'">'.$result['position_name'].'</a>';
			                    			}
			                    		}
			                    	?>

			                    </ul>
			                </li>
			                <li class="panel">
			                    <a href="#">Help</a>
			                </li>
			                <li class="panel">
			                   <a href="logout.php">Logout</a>
			                </li>
			            </ul>
			        </div>
            	</div>
            	<div class="col-md-1"></div>
            	<div class="col-md-6">
            		<div class="row">
            			<div class="col-md-12">
            				<strong><u>Main menu</u></strong>
            				<p><b>Click on the link at the left-hand side to continue</b></p>
            			</div>
            		</div>

            		<div class="row bg-primary">
            			<div class="col-md-4">
            				<?php
								
								echo '<img class="img-circle img-responsive" src="img/'.$_SESSION['passport'].'"width="150" height="100"/>';
							?>
            			</div>
            			<div class="col-md-8" style="text-transform:uppercase; color: white; font-family: cursive; font-size: 18px;">
            				<br>
            				<?php
	            				echo $_SESSION['lastname'];
								echo " ";
								echo $_SESSION['firstname']."<br>";
								echo $_SESSION['voterId'];
            				?>
            			</div>
            		</div>
            		<table class="table table-striped">
            			<tr>
            				<th class="bg-primary">Gender</th>
            				<td><?php echo $_SESSION['gender']; ?></td>
            			</tr>
            			<tr>
            				<th class="bg-primary">Date of Birth</th>
            				<td><?php echo $_SESSION['dob']; ?></td>
            			</tr>
            			<tr>
            				<th class="bg-primary">State</th>
            				<td><?php echo $_SESSION['state']; ?></td>
            			</tr>
            			<tr>
            				<th class="bg-primary">LGA</th>
            				<td><?php echo $_SESSION['lga']; ?></td>
            			</tr>
            			<tr>
            				<th class="bg-primary">Town</th>
            				<td><?php echo $_SESSION['town']; ?></td>
            			</tr>
            			<tr>
            				<th class="bg-primary">Ward</th>
            				<td><?php echo $_SESSION['ward']; ?></td>
            			</tr>
            			<tr>
            				<th class="bg-primary">Email</th>
            				<td><?php echo $_SESSION['email']; ?></td>
            			</2r>
            			<tr>
            				<th class="bg-primary">Phone number</th>
            				<td><?php echo $_SESSION['phoneNo']; ?></td>
            			</tr>
            			<tr>
            				<th class="bg-primary">Address</th>
            				<td><?php echo $_SESSION['address']; ?></td>
            			</tr>
            		</table>	
            	</div>
            	<div class="col-md-1"></div>
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