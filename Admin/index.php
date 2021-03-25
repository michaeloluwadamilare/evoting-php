<!DOCTYPE>
<?php
 	require_once 'session.php';
   
    require_once'../connect.php';
?> 
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/glyphicons-halflings-regular.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
	<link rel="stylesheet" href="../plugins/magic/magic.css" />
<style type="text/css">
	body{
	background-color: white;
}

.wrapper{
	width: 100%;
	min-height: 700px;
	overflow: hidden;
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
                <div class="col-md-12" style="color:white; font-family:hobo std"><center><h3>ONLINE VOTING SYSTEM</h3></center></div>
            </div>
        </div>   
		<div class="container" style="border-right:2px solid #000; border-left:2px solid #000; height:500px">
			<div class="row" style="margin-top:40px;">
				
				<div class="col-md-4"></div>

				<div class="col-md-4">
					<div class="tab-content">		     
			           <form method="POST" class="form-signin">
			                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
			                    ADMIN
			                </p><br/>
			                <label>Username</label><input type="text" placeholder="Enter Username" name="username" class="form-control" required/><br/>
			                <label>Password</label><input type="password" placeholder="password" name="password" class="form-control" required/><br>
			                <?php
								if (isset($_POST['signin'])) {


								$username = $_POST['username'];
								$password = $_POST['password'];

								$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
								$query = mysqli_query($conn,$sql) or die(mysqli_error());
								$user = mysqli_fetch_array($query);
								if (mysqli_num_rows($query)==1) {

									$_SESSION['username'] = $user['username'];
									$_SESSION['admin_id'] = $user['admin_id'];

									header("Location: admin.php?username=".sha1($_SESSION['username'])."");
								}
								else{
									header("Location: index.php?id=error");
								}					
							}
						    		if (isset($_GET['id'])) {
						    			echo '<div class="alert alert-danger">sorry ! incorrect login details</div>';
						    		}
							?>
			                 <button class="btn text-muted text-center btn-danger" name="signin" type="submit">Sign in</button>
			            </form>
				    </div>    
				</div>
				<div class="col-md-4"></div>
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
    <script src="../js/jquery-2.0.3.min.js"></script>
     <script src="../js/bootstrap.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
<script type="text/javascript">
  $('.dropdown').hover(function(){
      $('.dropdown-toggle', this).trigger('click');
  });
</script>
<script src="../js/login.js"></script>
   
    <!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>