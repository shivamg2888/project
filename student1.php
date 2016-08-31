
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
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/colors.css">  
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/carousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

<script type="text/javascript">
       function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

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
<li><center><marquee style="color:#0AD608;">Welcome to the ERP center . Please check the latest update . Please submit the fee. You have 20,000 RS dues on the college. Thanks!!!</marquee></center></li>


                  

<!--yaha pe module select karne ka option dia hai..-->
<section class="section1">
    	<div class="container clearfix">
        	<div class="content clearfix">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <ul class="nav nav-tabs nav-stacked">
                          <img id="blah" src="#" alt="Sorry No image" style="display: inline; width:160px; height:180px; padding: 10px 0 10px;margin-left: 20px;margin-right: 0;">
                           	<input type='file' onchange="readURL(this);" style="border-left-width:20px; padding-left:20px;" />                         	
							<li class="active" style="width:250px;"><a href="student1.php">Home</a></li>
                            <li style="width:250px;"><a href="student360.php">Student 360</a></li>
                            <li style="width:250px;"><a href="placement.php">Placements</a></li>
                            <li style="width:250px;"><a href="attendence1.php">Attendence</a></li>
                            <li style="width:250px;"><a href="studentinfo.php">Student Information</a></li>
                            <li style="width:250px;"><a href="myresult.php">My Result</a></li>
                            <li style="width:250px;"><a href="library1.php">Library Search</a></li>
                            <li style="width:250px;"><a href="feedback1.php">Student Feedback</a></li>
                            <li style="width:250px;"><a href="corperatelogin.php">Log Out</a></li>
                           
                        </ul>
                </div><!-- end sidebar -->
   <span class="col-lg-4 col-md-6 col-sm-4 col-xs-6" style="padding-left:0px;width:715px;">
                        <ul class="nav nav-tabs nav-stacked">
                        
<span class="list-group">
  <a href="#" class="list-group-item list-group-item-success">Name : Niraj Kumar</a>
  <a href="#" class="list-group-item list-group-item-info">Unique Id : 01203cse005</a>
  <a href="#" class="list-group-item list-group-item-warning">Batch : 2016</a>
  <a href="#" class="list-group-item list-group-item-danger">Branch : Computer Science</a>
</span>
                              
            
                           
                        </ul>
                </span>             
<!--module select karne ka end-->
<!--module select karne ke pass waha pe option do ki usse bhut se information waha pe receive ho..-->
<div class="col-sm-6 col-lg-6" style="padding-left:0px; width:715px;padding-top:0px;">
                        <h4 class="title">Latest Updates Click here</h4>
                        <div class="panel-group" id="accordion-panel2">
                          <div class="panel panel-success">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a class="accordion-toggle  collapsed" data-toggle="collapse" data-parent="#accordion-panel2" href="#collapseOnePanel2">
                                  Notice/Circular
                                </a>
                              </h4>
                            </div>
                            <div id="collapseOnePanel2" class="panel-collapse collapse" style="height: 0px;">
                              <div class="panel-body">
                                <table class="table">
    <thead>
        <tr>
            <th>Row</th>
            <th>Notice</th>  
            <th>Link</th>
        </tr>
    </thead>
    <tbody>
        <tr class="active">
            <td>1</td>
            <td>Change in the curriculam of final year</td>
            <td><a href="#">click here</a></td>
        </tr>
        <tr class="success">
            <td>2</td>
            <td>Class off for the first year student</td>
            <td><a href="#">click here</a></td>
            
        </tr>
        <tr class="info">
            <td>3</td>
            <td>Do's and don't in the campus</td>
            <td><a href="#">click here</a></td>
        </tr>
        <tr class="warning">
            <td>4</td>
            <td>Tommorow college gonna be off</td>
            <td><a href="#">click here</a></td>
        </tr>
        <tr class="danger">
            <td>5</td>
            <td>Right to information act misuse</td>
            <td><a href="#">click here</a></td>
        </tr>
    </tbody>
