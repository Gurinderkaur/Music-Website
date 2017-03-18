<?php

session_start();
require_once("vars.php");
   if(isset($_POST["submit"]))
   {
	$name=$_POST["name"];;
	$email=$_POST["email"];
    $message=$_POST["message"];
	 $ques1=$_POST["ques1"];
	  $ques2=$_POST["ques2"];
	  $ques3=$_POST["ques3"];
	  $ques4=$_POST["ques4"];
	date_default_timezone_set('Asia/Kolkata');
	$ft=date('Y-m-d  H:i:s');
	$conn=mysqli_connect(host,username,pass,dbname)or die("Error in connection".mysqli_connect_error(1));
	$q="insert into feedback(name,email,ques1,ques2,ques3,ques4,message,feedbackdate) values('$name','$email','$ques1','$ques2','$ques3','$ques4','$message','$ft')";
	mysqli_query($conn,$q)or die("error in query".mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==1)
	{
		$msg="Thanks for utilizing your precious time  to give us feedback,Have a good day";	
	}
	else
	{
		$msg="You failed to provide us feedbacke please try again"; 
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
<script type="text/javascript">
function xyz()
{
	if(document.form1.name.value.length<4)
	{
		alert("please fill your name");
		return false;
	}
	if(document.form1.username.value.length<1 || document.form1.username.value.indexOf("@")<3 || document.form1.username.value.indexOf(".")<4)
	{
		alert("please fill proper email id");
		return false;
	}
	
	   
	if (!isset($_POST[$ques1]) || empty($_POST['message'])) {
    $error_msg = " ";  
    $fieldStatusMessage = 'style="border:1px solid #F00"';
      }
    else {
    $fieldStatusEmail = '';
         }
      
	if(document.form1.message.value.length<3)
	{
		alert("please fill your message");
		return false;
	}
	
}

 



</script>

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
			<h3 class="tittle">FEEDBACK</h3>
			     <div class="lcontact span_1_of_contact">
				      <div class="contact-form">
				  	        <form method="post" name="form1" onSubmit="return xyz()">
					    	    <p class="comment-form-author"><label for="author">Your Name:</label>
					    	    	<input type="text" class="textbox" name="name" value="Enter your name here..." name="name"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your name here...';}">
						    	</p>
						        <p class="comment-form-author"><label for="author">Email Id:</label>
						     	   <input type="text" class="textbox" name="email" value="Enter your email here..." name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                              
                           <p class="comment-form-author"><label for="author">How you rate our website ?<br>
                           </label>
                           </p>
                           <p>
                             <label>
                               <input type="radio" name="ques1" value="Excellent" id="ques1_0"><font color ="black">
                               Excellent</font></label>
                             <br>
                             <label>
                               <input type="radio" name="ques1" value="Very Good" id="ques1_1"><font color ="black">
                             Very Good</font></label>
                             <br>
                             <label>
                               <input type="radio" name="ques1" value="Good" id="ques1_2"><font color ="black">
                               Good</font></label>
                             <br>
                             <label>
                               <input type="radio" name="ques1" value="Average" id="ques1_3"><font color ="black">
                               Average</font></label>
                              
                             <br>
                           </p>
                           <p class="comment-form-author"><label for="author">Do you need more songs ?<br>
                           </label>
                           </p>
                           <p>
                             <label>
                               <input type="radio" name="ques2" value="Yes" id="ques2_0"><font color ="black">
                             Yes</font></label>
                                 <br>
                                 <label>
                                   <input type="radio" name="ques2" value="No" id="ques2_1"><font color ="black">
                             No</font></label>
                                 <br>
                               </p>
                           <p class="comment-form-author"><label for="author">How you rate our services ?<br>
                           </label>
                           </p>
                           <p>
                                 <label>
                                   <input type="radio" name="ques3" value="Excellent" id="ques3_0"><font color ="black">
                             Excellent</font></label>
                                 <br>
                                 <label>
                                   <input type="radio" name="ques3" value="Very Good" id="ques3_1"><font color ="black">
                             Very Good</font></label>
                                 <br>
                                 <label>
                                   <input type="radio" name="ques3" value="Average" id="ques3_2"><font color ="black">
                             Average</font></label>
                                 <br>
                              </p>
                           <p class="comment-form-author"><label for="author">Is our website User friendly ?<br>
                           </label>
                           </p>
                           <p>
                                
                             <label>
                                   <input type="radio" name="ques4" value="Excellent" id="ques4_0"><font color ="black">
                                   Excellent</font></label>
                                 <br>
                                 <label>
                                   <input type="radio" name="ques4" value="Very Good" id="ques4_1"><font color ="black">
                                   Very Good</font></label>
                                 <br>
                                 <label>
                                   <input type="radio" name="ques4" value="Average" id="ques4_2"><font color ="black">
                                   Average</font></label>
                           </p>
                           <p>&nbsp; </p>
                           <p class="comment-form-author"><label for="author">Message:</label>
						    	  <textarea value="Enter your message here..." name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Enter your message here...</textarea>
						        </p>
                               <p class="comment-form-author">
                                 <?php
								if(isset($msg))
								{
							     	print $msg;	
								}
								?>
                               </p>
						       
						        
					          <p class="comment-form-author">
					            <input name="submit" type="submit" id="submit" value="Submit">
                              </p>
				  	        </form>
				       </div>
			     </div>
		        <div class="clearfix"></div>
				<div class="map">
		    	   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387144.007583421!2d-73.97800349999999!3d40.7056308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1413440825630" frameborder="0" style="border:0"></iframe>
		        </div>
		    </div>
	   </div>
	 <!--footer-->
	 <?php
	include_once("footer.php");
	?><!--start-smoth-scrolling-->
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