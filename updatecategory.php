<?php
session_start();
//if(!isset($_SESSION["n"]))
//{
//	header("location:error.php");
//}
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
		     <div class="banner two">
			</div>	
		</div>	
	<!--start-albums-->
	 <div class="clearfix"></div>
     <!--contact-->
        <div class="contact">
	        <div class="container">
			<table width="975" border="0" align="center" cellpadding="0" cellspacing="0">
			  <tr>
			    <td align="center"><h1><strong><font color="#553A99">UPDATE/DELETE CATEGORY</font></strong></h1></td>
		      </tr>
			  </table>
			<p>&nbsp;</p>
			<form name="form1" method="post" action="">
			<p>&nbsp;</p>
			<table align='center' width="975" border="1" cellspacing="0" cellpadding="0">
			   
		        <td><?php
	require_once("vars.php");
	$conn=mysqli_connect(host,username,pass,dbname)or die("Error in connection".mysqli_connect_error(1));
     $q="Select * from category";
	$res=mysqli_query($conn,$q)or die("error in query".mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	
     if($cnt==0)
     {
	  print"No  record found";
	  }
	 else
	  {
		      print"<table width='970' cellspacing='0'>
				<tr align='center' bgcolor ='#553A99'>
                <th><font color='#ffffff'><b>Category picture</th> 
                 <th><font color='#ffffff'><b>Category Name</th> 
                 <th><font color='#ffffff'><b>Update</th> 
                 <th><font color='#ffffff'>Delete</th> 
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
		        print"
				<td><img src='uploads/$x[2]' height='75' width='*'></td>
				<td>$x[1]</td>
				<td><a href='updatecatdetails.php?cid=$x[0]'>Update</a></td>
			      <td><a href='delcat.php?cid=$x[0]'>Delete</a></td>
				</tr>";
		   }
		 print"</table>";
		
	      }
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
      <?php
	include_once("footer.php");
	?>
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