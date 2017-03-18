<?php
require_once("vars.php");

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
	          <form action="" method="post" enctype="multipart/form-data" name="form1">
			  <table width="795" border="0" align="center" cellpadding="0" cellspacing="5">
			    <tr>
			      <td colspan="2" align="center"><h1><font color="#553A99"><b>UPDATE/DELETE SONG</b></font></h1></td>
		        </tr>
			    <tr>
			      <td align="center">&nbsp;</td>
			      <td>&nbsp;</td>
		        </tr>
			    <tr align="left">
			      <td width="466" align="left"><b>Choose Category</b></td>
			      <td width="314"> <label>
			        <select name="cat" id="cat">
                    <option>Select</option>
                      <?php
     require_once("vars.php");
	 $conn=mysqli_connect(host,username,pass,dbname)or die("Error in connection".mysqli_connect_error());
	 $q="Select * from category";
    $res = mysqli_query($conn,$q)or die("error in query".mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==0)
    {
	print"<option>No Categories</option>";
	}
	else
	{
	while($x=mysqli_fetch_array($res))
	{    
			if(isset($_POST["viewsubcat"]))
			{
				$cid=$_POST["cat"];
				if($x[0]==$cid)
				{
			      print "<option value='$x[0]' selected='selected'>$x[1]</option>";	
				}
				else
				{
			print "<option value='$x[0]'>$x[1]</option>";						
				}
			}
			else
			{
				print "<option value='$x[0]'>$x[1]</option>";	
			}
		}
	}
	
		
		


?>	
					
					
		            </select>
		            <input type="submit" name="viewsubcat" id="viewsubcat" value="Go">
			      </label></td>
		        </tr>
			    <tr>
			      <td align="left">&nbsp;</td>
			      <td>&nbsp;</td>
		        </tr>
			    <tr align="left">
			      <td align="left"><b>Choose Movie/Album/Single Track</b></td>
			      <td><label>
			        <select name="subcat" id="subcat">
                    <option>Select</option>
                    <?php
	if(isset($_POST["viewsubcat"]))
	{
     require_once("vars.php");
	 $a=$_POST["cat"];
	 $conn=mysqli_connect(host,username,pass,dbname)or die("Error in connection".mysqli_connect_error());
	 $q="Select * from subcategory where Categoryid='$a'";
    $res = mysqli_query($conn,$q)or die("error in query".mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==0)
    {
	print"<option>No Subcategories</option>";
	}
	else
	{
	while($x=mysqli_fetch_array($res))
	{    
			if(isset($_POST["viewsubcat2"]))
			{
				$scid=$_POST["subcat"];
				if($x[0]==$scid)
				{
			      print "<option value='$x[0]' selected='selected'>$x[2]</option>";	
				}
				else
				{
			print "<option value='$x[0]'>$x[2]</option>";						
				}
			}
			else
			{
				print "<option value='$x[0]'>$x[2]</option>";	
			}
		}
	}
	
		
		

	}
?>	
                    
		            </select>
		            <input type="submit" name="viewsubcat2" id="viewsubcat2" value="Go">
                   
                    
                    
			      </label></td>
		        </tr>
			    <tr>
			      <td align="center">&nbsp;</td>
			      <td><?php
                  if(isset($msg))
				  print $msg;
				   ?></td>
		        </tr>
			    <tr>
			      <td colspan="2" align="left">&nbsp;</td>
		        </tr>
			    <tr>
			      <td colspan="2" align="left">
                  <?php
				  if(isset($_POST["viewsubcat2"]))
				  {
				    $scid=$_POST["subcat"];
					  	  require_once("vars.php");
	  $conn=mysqli_connect(host,username,pass,dbname)or die("Error in connection".mysqli_connect_error(1));
      $q="Select artistname,songname,description,songpic,songid from addsong,artistable where subcategoryid='$scid'and addsong.artistid=artistable.artistid";
	  $res=mysqli_query($conn,$q)or die("error in query".mysqli_error($conn));
	  $cnt=mysqli_affected_rows($conn);
	  mysqli_close($conn);
	
      if($cnt==0)
     {
	  print"No  Song found";
	  }
	 else
	  {
	      print"<table align='center'  width='900' cellspacing='0'>
	      <tr align='center' bgcolor ='#553A99' height='35'>
		  <th><font color='#ffffff'>Song Picture</th>
		  <th><font color='#ffffff'>Song Artist</th>
		  <th><font color='#ffffff'>Song Name</th>
		  <th><font color='#ffffff'>Song Description</th>
		   <th><font color='#ffffff'>Update</th>
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
		             print "
					<td><img src='uploads/$x[3]' height='80' width='100'></td>
					<td><b>$x[0]</td>
					<td><b>$x[1]</td>
					<td><b>$x[2]</td>
					<td><a href='updatesongdetails.php?scidd=$x[4]'><b>Update</a></td>
					<td><a href='delsong.php?scidd=$x[4]'><b>Delete</a></td>
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