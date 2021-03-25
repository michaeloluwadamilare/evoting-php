<!DOCTYPE>
 <?php
    require_once("../connect.php");
    require_once 'session.php';
    confirm_logged_in(); 
?>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/glyphicons-halflings-regular.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
	<link rel="stylesheet" href="../css/bootstrap-fileupload.min.css" />
	<link rel="stylesheet" href="../css/main.css" />
<style type="text/css">
	body{
	background-color: white;
	overflow-x:hidden;
	overflow-y: visible;
}

.wrapper{
	width: 100%;
	min-height: 600px;
	
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
		<div class="container" style="border-right:2px solid #000; border-left:2px solid #000;">
			<div class="row" style="margin-top:40px;">
            	<div class="col-md-3">
       				<div id="left" style="width: 100%;" >
                        <ul id="menu">
                        	<li class="panel active">
                               <a href="#" style="text-align: center; font-family: hobo std;">DASHBOARD</a>
                            </li>   
                            <li class="panel">
                                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">Add/Delete Menu </a>
                                <ul class="collapse" id="form-nav">
                                    <li class=""><a href="Candidate.php"><i class="icon-angle-right"></i>Candidate</a></li>
                                    <li class=""><a href="position.php"><i class="icon-angle-right"></i>Postion</a></li>
                                    <li class=""><a href="party.php"><i class="icon-angle-right"></i>Party</a></li>
                                </ul>
                            </li>
                            <li class="panel">
                               <a href="voters_status.php">Voter's Status</a>
                            </li>
                            <li class="panel">
                               <a href="result.php">View result</a>
                            </li>
                            <li class="panel">
                               <a href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
            	</div>
            	<div class="col-md-1"></div>
	            <div class="col-md-6">
		            <form method="post" enctype="multipart/form-data">
		            	<div class="form-group">
	                        <label class="control-label col-lg-4">Upload passport</label>
	                        <div class="col-lg-8">
	                            <div class="fileupload fileupload-new" data-provides="fileupload">
	                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="img/demoUpload.jpg" alt="" /></div>
	                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
	                           		<div>
	                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file"  name="passport" required/></span>
	                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="form-group">
		                    <label>Name</label><input type="text" name="name" class="form-control" required>
		                </div>
		                 <div class="form-group">
		                    <label>Position</label>
		                    <select name="position" class="form-control">
		                    	<?php
		                    	$sql = "SELECT * FROM position ";
		                    	$query = mysqli_query($conn,$sql);
		                    	while($result = mysqli_fetch_array($query)){
		                    		echo '<option value = "'.$result['position_id'].'">' .$result['position_name']. '</option>';
		                    	}


		                    	?>
		                    </select>
		                </div>
		                <div class="form-group">
		                    <label>Party</label>
		                    <select name="party" class="form-control">
		                    	<?php
		                    	$sql = "SELECT * FROM party ";
		                    	$query = mysqli_query($conn,$sql);
		                    	while($result = mysqli_fetch_array($query)){
		                    		echo '<option value = "'.$result['party_id'].'">' .$result['name']. '</option>';
		                    	}


		                    	?>

		                    </select>
		                </div>
		                <center><button class="btn btn-danger" name="add">ADD</button></center>
		            </form>
				   <?php
				   	if (isset($_POST['add'])) {
						$name = $_POST['name'];
					    $party = $_POST['party'];
					    $position =$_POST['position']; 
					    $passport = $_FILES['passport']['name'];

					    if(move_uploaded_file($_FILES['passport']['tmp_name'], '../candidate/'.$passport)) {
					    	$sql1 = "SELECT * FROM candidate WHERE name ='$name' AND position ='$position' AND party = '$party' ";
					    	$query = mysqli_query($conn,$sql);
					    	if (mysqli_num_rows($query)==1) {
					    		echo "Candidate already exist";
					    	}
					    	else{
					     			$sql = "INSERT INTO candidate(name,party,passport,position)
					                            VALUES('$name','$party','$passport','$position')";
					                $query = mysqli_query($conn,$sql) or die(mysqli_error());
					                 echo '<div>Candidate has been added sucessfully</div>';
					                 }
					    }

					}	
				   ?>
				    <form method="post">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                   
                          <thead>
                            <tr>
                              
                              <th>ID</th>
                              <th>CANDIDATE NAME</th>

                            </tr>
                          </thead>
                          <tbody>

                           
                        <tr>
                    <?php
                    $sql = "SELECT * FROM candidate";
                    $query =mysqli_query($conn,$sql) or die(mysqli_error());
                    while ($result = mysqli_fetch_array($query)) {
                       echo '<tr><td> '.$result[0].'</td><td>'.$result[1].'</td><td><button class="btn btn-danger" name="delete" value="'.$result[0].'">Delete</button></td></tr><br>';

                      }
                    ?>

                     </tr>
                    </tbody>
                    </table>
                 </div>
                 </form>
                 <?php  
                 extract($_POST);
                 if (isset($_POST['delete'])) {

                     $sql1="DELETE FROM candidate WHERE candidate_id = $delete";
                     $query=mysqli_query($conn,$sql1);
                    echo '<div class="alert alert-success">Candidate has been delete successfully </div>';
                 }

                 ?>
			    </div>
	            <div class="col-md-2"></div>
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
    <script src="../js/jquery-2.0.3.min.js"></script>
     <script src="../js/bootstrap.min.js"></script>
    <script src="../plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
    <script type="text/javascript">
	  $('.dropdown').hover(function(){
	      $('.dropdown-toggle', this).trigger('click');
	  });
	</script>
         <!-- PAGE LEVEL SCRIPTS -->
    <script src="../plugins/jasny/js/bootstrap-fileupload.js"></script>
         <!-- END PAGE LEVEL SCRIPTS -->
     <!-- END BODY -->
</body>
</html>