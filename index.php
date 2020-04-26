<!DOCTYPE>
<?php
 require_once 'session.php';
   
    require_once'connect.php';
?> 
<html>
<head>
	<title>Home</title>
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
						        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"> Home</a></li>
						        <li><a href="verification.php"><span class="glyphicon glyphicon-user"> Register</a></li>  
						        <li><a href="contact.php">Contact Us</a></li>
						        <li><a href="about.php">About Us</a></li> 
						      </ul>
						    </div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<div class="container" style="border-right:2px solid #000; border-left:2px solid #000; min-height:700px">
			<div class="row">
				<div class="col-md-12" style="font-family:hobo std;margin-top:20px;"><marquee>Your VOTE counts. Say no to political apathy --- REGISTER NOW TO EXERCISE YOUR FRANCHISE!!! ---</marquee></div>
			</div>
			<div class="row" style="margin-top:40px;">
				<div class="col-md-7">
					<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
					    <!-- use jssor.slider.mini.js (40KB) instead for release -->
					    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
					    <script type="text/javascript" src="js/jssor.js"></script>
					    <script type="text/javascript" src="js/jssor.slider.js"></script>
					    <script>

					        jQuery(document).ready(function ($) {

					            var _SlideshowTransitions = [
					            //Fade in L
					                {$Duration: 1200, x: 0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
					            //Fade out R
					                , { $Duration: 1200, x: -0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
					            //Fade in R
					                , { $Duration: 1200, x: -0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
					            //Fade out L
					                , { $Duration: 1200, x: 0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

					            //Fade in T
					                , { $Duration: 1200, y: 0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
					            //Fade out B
					                , { $Duration: 1200, y: -0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
					            //Fade in B
					                , { $Duration: 1200, y: -0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
					            //Fade out T
					                , { $Duration: 1200, y: 0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

					            //Fade in LR
					                , { $Duration: 1200, x: 0.3, $Cols: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
					            //Fade out LR
					                , { $Duration: 1200, x: 0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
					            //Fade in TB
					                , { $Duration: 1200, y: 0.3, $Rows: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
					            //Fade out TB
					                , { $Duration: 1200, y: 0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

					            //Fade in LR Chess
					                , { $Duration: 1200, y: 0.3, $Cols: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
					            //Fade out LR Chess
					                , { $Duration: 1200, y: -0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
					            //Fade in TB Chess
					                , { $Duration: 1200, x: 0.3, $Rows: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
					            //Fade out TB Chess
					                , { $Duration: 1200, x: -0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

					            //Fade in Corners
					                , { $Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
					            //Fade out Corners
					                , { $Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }

					            //Fade Clip in H
					                , { $Duration: 1200, $Delay: 20, $Clip: 3, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
					            //Fade Clip out H
					                , { $Duration: 1200, $Delay: 20, $Clip: 3, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
					            //Fade Clip in V
					                , { $Duration: 1200, $Delay: 20, $Clip: 12, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
					            //Fade Clip out V
					                , { $Duration: 1200, $Delay: 20, $Clip: 12, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
					                ];

					            var options = {
					                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
					                $AutoPlayInterval: 1500,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
					                $PauseOnHover: 1,                                //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

					                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
					                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
					                $SlideDuration: 800,                                //Specifies default duration (swipe) for slide in milliseconds

					                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
					                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
					                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
					                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
					                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
					                },

					                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
					                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
					                    $ChanceToShow: 1                               //[Required] 0 Never, 1 Mouse Over, 2 Always
					                },

					                $ThumbnailNavigatorOptions: {                       //[Optional] Options to specify and enable thumbnail navigator or not
					                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
					                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

					                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
					                    $SpacingX: 8,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
					                    $DisplayPieces: 10,                             //[Optional] Number of pieces to display, default value is 1
					                    $ParkingPosition: 360                          //[Optional] The offset position to park thumbnail
					                }
					            };

					            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
					            //responsive code begin
					            //you can remove responsive code if you don't want the slider scales while window resizes
					            function ScaleSlider() {
					                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
					                if (parentWidth)
					                    jssor_slider1.$ScaleWidth(Math.max(Math.min(parentWidth, 800), 300));
					                else
					                    window.setTimeout(ScaleSlider, 30);
					            }
					            ScaleSlider();

					            $(window).bind("load", ScaleSlider);
					            $(window).bind("resize", ScaleSlider);
					            $(window).bind("orientationchange", ScaleSlider);
					            //responsive code end
					        });
					    </script>
					    <!-- Jssor Slider Begin -->
					    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
					    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 700px;
					        height: 500px; background: #191919; overflow: hidden;">

					        <!-- Loading Screen -->
					        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
					            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
					                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
					            </div>
					            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
					                top: 0px; left: 0px;width: 100%;height:100%;">
					            </div>
					        </div>

					        <!-- Slides Container -->
					        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 700px; height: 500px; overflow: hidden;">
					            <div>
					                <img u="image" src="img/vote1.Jpg" />
					            </div>

					            <div>
					                <img u="image" src="img/vote.Jpg" />
					            </div>

					            <div>
					                <img u="image" src="img/A1.jpg" />
					            </div>

					            <div>
					                <img u="image" src="img/A2.jpg" />
					            </div>

					            <div>					               
					             <img u="image" src="img/A3.jpg" />
					            </div>

					            <div>
					                <img u="image" src="img/A4.jpg" />
					            </div>
					        </div>
					        
					        <!--#region Arrow Navigator Skin Begin -->
					        <style>
					            /* jssor slider arrow navigator skin 05 css */
					            /*
					            .jssora05l                  (normal)
					            .jssora05r                  (normal)
					            .jssora05l:hover            (normal mouseover)
					            .jssora05r:hover            (normal mouseover)
					            .jssora05l.jssora05ldn      (mousedown)
					            .jssora05r.jssora05rdn      (mousedown)
					            */
					            .jssora05l, .jssora05r {
					                display: block;
					                position: absolute;
					                /* size of arrow element */
					                width: 40px;
					                height: 40px;
					                cursor: pointer;
					                background: url(../img/a17.png) no-repeat;
					                overflow: hidden;
					            }
					            .jssora05l { background-position: -10px -40px; }
					            .jssora05r { background-position: -70px -40px; }
					            .jssora05l:hover { background-position: -130px -40px; }
					            .jssora05r:hover { background-position: -190px -40px; }
					            .jssora05l.jssora05ldn { background-position: -250px -40px; }
					            .jssora05r.jssora05rdn { background-position: -310px -40px; }
					        </style>
					        <!-- Arrow Left -->
					        <span u="arrowleft" class="jssora05l" style="top: 158px; left: 8px;">
					        </span>
					        <!-- Arrow Right -->
					        <span u="arrowright" class="jssora05r" style="top: 158px; right: 8px">
					        </span>
					        <!--#endregion Arrow Navigator Skin End -->
					        <!--#region Thumbnail Navigator Skin Begin -->
					        <!-- Help: http://www.jssor.com/development/slider-with-thumbnail-navigator-jquery.html -->
					        <style>
					            /* jssor slider thumbnail navigator skin 01 css */
					            /*
					            .jssort01 .p            (normal)
					            .jssort01 .p:hover      (normal mouseover)
					            .jssort01 .p.pav        (active)
					            .jssort01 .p.pdn        (mousedown)
					            */

					            .jssort01 {
					                position: absolute;
					                /* size of thumbnail navigator container */
					                width: 800px;
					                height: 100px;
					            }

					                .jssort01 .p {
					                    position: absolute;
					                    top: 0;
					                    left: 0;
					                    width: 72px;
					                    height: 72px;
					                }

					                .jssort01 .t {
					                    position: absolute;
					                    top: 0;
					                    left: 0;
					                    width: 100%;
					                    height: 100%;
					                    border: none;
					                }

					                .jssort01 .w {
					                    position: absolute;
					                    top: 0px;
					                    left: 0px;
					                    width: 100%;
					                    height: 100%;
					                }

					                .jssort01 .c {
					                    position: absolute;
					                    top: 0px;
					                    left: 0px;
					                    width: 68px;
					                    height: 68px;
					                    border: #000 2px solid;
					                    box-sizing: content-box;
					                    background: url(../img/t01.png) -800px -800px no-repeat;
					                    _background: none;
					                }

					                .jssort01 .pav .c {
					                    top: 2px;
					                    _top: 0px;
					                    left: 2px;
					                    _left: 0px;
					                    width: 68px;
					                    height: 68px;
					                    border: #000 0px solid;
					                    _border: #fff 2px solid;
					                    background-position: 50% 50%;
					                }

					                .jssort01 .p:hover .c {
					                    top: 0px;
					                    left: 0px;
					                    width: 70px;
					                    height: 70px;
					                    border: #fff 1px solid;
					                    background-position: 50% 50%;
					                }

					                .jssort01 .p.pdn .c {
					                    background-position: 50% 50%;
					                    width: 68px;
					                    height: 68px;
					                    border: #000 2px solid;
					                }

					                * html .jssort01 .c, * html .jssort01 .pdn .c, * html .jssort01 .pav .c {
					                    /* ie quirks mode adjust */
					                    width /**/: 72px;
					                    height /**/: 72px;
					                }
					        </style>

					        <!-- thumbnail navigator container -->
					       
					        <!--#endregion Thumbnail Navigator Skin End -->
					        <a style="display: none" href="http://www.jssor.com">js slider</a>
					    </div>
					    <!-- Jssor Slider End -->
				</div>
				<div class="col-md-1"></div>

				<div class="col-md-4">
					<div class="tab-content">
				        <div id="login" class="tab-pane active">
				            <form action="login.php" method="POST" class="form-signin">
				                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
				                    Enter your Voter's ID and password
				                </p><br/>
				                <label>Voter's ID</label><input type="text" placeholder="Voter's ID" name="voterId" class="form-control" required/><br/>
				                <label>Password</label><input type="password" placeholder="password" name="password" class="form-control" required/>
				                <p style="color:red">(Your Surname is your password)</p><br/>
				                <?php 
						    		if (isset($_GET['id'])) {
						    			echo '<div class="alert alert-danger">sorry ! incorrect login details</div>';
						    		}
				    			 ?>
				                <button class="btn text-muted text-center btn-danger" name="btnsignin" type="submit">Sign in</button>
				            </form>
				        </div>
				        <div id="forgot" class="tab-pane">
				            <form action="" class="form-signin">
				                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Enter your valid e-mail</p>
				                <input type="email"  required="required" placeholder="Your E-mail"  class="form-control"  required/>
				                <br />
				                <button class="btn text-muted text-center btn-success" type="submit">Recover Password</button>
				            </form>
				        </div>
				    </div>
				    <div class="text-center">
				        <ul class="list-inline">
				            <li><a class="text-muted" href="#login" data-toggle="tab">Login</a></li>
				            <li><a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a></li>
				        </ul>
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