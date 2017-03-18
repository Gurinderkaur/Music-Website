<?php
session_start();
require_once("vars.php");
if(isset($_POST["submit"]))
{    
    $name=$_POST["name"];
	$phone=$_POST["phone"];
	$username=$_POST["username"];
	$dob=$_POST["datepicker"];
	$password=$_POST["pass"];
	$err=$_FILES["userfile"]["error"];
	if($err==0)
	{
		$date=date_create();
		$tstamp=date_timestamp_get($date);
		$tname=$_FILES["userfile"]["tmp_name"];
		$upic=$tstamp.$_FILES["userfile"]["name"];
		move_uploaded_file($tname,"uploads/$upic");
	}
	else
	{
     $upic="no_image.jpg";
	}
	$conn=mysqli_connect(host,username,pass,dbname)or die("Error in connection".mysqli_connect_error(1));
	$q="insert into signup values('$name','$phone','$username','$dob','$upic','$password','normal')";
	mysqli_query($conn,$q)or die("error in query".mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==1)
	{
		$msg="SignUp successful</h1>";
		header("location:index.php");	
	}
	else
	{
		$msg="There is some error while signing up"; 
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
 <link rel="stylesheet" href="css/pikaday.css">
  <link rel="stylesheet" href="css/site.css">
 
<!-- Custom Theme files -->

<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/simpleCart.min.js"> </script>	

<!--web-fonts-->
 <link href='http://fonts.googleapis.com/css?family=Jockey+One|Open+Sans:300italic,400italic,600italic,400,600,700' rel='stylesheet' type='text/css'>
 <script type="text/javascript">
function xyz()
{
	if(document.form1.name.value.length<4)
	{
		alert("please fill your name");
		return false;
	}
	
	if(document.form1.phone.value.length<10)
	{
		alert("Please fill proper Phone number");
		return false;
	}
	
	
	if(document.form1.username.value.length<1 || document.form1.username.value.indexOf("@")<3 || document.form1.username.value.indexOf(".")<4)
	{
		alert("please fill proper email id");
		return false;
	}
	
	
	var p1,p2;
	p1=document.form1.pass.value;
	p2=document.form1.cpass.value;
	if(p1 != p2)
	{
		alert("Passwords doesn't match");
	    return false;
	}
	
}

 
       function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
         
	    
		
	function phonenumber(inputtxt)  
     {  
         var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;  
         if(inputtxt.value.match(phoneno))  
     {  
       return true;        
     }  
     
	 else  
     {  
       alert("Not a valid Phone Number");  
       return false;  
     }  
}      
			  
			  
			  function phoneno(){          
            $('#phone').keypress(function(e) {
                var a = [];
                var k = e.which;

                for (i = 48; i < 58; i++)
                    a.push(i);

                if (!(a.indexOf(k)>=0))
                    e.preventDefault();
            });
        }



</script>


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
            <h3 class="tittle">Sign Up</h3>
            <form action="" method="post" enctype="multipart/form-data" name="form1" onSubmit="return xyz()">
              <table width="975" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="259">Name</td>
                  <td width="716"><label>
                    <input type="text" name="name" id="name">
                  </label></td>
                </tr>
                
                <tr>
                  <td>Phone Number</td>
                  <td><input type="text" name="phone" id="phone" onKeyPress="return isNumberKey(event)" type="text" maxlength="10"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>Email Id(Username)</td>
                  <td><label>
                    <input type="text" name="username" id="username">
                  </label></td>
                </tr>
                <tr></tr>
                <tr>
                  <td>Date of Birth</td>
                  <td><label>
                    <input name="datepicker" type="text" id="datepicker" readonly>
                    <script src="moment.min.js"></script>
                    <script src="pikaday.js"></script>
                    <script>

    var picker = new Pikaday(
    {
        field: document.getElementById('datepicker'),
		format: 'YYYY-MM-DD',
        firstDay: 1,
		minDate: new Date(1970, 1, 1),
        maxDate: new Date(2010, 12, 31),
        yearRange: [1970,2010],
		
    });

          </script>
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>Profile Picture</td>
                  <td><label>
                    <input type="file" name="userfile" id="userfile">
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>Password</td>
                  <td><label>
                    <input type="password" name="pass" id="pass">
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>Confirm Password</td>
                  <td><label>
                    <input type="password" name="cpass" id="cpass">
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input type="submit" name="submit" id="submit" value="SignUp"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><?php
                  if(isset($msg))
				  {
					  print $msg;
				  }
				  ?></td>
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