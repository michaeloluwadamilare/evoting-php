<!DOCTYPE>
<?php
    require_once 'session.php';
    confirm_logged_in();
    require_once 'connect.php';


            	extract($_GET);
            	extract($_SESSION);
            	if (isset($_POST['submit'])) {
            		$voter = $_POST['voter'];
            		$sql = "SELECT * FROM candidate WHERE candidate_id = '$voter'";
            		$query = mysqli_query($conn,$sql) or die(mysqli_error());
            		$result = mysqli_fetch_array($query);
            		extract($result);
            			$voting = $result['vote'];
            			$voting++;
            		
            		$sq2 ="UPDATE candidate SET vote='$voting' WHERE candidate_id='$voter'";
            		$query2 = mysqli_query($conn,$sq2) or die(mysqli_error());

            		$status = "voted";
            		$sq3 ="INSERT INTO voters_status(voters_id,position_id,status)
            				VALUES('$voterId','$position_id','$status')";
            		$query3 = mysqli_query($conn,$sq3) or die(mysqli_error());
            		
            	}
            	
            	
            	?>
<html>
<head>
	<title>E-Voting</title>
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
								    	$sql = "SELECT * FROM position";
			                    		$query = mysqli_query($conn,$sql) or die(mysqli_error());
			                    		if ($query) {
			                    			while ($result = mysqli_fetch_array($query)) {
			                    				echo '<li><a href="vote.php?position_id=' .$result['position_id'].'">'.$result['position_name'].'</a>';
			                    			}
			                    		}
			                    		?>	
			                    	 </li> 
					    			</ul>
								</li> 
						        <li><a href="contact.php">Contact Us</a></li>
						        <li><a href="about.php">About Us</a></li>
								<li><a href="logout.php">Logout</a></li>
						      </ul>
						    </div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<div class="container" style="border-right:2px solid #000; border-left:2px solid #000; min-height:600px;">
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
			                       		$sql ="SELECT * FROM position";  
			                    		$query = mysqli_query($conn,$sql) or die(mysqli_error());
			                    		if ($query) {
			                    			while ($result = mysqli_fetch_array($query)) {
			                    				echo '<li><a href="vote.php?position_id=' .$result['position_id'].'">'.$result['position_name'].'</a>';
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
            	<div class="col-md-6" style="margin-top: 30px;">
            		<div class="row bg-primary">
            			<?php 
            			$sql = 'SELECT 
			                    								candidate.candidate_id,
			                    								candidate.name,
			                    								candidate.passport,
			                    								candidate.party,
			                    								candidate.position,
			                    								position.position_id,
			                    								position.position_name
			                    								FROM
			                    								candidate
			                    								JOIN
			                    								position
			                    								ON
			                    								candidate.position = position.position_id
			                    								WHERE
			                    								candidate.position = '.$position_id.'
			                    								';
            			$query = mysqli_query($conn,$sql) or die(mysqli_error());


            			?>
            			<div class="col-md-12" style="height: 30px; text-align: center; font-family: hobo std; font-size: 18px;">
            				<!-- To output the position name from the database -->
            				<?php 
            					$position_sql = "SELECT * FROM position WHERE position_id ='$position_id'";
            					$position_query= mysqli_query($conn,$position_sql) or die(mysqli_error());
            					if (mysqli_num_rows($position_query)==1) {
            					$position_result =(mysqli_fetch_array($position_query));
            					echo $position_result['position_name'];
            					}
            				?>
            			</div>
            		</div>
            		<div class="row">
            			<div class="col-md-2"></div>
            			<div class="col-md-8">
            				<table class="table table-striped table-bordered table-hover">
			                  <thead>
			                      <tr>
			                          
			                          <th>CANDIDATES</th>
			                          <th>Vote</th>
			                      </tr>
			                  </thead>
		                      <tbody>
		                      	<form method="post">
		                          <tr>
		                           <?php
		                             if ($query) {
		                              while ($result = mysqli_fetch_array($query)) {
		                               echo '<tr><td><img class="img-rounded img-responsive" src="candidate/'.$result['passport'].'"width="150" height="150"/>'.$result['name'].'</td><td><br><br><input style="width:100%; height:40px;" type="radio" name="voter" value="'.$result[0].'" required></td></tr><br>';
		                              }
		                         	 }
		                            ?>
		                          </tr>
		                         
		                      </tbody>
                  			</table>
            			</div>
            			<div class="col-md-2"></div>	
            		</div>
            		<?php
            		
            		$status = "voted";
            		$sql1 = "SELECT * FROM voters_status WHERE position_id ='$position_id' AND voters_id ='$voterId' AND status ='$status'";
            		$query1 =  mysqli_query($conn,$sql1) or die(mysqli_error());
            		if (mysqli_num_rows($query1)==1) {
            			echo '<div class="alert alert-success">You have voted for this position</div>';
            		}
            		else{
            		echo '<div style="float:left; margin-top: 30px;"><button class="btn-primary" name="submit" style="border-radius: 10px;">Submit ballot</button></div>';
            		}
            		?>
            	</form>
            
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