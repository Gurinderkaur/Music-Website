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
	        <div class="container">
	          <h3 class="tittle">Song Search </h3>
			<form name="form1" method="post" action="">
			  <table width="975" border="0" cellspacing="5" cellpadding="0">
			    <tr>
			      <td width="165"><p>Enter Song Name</p></td>
			      <td width="810"><label for="search"></label>
			        <label for="artist"></label>
		          <input type="text" name="artist" id="artist"></td>
		        </tr>
			    <tr>
			      <td>&nbsp;</td>
			      <td>&nbsp;</td>
		        </tr>
			    <tr>
			      <td>&nbsp;</td>
			      <td><input type="submit" name="submit" id="submit" value="Search"></td>
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
			      <td>&nbsp;</td>
			      <td><?php
		  if(isset($_POST["submit"]))
		  {
			$sname=$_POST["artist"];
		  
		require_once("vars.php");
			$conn=mysqli_connect(host,username,pass,dbname) or die("Error in connection" . mysqli_connect_error());
			$q="select * from addsong where  songname like '%$sname%'";
	$res=mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
			$cnt=mysqli_affected_rows($conn);
			mysqli_close($conn);
			if($cnt==0)
			{
				print "No records found";
			}
			else
			{
				print "<table width='500' cellspacing='0'>";
				$count=1;
				while($x=mysqli_fetch_array($res))
				{
					if($count==1)
		            
					print"<td>
					<a href='showsongdetail1.php?siid=$x[1]'><img src='uploads/$x[6]' height='125' border='0'></a><br/>
					<a href='showsongdetail1.php?siid=$x[1]'>$x[4]</a><br/>
				    </td>";
					$count++;
					if($count==5)
					{
						print "</tr>";
						$count=1;
					}
				}
				print "</table>";
			}
		  }
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