<?php 
session_start();
ob_flush();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>ERP</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="#" />
<!-- css -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!--font awesome-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/colors.css">  
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/carousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />



<link href="skins/default.css" rel="stylesheet" />


</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="corperatelogin.php"><span>ERP</span>ism</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="corperatelogin.php">Home</a></li>
                        
    </ul>
    </div>
<!-- yaha se start kar then yaha pe first admin tab laga-->
<div class="col-lg-4 col-md-4 col-sm-12" style="left:370px;">
                	<h4 class="title">
                    	<span>Common ERP Login </span>
                    </h4>
                	<form id="loginform" method="post" name="loginform" action="">
						<div class="form-group">
							<div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="username" class="form-control" placeholder="Username">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
						</div>
						
						<div class="form-group">
							<div class="checkbox">
								<label> 
									<input type="checkbox"> Remember me
								</label>
							</div>
						</div>
						<div class="form-group">
						<button type="submit" name="submit" value="Sign IN" class="button">Sign in</button>
						</div>
					</form>
                </div><!-- end login -->
<!--admin ke validation complete hone par menu page pe redirect karo-->


<!--menu page pe module select karne ka option do-->


<!--module select karne par usse us module ke edit page pe redirect karo-->


<!--waha pe entry karne ka option do ki waha pe module se related save entry kar sake-->


<!--eg again user id and password wala common login page banao-->


<!--waha pe login karne ke baad jo bi hamne waha pe entry kia hai wo yaha pe update ho jana chaiye-->


<!--bass isse hi karna hai dynamic way me and code ko easy tarike se likhna hai-->
<!--bas itna hi karna hai-->
    </div>
    	</div>
    		</header>
   				 </div>
   				 <section class="team" style="padding-top:0px;">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="col-lg-12">
          <h6 class="description">DEVELOPER TEAM</h6>
          <div class="row pt-md">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="demos/photo1.png" class="img-responsive">
                <ul class="text-center">
                  <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                  <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                </ul>
              </div>
              <h1>Niraj Kumar</h1>
              <h2>Project Management</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="demos/photo1.png" class="img-responsive">
                <ul class="text-center">
                  <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                  <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                </ul>
              </div>
              <h1>Shivam Gupta</h1>
              <h2>BackeEnd Developer</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="demos/photo1.png" class="img-responsive">
                <ul class="text-center">
                  <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                  <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                </ul>
              </div>
              <h1>Paras Grover</h1>
              <h2>Backend Developer</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="demos/photo1.png" class="img-responsive">
                <ul class="text-center">
                  <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                  <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                </ul>
              </div>
              <h1>Kaleshwar Agarwal</h1>
              <h2>FrontEnd Designer</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Get in touch with us</h5>
					<address>
					<strong>DR. KNMIET</strong><br>
					 Niraj Kumar, Sector 63 <br>
					 Ahuja Palace , Flat no 214 </address>
					<p>
						<i class="icon-phone"></i> (+91) 888-1661-844 <br>
						<i class="icon-envelope-alt"></i> admin@flatspace.in
					</p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Pages</h5>
					<ul class="link-list">
						<li><a href="#">Press release</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Career center</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="link-list">
						<li><a href="#">Training camps for the students skill enhancement.</a></li>
						<li><a href="#">Apply for the internship. Awesome place to meet geeks</a></li>
						<li><a href="#">Development of complex ERP is really a big deal.</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Flickr photostream</h5>
					<div class="flickr_badge">
						<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
					</div>
					<div class="clear">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Flatspace 2016 All right reserved. By </span><a href="http://flatspace.in" target="_blank">ERpism</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
<?php
        include ('db.php');
        if(isset($_POST['submit'])){
       
            $fname=$_POST['username'];
            $pass=$_POST['password'];
            
    $con="select * from admin where username='$fname' and passcode='$pass'";
    
    $var=mysql_query($con);

    $count = mysql_num_rows($var);

    if($count==1)
    {
    	if (headers_sent()) {
    echo "<script>alert(location.href = 'http://localhost/gyanpot%20bootstrap/tf/madecolg/student1.php')</script>";
			}
    	
        exit(header("Location: /student1.php"));
        
    }
    else
    {
        echo "<script>alert('Sorry something wrong has occured')</script>";
    }
}
?>