<?php
if(isset($_POST["submit"]))

	{	
			$s=$_POST["artist"];
			$sh=implode(",",$s);
		
	
	  session_start();
    require_once("vars.php");
	$cid=$_POST["cat"];
	$scid=$_POST["subcat"];
	$artist=$_POST["artist"];
    $sname=$_POST["songname"];
	$des=$_POST["description"];
    $song=$_FILES["song"]["name"];
	$err=$_FILES["song"]["error"];
	if($err==0)
   {
	$date=date_create();
    $tstamp=date_timestamp_get($date);
    $tpic=$tstamp.$_FILES["song"]["name"];
    $tname=$_FILES["song"]["tmp_name"];
    move_uploaded_file($tname,"uploads/$tpic");
   }
   
   $songpic=$_FILES["songpic"]["name"];
    $err=$_FILES["songpic"]["error"];
	
     if($err==0)
   {
	$date=date_create();
    $tstamp=date_timestamp_get($date);
    $upic=$tstamp.$_FILES["songpic"]["name"];
    $tname=$_FILES["songpic"]["tmp_name"];
    move_uploaded_file($tname,"uploads/$upic");
   }
   else
   {
	$upic="no_image.jpg";   
   }
    $conn=mysqli_connect(host,username,pass,dbname)or die("Error in connection".mysqli_connect_error());
$q="insert into addsong(artistid,categoryid,subcategoryid,songname,description,songpic,song)values('$sh','$cid','$scid','$sname','$des','$upic','$song')";
     mysqli_query($conn,$q)or die("error in query".mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==1)
    {
	$msg=" Song added successfully"; 
	}
	else
	{
	$msg="Problem while adding song,please try again";
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
	            <table width="1179" border="0" align="center" cellpadding="0" cellspacing="5">
	            <tr align="center">
	              <td width="1319" colspan="2"><table width="915" border="0" align="center" cellpadding="0" cellspacing="5">
	                <tr>
	                  <td align="center"><font color="#330099" size="7"><h1><b>ADD SONG</b></h1></font></td>
	                  <td>&nbsp;</td>
                    </tr>
	                <tr>
	                  <td align="left">&nbsp;</td>
	                  <td>&nbsp;</td>
                    </tr>
	                <tr>
	                  <td align="left">&nbsp;</td>
	                  <td>&nbsp;</td>
                    </tr>
	                <tr>
	                  <td align="left">&nbsp;</td>
	                  <td>&nbsp;</td>
                    </tr>
	                <tr>
	                  <td width="525" align="left">Choose Category</td>
	                  <td width="375"><label>
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
	                <tr>
	                  <td align="left">Choose Movie/Album/Single Track</td>
	                  <td><label>
	                    <select name="subcat" id="subcat">
	                      <option>Select</option>
	                      <?php
	
if(isset($_POST["viewsubcat"]))
{    
            $cid=$_POST["cat"];
			require_once("vars.php");
			
			$conn=mysqli_connect(host,username,pass,dbname) or die("Error in connection" . mysqli_connect_error());
	
	$q="select * from subcategory where Categoryid='$cid'";
	$res=mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==0)
	{
		print "<option>No Sub Categories</option>";
	}
	else
	{
		while($x=mysqli_fetch_array($res))
		{
				print "<option value='$x[0]'>$x[2]</option>";	
				
		}
	}}

?>
                        </select>
	                    </label></td>
                    </tr>
	                <tr>
	                  <td align="left">&nbsp;</td>
	                  <td>&nbsp;</td>
                    </tr>
	                <tr>
	                  <td align="left">Choose Artist</td>
	                  <td><label>
	                    <select name="artist[]" id="artist" multiple="multiple">
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
	while($x=mysqli_fetch_array($res))
	{
		
		
		print"<option value='$x[0]'>$x[1]</option>";
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
	                  <td height="35" align="left">Song Name</td>
	                  <td><label>
	                    <input type="text" name="songname" id="songname">
	                    </label></td>
                    </tr>
	                <tr>
	                  <td align="left">&nbsp;</td>
	                  <td>&nbsp;</td>
                    </tr>
	                <tr>
	                  <td align="left">Description</td>
	                  <td><label>
	                    <textarea name="description" id="description"></textarea>
	                    </label></td>
                    </tr>
	                <tr>
	                  <td align="left">&nbsp;</td>
	                  <td>&nbsp;</td>
                    </tr>
	                <tr>
	                  <td align="left">Song Picture</td>
	                  <td><label>
	                    <input type="file" name="songpic" id="songpic">
	                    </label></td>
                    </tr>
	                <tr>
	                  <td align="center">&nbsp;</td>
	                  <td>&nbsp;</td>
                    </tr>
	                <tr>
	                  <td align="left">Add Song</td>
	                  <td><label>
	                    <input type="file" name="song" id="song">
	                    </label></td>
                    </tr>
	                <tr>
	                  <td align="center">&nbsp;</td>
	                  <td>&nbsp;</td>
                    </tr>
	                <tr>
	                  <td align="center">&nbsp;</td>
	                  <td><input type="submit" name="submit" id="submit" value="Add song"></td>
                    </tr>
	                <tr>
	                  <td>&nbsp;</td>
	                  <td><?php
                  if(isset($msg))
				  print $msg;
				   ?>
	                    &nbsp;</td>
                    </tr>
                  </table>	                <h1><b><font color="#3300CC"></font></b></h1></td>
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