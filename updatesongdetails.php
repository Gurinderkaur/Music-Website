<?php
    session_start();
//if(!isset($_SESSION["n"]))
//{
//	header("location:error.php");
//}

	
    require_once("vars.php");  
	 $conn=mysqli_connect(host,username,pass,dbname)or die("Error in connection".mysqli_connect_error());
	$sid=$_GET["scidd"];
	$q="select * from addsong where songid ='$sid'";
	$res=mysqli_query($conn,$q)or die("error in query".mysqli_error($conn));
	$y=mysqli_fetch_array($res);
	mysqli_close($conn);
 
	
	if(isset($_POST["submit"]))
	
	{
	$cid=$_POST["cat"];
	$sname=$_POST["subcat"];
	$artist=$_POST["artist"];
	$songname=$_POST["songname"];
	$description=$_POST["description"];
	
    $err=$_FILES["songpic"]["error"];
     if($err==0)
   {
	$date=date_create();
    $tstamp=date_timestamp_get($date);
    $spic=$tstamp.$_FILES["songpic"]["name"];
    $tname=$_FILES["songpic"]["tmp_name"];
    move_uploaded_file($tname,"uploads/$spic");
   }
   else
   {
	$spic=$y[6];  
   }
    
    $q="update addsong set categoryid='$cid',subcategoryid='$sname', artistid='$artist',songname='$songname',description='$description',songpic='$spic' where songid='$sid'";
	$conn=mysqli_connect(host,username,pass,dbname)or die("Error in connection".mysqli_connect_error());
    mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==1)
	{
		header("location:updatesong.php");
		
	}
	else
	{
		$msg="Problem while updating category, please try again";
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
	          <form action="" method="post" enctype="multipart/form-data" name="form1">
			  <table width="720" border="0" align="center" cellpadding="0" cellspacing="5">
			    <tr>
			      <td colspan="2" align="center"><h1><strong><font color="#553A99">UPDATE SONG</font></strong></h1></td>
		        </tr>
			    <tr>
			      <td align="center">&nbsp;</td>
			      <td>&nbsp;</td>
		        </tr>
			    <tr>
			      <td align="left">&nbsp;</td>
			      <td>&nbsp;</td>
		        </tr>
			    <tr>
			      <td width="388" align="left"><b>Choose Category</b></td>
			      <td width="317"> <label>
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
			if($x[0]==$y[2])
			{
			print "<option value='$x[0]' selected='selected'>$x[1]</option>";
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
			    <tr>
			      <td align="left"><b>Choose Movie/Album/Single Track</b></td>
			      <td><label>
			        <select name="subcat" id="subcat">
                    <option>Select</option>
                    <?php
                      require_once("vars.php");
	 $conn=mysqli_connect(host,username,pass,dbname)or die("Error in connection".mysqli_connect_error());
	 $q="Select * from subcategory";
    $res = mysqli_query($conn,$q)or die("error in query".mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==0)
    {
	print"<option>No Categories</option>";
	}
	else
	{
	   
			
		while($z=mysqli_fetch_array($res))
		{
			if($z[0]==$y[3])
			{
			print "<option value='$z[0]' selected='selected'>$z[2]</option>";
			}
			else
			{
				print "<option value='$z[0]'>$z[2]</option>";
			}
		}
	}
	?>				  
    
		            </select>
			      </label></td>
		        </tr>
			    <tr>
			      <td align="left">&nbsp;</td>
			      <td>&nbsp;</td>
		        </tr>
			    <tr>
			      <td align="left"><b>Choose Artist</b></td>
			      <td><label>
			        <select name="artist" id="artist">
                    <option>Select</option>
                     <?php
     require_once("vars.php");
	 $conn=mysqli_connect(host,username,pass,dbname)or die("Error in connection".mysqli_connect_error());
	 $q="select * from artistable";
    $res = mysqli_query($conn,$q)or die("error in query".mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==0)
    {
	print"<option>No Artist found</option>";
	}
	else
	   {
		while($p=mysqli_fetch_array($res))
		{
			if($p[0]==$y[0])
			{
			print "<option value='$p[0]' selected='selected'>$p[1]</option>";
			}
			else
			{
				print "<option value='$p[0]'>$p[1]</option>";
			}
		}
	   }
       
	

?>	
                   
		            </select>
		           
		          </label></td>
		        </tr>
			    <tr>
			      <td align="left">&nbsp;</td>
			      <td>&nbsp;</td>
		        </tr>
			    <tr>
			      <td align="left"><b>Song Name</b></td>
			      <td><label>
			        <input type="text" name="songname" id="songname" value="<?php print $y[4];?>">
		          </label></td>
		        </tr>
			    <tr>
			      <td align="left">&nbsp;</td>
			      <td>&nbsp;</td>
		        </tr>
			    <tr>
			      <td align="left"><b>Description</b></td>
			      <td><label>
			        <textarea name="description" id="description"><?php print $y[5];?></textarea>
		          </label></td>
		        </tr>
			    <tr>
			      <td align="left">&nbsp;</td>
			      <td>&nbsp;</td>
		        </tr>
			    <tr>
			      <td align="left"><b>Song Picture</b></td>
			      <td><label><br>
                    <?php
					print"<img src='uploads/$y[6]' height ='75'>";
					?>
			        </br>
                    <br><b>
			        Choose new image if required</b></br>
<input type="file" name="songpic" id="songpic">
		        </label></td>
		        </tr>
			    <tr>
			      <td align="center">&nbsp;</td>
			      <td>&nbsp;</td>
		        </tr>
			    <tr>
			      <td align="center">&nbsp;</td>
			      <td><input type="submit" name="submit" id="submit" value="Update song"></td>
		        </tr>
			    <tr>
			      <td>&nbsp;</td>
			      <td><?php
                  if(isset($msg))
				  print $msg;
				   ?>
				  &nbsp;</td>
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