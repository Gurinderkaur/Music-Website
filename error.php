<?php
if(isset($_POST["submit"]))
{
	require_once("vars.php");
	$username=$_POST["username"];
	$conn=mysqli_connect(host,username,pass,dbname)or die("Error in connection".mysqli_connect_error(1));
     $q="Select * from signup where username='$username'";
	$res=mysqli_query($conn,$q)or die("error in query".mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
}
?>




<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>My Albums a Entertainment Category  Flat Bootstarp Resposive Website Template | Contact :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Albums Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/simpleCart.min.js"> </script>	
<!--web-fonts-->
 <link href='http://fonts.googleapis.com/css?family=Jockey+One|Open+Sans:300italic,400italic,600italic,400,600,700' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
</head>
<body>
	<?php
	  include_once("header.php");
	  ?>
		  <!--banner-slider-->
		     <div class="banner two">
			</div>	
		</div>	
	<!--start-albums-->
	 <div class="clearfix"></div>
     <!--contact-->
        <div class="contact">
          <form name="form1" method="post" action="">
            <table width="975" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td align="center"><strong><font color="#553A99">
                <marquee scrollamount="20"><h1 align="center"><font color='#FF0000'>Please login to access the page....!!!</font></h1></marquee>
                <p align="center">&nbsp;</p>
                <p align="center">&nbsp;</p>
                <p align="center">&nbsp;</p>
                <p align="center">&nbsp;</p>
                <p align="center">
                <marquee direction="left" scrollamount="18"><img src='uploads/error1.jpg' height='200'>
                <img src='uploads/error12.jpg' height='200'>
                </marquee> 
                 </p>
                
                </font></strong></h1>
<p>&nbsp;</p>
<p><marquee>
  &nbsp;</p></td>
  </tr>
  </table>
  </form>
  </div>
<!--footer-->	</p>
    <div class="footer">
	  <div class="container">
			<div class="footer-top">
			  <div class="col-md-4 amet-sed">
				<h4>Follow Us</h4>
				 <ul class="social">
		                    <li><a  href="#" ><i class="fb"> </i> </a></li>
		                    <li><a  href="#" ><i  class="rss"></i></a></li>
		                    <li><a  href="#" ><i class="twitter"></i></a></li>
		                    <li><a href="#"><i class="dribble"></i></a></li>
		                    <div class="clearfix"></div>
                </ul>
						<ul class="social-in">
							<li><i class="glyphicon glyphicon-home two"> </i>sector 21 , main road </li>
							<li><i class="glyphicon glyphicon-earphone"> </i> +71999-56985</li>
							<li><a href="mailto:contact@example.com"><i class="glyphicon glyphicon-envelope"> </i> contact@example.com</a></li>
							<div class="clearfix"> </div>
						</ul>
			  </div>
				<div class="col-md-4 amet-sed ">
				   <h4>Twitter Feed</h4>
				   <p><a href="#">@ Music</a> Lorem ipsum is simply dummy is simply dummy text, text hid Lorem ipsum is simply dummy text.</p>
				   <p><a href="#">@ Music</a> Lorem ipsum is simply dummy is simply dummy text, text hid Lorem ipsum is simply dummy text.</p>						
				</div>
				 <div class="col-md-4 amet-sed amet-in">
						<h4>Photo Stream</h4>
						<ul>
							<li><a href="#"><img src="images/f.jpg" alt="" class="img-responsive"></a></li>
							<li><a href="#"><img src="images/f2.jpg" alt="" class="img-responsive"></a></li>
							<li><a href="#"><img src="images/f3.jpg" alt="" class="img-responsive"></a></li>
							<li><a href="#"><img src="images/f4.jpg" alt="" class="img-responsive"></a></li>
							<li><a href="#"><img src="images/f2.jpg" alt="" class="img-responsive"></a></li>
							<li><a href="#"><img src="images/f3.jpg" alt="" class="img-responsive"></a></li>
							<div class="clearfix"> </div>
						</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			 <div class="copy">
						<p>&copy; 2015 My_Albums. All Rights Reserved</p>
        </div>
	  </div>
</div>
	<!--start-smoth-scrolling-->
<script type="text/javascript">
								jQuery(document).ready(function($) {
									$(".scroll").click(function(event){		
										event.preventDefault();
										$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
									});
								});
								</script>
							<!--start-smoth-scrolling-->
<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>