<?php
session_start();

		require_once("vars.php");
		$conn=mysqli_connect(host,username,pass,dbname) or die("Error in connection" . mysqli_connect_error());
			$sogid=$_GET["sid"];
			$q="select addsong.songname,addsong.song, addsong.description, addsong.songpic, addsong.songid, category.categoryname, subcategory.subcatname,                addsong.artistid from addsong,category,subcategory,artistable where addsong.songid='$sogid' and addsong.categoryid = category.Categoryid and                 addsong.subcategoryid=subcategory.subcatid and addsong.artistid=artistable.artistid";
	        $res=mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
			$cnt=mysqli_affected_rows($conn);
		
			if($cnt==0)
			{
				$msg="No records found";
			}
			else
			{
				$x=mysqli_fetch_array($res);
				
				
			}
			
			if(isset($_POST["s2"]))
			{

	$comm=$_POST["comment"];
	$nm=$_SESSION["n"];
	date_default_timezone_set("Asia/Kolkata"); 
	$dt=date('Y-m-d H:i:s');
	$conn=mysqli_connect(host,username,pass,dbname) or die("Error in connection " . mysqli_connect_error());	
	$q="insert into comment(songid,comment,commby,commdt) values('$sogid','$comm','$nm','$dt')";
	mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==0)
	{
		print "Problem while posting comment, please try again";
	}
	else
	{
		$commmsg="Comment posted successfully";
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
          <table width="975" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td> <tr align="center">
        <td valign="top"><h1><font color="#330099"><b>Song Details
          
        </h1>
         </td>
        </tr>
      <tr>
        <td valign="top">&nbsp;</td>
      </tr>
      <td height="67"><tr>
        <td align="left" valign="top"><form name="form1" method="post" action="">
          <table width="799" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="282" rowspan="13" align="left"><?php print "<img src='uploads/$x[3]' align='center' height='250' width='210'>" ?></td>
              <td width="212"><strong> Song Name</strong></td>
              <td width="242"><?php print $x[0];?></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong>Description</strong></td>
              <td><?php print $x["description"]; ?></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong>Category</strong></td>
              <td><?php print $x["categoryname"]; ?></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong>Movie/Album</strong></td>
              <td><?php print $x["subcatname"]; ?></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong>Artist Name</strong></td>
              <td><?php
              	$a=$x[7];
				$ar=explode(",",$a);
				foreach($ar as $arr)
				{
				$conn=mysqli_connect(host,username,pass,dbname) or die("Error in connection " . mysqli_connect_error());	
				$qu=mysqli_query($conn,"select artistname,artistid from artistable where artistid=$arr");
				$ans=mysqli_fetch_array($qu);
				print "<a href='showsong1.php?cid=$ans[1]'> $ans[0]</a><br>";

				}
			  ?></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><strong>Song</strong></td>
              <td>
              
              <?php
             if(isset($_SESSION["n"]))
			{
				

       print"<a href='uploads/$x[1]'>Download</a>";
		  
			}
			else
			{
				print'<h4>Please<a href="login.php"><font color="#FF0000"> LOGIN </font> </a>to listen the Song...!!</h4>';
			}
?>			
	

              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>	
        </form>
          <p>&nbsp;</p>
          <form name="form2" method="post" action="">
            <table width="100%" border="0">
              <tr>
                <td><p>Post Your Comment</p>
                <p>&nbsp;</p>
                <p>
                  <label for="comment"></label>
                  <textarea name="comment" id="comment"></textarea>
                </p>
                <p>&nbsp;</p>
                <p>
                  <input type="submit" name="s2" id="s2">
                </p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>
                <?php
                  $conn=mysqli_connect(host,username,pass,dbname) or die("Error in connection " . mysqli_connect_error());	
	$q="select * from comment where songid='$sogid'";
	$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==0)
	{
		print "<h3>No comments available for this song</h3>";
	}
	else
	{
		print "<h2>$cnt comment(s) available for this song</h2>";
		while($ux=mysqli_fetch_array($res))
		{
			print "<b>Comment posted by :-$ux[3] at $ux[4]</b><br/>$ux[2]<hr>";	
		}
		
	}
	
				  
				  ?>
                </td>
                
                
                
                
                &nbsp;</p></td>
              </tr>
            </table>
          </form>
          <p>&nbsp;</p>
          <p>&nbsp;</p> 
        </td>
        </tr>
   </td>
   </tr>
   </table>   
     
     <p>
	        <!--footer-->
</p>
    <?php
	
	include_once("footer.php");
	?>
	<!--start-smoth-scrolling-->
			
</body>
</html>