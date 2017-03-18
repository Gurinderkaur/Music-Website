<?php
session_start();

?>
?><!--
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
		     <div class="banner two">
			</div>	
		</div>	
	<!--start-albums-->
	 <div class="clearfix"></div>
     <!--contact-->
        <div class="contact">
	        <div class="container">
	          <form name="form1" method="post" action="">  
			  <table width="797" border="0" align="left" cellpadding="0" cellspacing="5">
			    <tr>
			     <td colspan="2" align="center"><h2><strong><font color="#553A99">UPDATE&amp;DELETE MOVIE/ALBUM/SINGLE TRACK</font></strong></h2></td>
		        </tr>
			    <tr>
			      <td>&nbsp;</td>
			      <td>&nbsp;</td>
		        </tr>
			    <tr>
			      <td>&nbsp;</td>
			      <td>&nbsp;</td>
		        </tr>
			    <tr>
			      <td align="center">&nbsp;</td>
			      <td align="center">&nbsp;</td>
		        </tr>
			    <tr>
			      <td width="391" align="center"><b>CHOOSE CATEGORY</b></td>
			      <td width="391" align="center"><label>
			        <select name="co" id="co">
                    <option>select</option>
                     <?php
			require_once("vars.php");
			$conn=mysqli_connect(host,username,pass,dbname)or die("Error in connection".mysqli_connect_error(1));
	
	$q="select * from category";
	$res=mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==0)
	{
		print "<option>No categories</option>";
	}
	else
	{
		while($x=mysqli_fetch_array($res))
		{
			print "<option value='$x[0]'>$x[1]</option>";
		}
	}
			
			?>
		            </select>
		            <input type="submit" name="save" id="save" value="Go">
			      </label></td>
		        </tr>
			    <tr>
			      <td>&nbsp;</td>
			      <td>&nbsp;</td>
		        </tr>
			    <tr>
			      <td>&nbsp;</td>
			      <td>&nbsp;</td>
		        </tr>
		      </table>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <table width="975" border="0" align="left" cellpadding="0" cellspacing="0">
			    <tr>
			      <td><?php
				  if(isset($_POST["save"]))
				  {
				    $cid=$_POST["co"];
					  	  require_once("vars.php");
	  $conn=mysqli_connect(host,username,pass,dbname)or die("Error in connection".mysqli_connect_error(1));
      $q="Select * from subcategory where categoryid='$cid'";
	  $res=mysqli_query($conn,$q)or die("error in query".mysqli_error($conn));
	  $cnt=mysqli_affected_rows($conn);
	  mysqli_close($conn);
	
      if($cnt==0)
     {
	  print"No Movie/Album/Single Track found";
	  }
	 else
	 
	  {
		   
				  
	      print"<table align='center' width='900' cellspacing='0'>
	      <tr align='center' bgcolor='#553A99'>
		  <th><font color='#ffffff'><b>Subcategory Picture</b></font></th>
		  <th><font color='#ffffff'><b>Subcategory Name</b></font></th>
		 <th><font color='#ffffff'>Update</font></th>
	      <th><font color='#ffffff'>Delete</font></th>
		  </tr>";
		    $count=1;
		  while($x=mysqli_fetch_array($res))
		  {
			  if($count%2==0)
			  {
				  print"<tr bgcolor='#9999FF'>";
			  }
			  else
			  {
				  print"<tr bgcolor='#FFFFFF'>";
			  }
			  $count++;
		             print "
					<td><img src='uploads/$x[3]' height='75' width='85'></td>
					<td><b>$x[2]</b></td>
					<td><a href='updatesubcatdetails.php?sscid=$x[0]'><b>Update</b></a></td>
					<td><a href='delsubcat.php?sscid=$x[0]'><b>Delete</b></a></td>
					</tr>";
		   }
		 print"</table>";
		
	      }}
          ?>
          </td>
		        </tr>
		      </table>
			</form>
			<p>&nbsp;</p>
			<div class="clearfix"></div>
	        </div>
	   </div>
	 <!--footer-->
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