</table>
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-success">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a class="accordion-toggle  collapsed" data-toggle="collapse" data-parent="#accordion-panel2" href="#collapseTwoPanel2">
                                  Current Module
                                </a>
                              </h4>
                            </div>
                            <div id="collapseTwoPanel2" class="panel-collapse collapse" style="height: 0px;">
                              <div class="panel-body">
                                <table class="table">
    <thead>
        <tr>
            <th>Row</th>
            <th>Subject Name</th>
            <th>Date</th>
            <th>Subject Code</th>
        </tr>
    </thead>
    <tbody>
        <tr class="active">
            <td>1</td>
            <td>DLD</td>
            <td>04/07/2014</td>
            <td>ECS102</td>
        </tr>
        <tr class="success">
            <td>2</td>
            <td>DSUC</td>
            <td>01/07/2014</td>
            <td>ECS534</td>
        </tr>
        <tr class="info">
            <td>3</td>
            <td>OS</td>
            <td>05/07/2014</td>
            <td>ECS121</td>
        </tr>
        <tr class="warning">
            <td>4</td>
            <td>AI</td>
            <td>03/07/2014</td>
            <td>CS121</td>
        </tr>
        <tr class="danger">
            <td>5</td>
            <td>MC</td>
            <td>06/07/2014</td>
            <td>ECS423</td>
        </tr>
    </tbody>
</table>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-success">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-panel2" href="#collapseThreePanel2">
                                  Assignment
                                </a>
                              </h4>
                              </div>
                              <div id="collapseThreePanel2" class="panel-collapse collapse" style="height: 0px;">
                              <div class="panel-body">
                                Aliquam facilisis, orci in vulputate posuere, sapien dolor dapibus orci, vitae venenatis dui elit vitae lorem. Sed porta fermentum felis in molestie. Sed porta fermentum felis in molestie. Sed porta fermentum felis in molestie. 
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-success">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-panel2" href="#collapsefourPanel2">
                                  Upcoming Event
                                </a>
                              </h4>
                              </div>
                              <div id="collapsefourPanel2" class="panel-collapse collapse" style="height: 0px;">
                              <div class="panel-body">
                              <table class="table">
     <thead>
        <tr>
            <th>Row</th>
            <th>Event Name</th>
            <th>Event Date</th>
            <th>Payment Status</th>
        </tr>
    </thead>
    <tbody>
        <tr class="active">
            <td>1</td>
            <td>Technothon</td>
            <td>04/07/2014</td>
            <td>Confirm</td>
        </tr>
        <tr class="success">
            <td>2</td>
            <td>Robot war</td>
            <td>01/07/2014</td>
            <td>Paid</td>
        </tr>
        <tr class="info">
            <td>3</td>
            <td>Msp Partner</td>
            <td>05/07/2014</td>
            <td>Confirmed</td>
        </tr>
        </tbody>
        </table>

                              </div>
                            </div>
                          </div>

                          <div class="panel panel-success">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-panel2" href="#collapsefivePanel2">
                                  My Book Issue Status
                                </a>
                              </h4>
                              </div>
                              <div id="collapsefivePanel2" class="panel-collapse collapse" style="height: 0px;">
                              <div class="panel-body">
                                <table class="table">
     <thead>
        <tr>
            <th>Row</th>
            <th>Book Name</th>
            <th>Issue Date</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <tr class="active">
            <td>1</td>
            <td>Operating system(13234)</td>
            <td>04/07/2014</td>
            <td>active</td>
        </tr>
         <tr class="info">
            <td>2</td>
            <td>Data structure(3434534)</td>
            <td>05/07/2014</td>
            <td>Returned</td>
        </tr>
        </tbody>
        </table>
                              </div>
                            </div>
                          </div>

               <!-- from here you can add the collapsable column-->
                          </div>
                        </div>           
                      </div>


</div></div>
            </section>







<!-- select karne ka place jaha pe usee select karne ka option diaaa jaega..-->

    </div>
    	</div>
    		</header>
   				 </div>
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Get in touch with us</h5>
					<address>
					<strong>ERP DEVELOPMENT CENTER</strong><br>
					 Niraj Sazzie, Sector 63 <br>
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