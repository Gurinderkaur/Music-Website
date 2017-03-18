<?php

session_start();
require_once("vars.php");
   if(isset($_POST["submit"]))
   {
	$name=$_POST["name"];;
	$email=$_POST["email"];
    $phone=$_POST["phone"];
    $message=$_POST["message"];
	date_default_timezone_set('Asia/Kolkata');
	$dt=date('Y-m-d  H:i:s');
	$conn=mysqli_connect(host,username,pass,dbname)or die("Error in connection".mysqli_connect_error(1));
	$q="insert into contactus(name,email,phone,message,msgdate) values('$name','$email','$phone','$message','$dt')";
	mysqli_query($conn,$q)or die("error in query".mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==1)
	{
		$msg="Your message is received,we will contact you soon..!!";	
	}
	else
	{
		$msg="You failed to contact us,please try again"; 
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
			<h3 class="tittle">Contact</h3>
			     <p class="tittle">&nbsp;</p>
			     <table width="975" border="0" cellspacing="0" cellpadding="0">
			       <tr>
			         <td><span class="tittle"><span class="comment-form-author">
			           <?php
								if(isset($msg))
								{
							     	print $msg;	
								}
								?>
			         </span></td>
		           </tr>
	          </table>
			     <p class="tittle">&nbsp; </p>
			     <div class="lcontact span_1_of_contact">
				      <div class="contact-form">
				  	        <form method="post">
					    	    <p class="comment-form-author"><label for="author">Your Name:</label>
					    	    	<input type="text" class="textbox" name="name" value="Enter your name here..." name="name"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your name here...';}">
						    	</p>
						        <p class="comment-form-author"><label for="author">Email Id:</label>
						     	   <input type="text" class="textbox" name="email" value="Enter your email here..." name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                              <p class="comment-form-author"><label for="author">Phone:</label>
						     	   <input type="text" class="textbox" name="phone"  value="Enter your phone  here..."onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
					          </p>
						        <p class="comment-form-author"><label for="author">Message:
						          
						            
						            </label>
						    	  <textarea value="Enter your message here..." name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Enter your message here...</textarea>
						        </p>
						        <p class="comment-form-author">&nbsp; </p>
						        <input name="submit" type="submit" id="submit" value="Submit">
					        </form>
				       </div>
			     </div>
		        <div class="clearfix"></div>
				<div class="map"></div>
		    </div>
	   </div>
	 <!--footer-->
<?php
include_once("footer.php");
?>
</body>
</html>