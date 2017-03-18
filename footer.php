<div class="footer">
	  <div class="container">
			<div class="footer-top">
			  <div class="col-md-4 amet-sed">
				<h4>Contact Us</h4>
				 <ul class="social">
		                    <li><a  href="https://www.facebook.com/" ><i class="fb"> </i> </a></li>
		                    <li><a  href="contact.php"><i  class="rss"></i></a></li>
		                    <li><a  href="https://twitter.com/twitter" ><i class="twitter"></i></a></li>

		                    <div class="clearfix"></div>
		                </ul>
						<ul class="social-in">
							<li><i class="glyphicon glyphicon-home two"> </i>Model Town,Jalandhar</li>
							<li><i class="glyphicon glyphicon-earphone"> </i> +71999-56985</li>
							<li><a href="mailto:contact@example.com"><i class="glyphicon glyphicon-envelope"> </i> gurinderthind123@gmail.com</a></li>
							<div class="clearfix"> </div>
						</ul>
				</div>
				<div class="col-md-4 amet-sed ">
				   <h4>Please Give Your Feedback</h4>
				   <p>&nbsp;</p>
				   <p><a href="feedback.php">@ Feedback</a></p>
				  						
				</div>
				 <div class="col-md-4 amet-sed amet-in">
						<h4><center>Photo Stream</center></h4>
					<ul>
                    <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><td valign="top">
          <?php
		require_once("vars.php");
		$conn=mysqli_connect(host,username,pass,dbname) or die("Error in connection" . mysqli_connect_error());
			$q="select * from addsong order by rand() limit 6";
	$res=mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
			$cnt=mysqli_affected_rows($conn);
			mysqli_close($conn);
			if($cnt==0)
			{
				$msg="No records found";
			}
			else
			{
				print "<table width='400' cellspacing='0'>";
				$count=1;
				while($x=mysqli_fetch_array($res))
				{
					if($count==1)
					{
						print "<tr align='center'>";
					}
					print"<td>
					<a href='showsongdetail.php?sid=$x[1]'><img src='uploads/$x[6]' height='90' width='95' border='0'></a><br/>
					<a href='showsongdetail.php?sid=$x[1]'><font color='white'>$x[4]</font></a>
					</td>";
					$count++;
					if($count==4)
					{
						print "</tr>";
						$count=1;
					}
				}
				print "</table>";
			}
		?></td>
            </tr>
          </table>
							
			
							<div class="clearfix"> </div>
					</ul>
			  </div>
				<div class="clearfix"> </div>
			</div>
			 <div class="copy">
						<p>&copy; 2015 My_Albums. All Rights Reserved | Design by MyAlbums Creations</a> </p>
		        </div>
			</div>
		</div>