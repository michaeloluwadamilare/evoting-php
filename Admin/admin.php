<!DOCTYPE>
<?php
    require_once 'session.php';
    confirm_logged_in();
    require_once'../connect.php';
?>

<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../fonts/glyphicons-halflings-regular.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
    <link rel="stylesheet" href="../plugins/Font-Awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="../css/main.css" />
<style type="text/css">
    body{
    background-color: white;
     overflow-x: hidden;
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
th{

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
        <div class="container" style="border-right:2px solid #000; border-left:2px solid #000; min-height:500px;">
            <div class="row" style="margin-top:40px;">
                <div class="col-md-4">
                   <div id="left" style="width: 100%;" >
                        <ul id="menu">
                            <li class="panel active">
                               <a href="#" style="text-align: center; font-family: hobo std;">DASHBOARD</a>
                            </li>   
                            <li class="panel">
                                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">Add/Delete Menu </a>
                                <ul class="collapse" id="form-nav">
                                    <li class=""><a href="Candidate.php">Candidate</a></li>
                                    <li class=""><a href="position.php">Postion</a></li>
                                    <li class=""><a href="party.php">Party</a></li>
                                </ul>
                            </li>
                            <li class="panel">
                               <a href="voters_status.php">Voter's status</a>
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
                    <div class="row">
                        <div class="col-md-4">
                         <center>
                            <img class="img-circle img-responsive" src="../img/20180710_160335.jpg" width="150" height="100"/>
                         </center>
                        </div>
                        <div class="col-md-8" style="margin-top: 50px; text-transform: uppercase;">
                         <p style="font-family: hobo std;"><b>ADMIN</b></p>
                            <?php
                            echo $_SESSION['username'];
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