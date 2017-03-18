<?php

if(isset($_POST["submit"]))
{
	require_once("vars.php");
	$name=$_POST["name"];
	$address=$_POST["address"];
	$city=$_POST["city"];
	$state=$_POST["state"];
	$phone=$_POST["phone"];
	$username=$_POST["username"];
	$pass=$_POST["password"];
	$conn=mysqli_connect(host,username,pass,dbname)or die("Error in connection".mysqli_connect_error(1));
	$q="insert into signup values('$name','$address','$city','$state','$phone','$username','$pass','admin')";
	mysqli_query($conn,$q)or die("error in query".mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==1)
    {
	  header("location:success.php");
	}
	else
	{
		$msg="Signup unsuccessful,please try again"; 
	}
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
	include_once("header1.php");
	?>
		  <!--banner-slider-->
		     <img src="images/mmm.png" width="100%" hieght="50%"
             
             >	
		</div>
	<p><!--start-albums-->
    		</p>
	<p>&nbsp;</p>
	<table width="975" border="0" align="center" cellpadding="0" cellspacing="0">
	  <tr align="center">
	    <td><h2><font color="#330099"><b>ADD CATEGORY,MOVIE/ALBUM/SINGLE TRACK,ARTIST,SONG</font></h2></td>
      </tr>
      <tr>
      <td>&nbsp;</td>
      </tr>
       <tr>
      <td>&nbsp;</td>
      </tr>
	  <tr>
	    <td><table width="975" border="0" cellspacing="0" cellpadding="0">
	      <tr>
	        <td align="center"><a href="addcategory.php"><img src="uploads/addcategory.png" height='150'></a><br/>
            <a href="addcategory.php"><b>ADD CATEGORY</a></td>
	        <td align="center"><a href="addartist.php"><img src="uploads/ADDARTIST.png" height='150' ></a><br/>
            <a href="addartist.php"><b>ADD ARTIST</a></td> 
	        <td align="center"><a href="addsubcategory.php"><img src="uploads/movie.png" height='150'></a><br/>
            <a href="addsubcategory.php"><b>ADD MOVIE/ALBUM/SINGLE TRACK</a></td> 
	        <td align="center"><a href="addsong.php"><img src="uploads/addsong.jpg" height='150'></a><br/>
            <a href="addsong.php"><b>ADD SONG</a></td> 
          </tr>
	      </table>
       </td>
      </tr>
	  <tr>
	    <td>&nbsp;</td>
      </tr>
	  <tr>
	    <td>&nbsp;</td>
      </tr>
       <tr>
	    <td>&nbsp;</td>
      </tr>
       <tr>
	    <td align="center"><h2><font color="#330099"><b>UPDATE/DELETE CATEGORY,MOVIE/ALBUM,ARTIST,SONG</font></h2></td>
        <tr>
	    <td>&nbsp;</td>
      </tr>
      <tr>
	    <td>&nbsp;</td>
      </tr>
      </tr>
       <tr>
	    <td><table width="975" border="0" cellspacing="0" cellpadding="0">
	      <tr>
	        <td align="center"><a href="updatecategory.php"><img src="uploads/updatemovie.png" height='150'></a><br/>
            <a href="addcategory.php"><b>UPDATE CATEGORY</a></td>
	         <td align="center"><a href="updateartist.php"><img src="uploads/updateartist.ico" height='150'></a><br/>
            <a href="addcategory.php"><b>UPDATE ARTIST</a></td>
	    <td align="center"><a href="updatesubcategory.php"><img src="uploads/updatecategory.jpg" height='150'></a><br/>
            <a href="addcategory.php"><b>UPDATE MOVIE/ALBUM</a></td>
	         <td align="center"><a href="updatesong.php"><img src="uploads/update.png" height='150'></a><br/>
            <a href="addcategory.php"><b>UPDATE SONG</a></td>
          </tr>
         </table></td>
      </tr>
      <tr>
	    <td>&nbsp;</td>
      </tr>
</table>
	<p>&nbsp;</p>
    <p>&nbsp;</p>
   
<div class="clearfix"></div>
     <!--contact--><!--footer-->
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
		<table width="975" border="0" cellspacing="0" cellpadding="0">
		  <tr>
		    <td>&nbsp;</td>
	      </tr>
</table>
</body>
</html>