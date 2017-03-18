<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>My Albums a Entertainment Category  Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
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
 <link href='http://fonts.googleapis.com/css?family=Audiowide|Open+Sans:300italic,400italic,600italic,700,300,600,400' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
</head>
<body>

<?php
include_once("header3.php");
?>
	      <!--banner-slider-->
		     <div class="banner">
				<div id="top" class="callbacks_container">
					<ul class="rslides" id="slider">
						<li>
						   <img src="images/3.jpg" class="img-responsive" alt="" />
						</li>
						<li>
						   <img src="images/2.jpg" class="img-responsive" alt="" />
						</li>
						<li>
						   <img src="images/1.jpg" class="img-responsive" alt="" />
						</li>
					</ul>
	  	         </div>	
				</div>	
		       <script src="js/responsiveslides.min.js"></script>
			     <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 3
			      $("#slider").responsiveSlides({
			        auto: true,
			        pager:true,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!--//end-banner-->
		</div>	
	<!--start-albums-->
	 <div class="clearfix"></div>
  <div class="albums">
	<div class="container">
		<div class="album-info">
			<a href="login.php"><div class="col-md-3 album">
			     <div class="album-box">
				   <h4>Login</h4>
				    <h5>       </h5>
				 </div>
			</div></a>
			<a href="addcategory.php"><div class="col-md-3 album">
			   
                 <div class="album-box">
				   <h4>music</h4>
				    <h5> </h5>
				 </div>
			</div></a>
			<a href="recentsongs.php"><div class="col-md-3 album">
			     <div class="album-box">
				   <h4>songs</h4>
				    <h5></h5>
			     </div>
			</div></a>
			<a href="signup.php"><div class="col-md-3 album lost">
			     <div class="album-box">
				   <h4>signup</h4>
				    <h5>   </h5>
				 </div>
			</div></a>
			<div class="clearfix"></div>
		</div>
			<div class="music-info">
			  <div class="clearfix"></div>
			</div>
				<div class="music-info two">
				  <div class="clearfix">
				    <p>&nbsp;</p>
				    <p><a href="recentsongs.php"><span class="album-box">
				      <?php
		require_once("vars.php");
		$conn=mysqli_connect(host,username,pass,dbname) or die("Error in connection" . mysqli_connect_error());
		    
			$q="select * from artistable order by rand() limit 8";
	$res=mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
			$cnt=mysqli_affected_rows($conn);
			mysqli_close($conn);
			if($cnt==0)
			{
				$msg="No records found";
			}
			else
			{
				print "<table align='center' width='100%' cellspacing='5'>";
				$count=1;
				while($x=mysqli_fetch_array($res))
				{
					if($count==1)
					{
						print"<tr align='center' cellspacing='5'>";
					}
					print"<td>
			<a href='showsong1.php?cid=$x[0]'><img src='uploads/$x[2]' height='350' width='300' border='0'></a><br/>
					<a href='showsong1.php?cid=$x[0]'>$x[1]</a>	
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
		?>
				    </span></a></p>
				  </div>
			</div>
				<div class="music-info two">
				  <div class="clearfix"></div>
			</div>
		</div>
  </div>
  <h5>&nbsp;</h5>
  <p>&nbsp;</p>
	  <p>
	    <!--footer-->
</p>
	  <?php
      
	  include_once("footer.php");
	  ?>
      </p>
	<p><!--start-smoth-scrolling-->
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
	  <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a></p>
</body>
</html>