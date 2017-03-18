<?php
 session_start();
  require_once("vars.php");
	
if(!isset($_SESSION["n"]))
{
  header("location:error.php");	
}
 
	if(isset($_POST["submit"]))
{
    require_once("vars.php");
    $aname=$_POST["artistname"];
    $err=$_FILES["userfile"]["error"];
     if($err==0)
   {
	$date=date_create();
    $tstamp=date_timestamp_get($date);
    $upic=$tstamp.$_FILES["userfile"]["name"];
    $tname=$_FILES["userfile"]["tmp_name"];
    move_uploaded_file($tname,"uploads/$upic");
   }
   else
   {
	$upic="no_image.jpg";   
   }
    $conn=mysqli_connect(host,username,pass,dbname)or die("Error in connection".mysqli_connect_error());
	$q="insert into artistable(artistname ,artistpic)values('$aname','$upic')";
     mysqli_query($conn,$q)or die("error in query".mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==1)
    {
	$msg="Artist added successfully"; 
	}
	else
	{
	$msg="Problem while adding artist,please try again";
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
	<!--start-header-->
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
			<h3 class="tittle">ADD ARTIST</h3>
			<form action="" method="post" enctype="multipart/form-data" name="form1">
			  <table width="975" border="0" cellspacing="5" cellpadding="0">
			    <tr>
			      <td width="317">Artist  Name</td>
			      <td width="643"><label>
			        <input type="text" name="artistname" id="artistname">
		          </label></td>
		        </tr>
			    <tr>
			      <td>&nbsp;</td>
			      <td>&nbsp;</td>
		        </tr>
			    <tr>
			      <td>Artist  Picture</td>
			      <td><label>
			        <input type="file" name="userfile" id="userfile">
		          </label></td>
		        </tr>
			    <tr>
			      <td>&nbsp;</td>
			      <td>&nbsp;</td>
		        </tr>
			    <tr>
			      <td>&nbsp;</td>
			      <td><input type="submit" name="submit" id="submit" value="Add Artist"></td>
		        </tr>
			    <tr>
			      <td>&nbsp;</td>
			      <td>
				  <?php
                  if(isset($msg))
				  print $msg;
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
     <?php include_once("footer.php"); ?>
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