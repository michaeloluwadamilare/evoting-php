<!DOCTYPE>

<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/glyphicons-halflings-regular.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/bootstrap-fileupload.min.css" />
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
		<div class="container" style="border-right:2px solid #000; border-left:2px solid #000;">
			<div class="row" style="margin-top:40px;">
            	<div class="col-md-3">
       
            	</div>
	            <div class="col-md-6">
	            	 <div style="background-color:#f55; font-family:cursive; color:white;"><marquee><h4>PLEASE ENTER VALID INFORMATION ON THE REGISTRATION FORM</h4></marquee></div> 
		            <form  method="post" enctype="multipart/form-data">
	            	<div class="row">
	            		<div class="col-md-6">
	            			<div class="form-group">
		                    	<label>Surname</label><input type="text" name="sname" class="form-control" required>
		                	</div>
		                	<div class="form-group">
		                    	<label>Othername(s)</label><input type="text" name="Oname" class="form-control" required>
		                	</div>
		                	<div class="form-group">
		                    	<label>Date of Birth</label><input type="date" value="yyyy-mm-dd" name="dob" class="form-control" required>
		                	</div>
		                	<div class="form-group">
			                    <label>Gender</label>
			                    <input type="radio" name="gender" value="male" required> Male
			                    <input type="radio" name="gender" value="female" required> Female
		                	</div>
	            		</div>
	            		<div class="col-md-6">
	            			<div class="form-group">
		                        <label class="control-label col-md-12">Upload passport</label>
		                        <div class="col-md-12">
		                            <div class="fileupload fileupload-new" data-provides="fileupload">
		                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="img/demoUpload.jpg" alt="" /></div>
		                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
		                           		<div>
		                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file"  name="passport" /></span>
		                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
		                                </div>
		                            </div>
		                        </div>
                    		</div>
	            		</div>
	            	</div>

	                <div class="form-group">
	                    <label>State</label><input type="text" name="state" class="form-control" required>
	                </div>	
	                <div class="form-group">
	                    <label>LGA</label><input type="text" name="lga" class="form-control" required>
	                </div>	
	                <div class="form-group">
	                    <label>Town</label><input type="text" name="town" class="form-control" required>
	                </div>	 
	                <div class="form-group">
	                    <label>Ward</label><input type="text" name="ward" class="form-control" required>
	                </div>
	                <div class="form-group">
	                    <label>Address</label><input type="text" name="address" class="form-control" required>
	                </div>
	                <div class="form-group">
	                    <label>Phone Number</label><input type="text" name="phoneNo" class="form-control" required>
	                </div>
	                <div class="form-group">

	                    <label>Email</label><input type="email" name="email" class="form-control" required>
	                </div>
	                <center><button class="btn btn-danger" name="submit">Submit</button></center>
		            </form>
			    </div>
	            <div class="col-md-3">
	            	<?php
		            require_once("connect.php");
		            extract($_GET);
		            if (isset($_POST['submit'])) {
		                            $prefix ="VO";
		                            $suffix = "TER";
		                            $num = rand(100,99999999);
		                            $voterId = $prefix.$num.$suffix;

		            $sname = $_POST['sname'];
		            $Oname = $_POST['Oname'];
		            $dob = $_POST['dob'];
		            $email = $_POST['email'];
		            $state = $_POST['state'];
		            $lga = $_POST['lga'];
		            $gender = $_POST['gender'];
		            $phoneNo = $_POST['phoneNo'];
		            $address = $_POST['address'];
		            $passport = $_FILES['passport']['name'];
		            $ward = $_POST['ward'];
		            $town = $_POST['town'];

		            if(move_uploaded_file($_FILES['passport']['tmp_name'], 'img/'.$passport)) {

		            $sq2 = "SELECT * FROM voters_data WHERE natid = '$natid' ";
		            $query2 = mysql_query($sq2) or die(mysql_error());
		            if (mysql_num_rows($query2)==1) {
		                echo '<div class="alert alert-danger">
		            								The National ID you entered belongs to or have been used by another voter, click the Back Button to verify your National ID<br />
		            								<a href="verification.php"><button class="btn btn-danger btn-lg">Back</button></a>
		            						</div>';
		            }
		            else{
		                $sql = "INSERT INTO voters_data(surname,other_name,dob,email,state,lga,gender,phoneNo,address,passport,voterId,ward,town,natid)
		                                    VALUES('$sname','$Oname','$dob','$email','$state','$lga','$gender','$phoneNo','$address','$passport','$voterId','$ward','$town','$natid')";
		                        $query = mysql_query($sql) or die(mysql_error());
		 
		                        if($query){
 									echo '<div class="alert alert-success">
		            				You have registered successfully and your voters id is '.$voterId.'
		            				</div>';
		                            
		                        }
		            		}
		            	}
		            }

		            ?>
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