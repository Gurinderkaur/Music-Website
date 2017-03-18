
	<!--start-header-->
	  <div class="header" id="home">
		  <div class="header-top">
				<div class="container">
					<div class="logo">
						<a href="index.php"><h1>MyAlbums</h1></a>
					</div>
					<div class="header-right">
						<div class="cart box_1">
							<a href="index.php">
								<h3>Welcome  
                                <?php
                                if(isset($_SESSION["n"]))
                                {
									print $_SESSION["n"];
								
									print"<a href='signout.php'><b><font color='#ffffff'>Signout</font</a>&nbsp;&nbsp;";
									print"<a href='changepassword.php'><b><font color='#ffffff'>Change Password</font></a>&nbsp;&nbsp;";
                                }
                                else
								{
							      print"Guest";
								  print'<a href="login.php"><b>Login</a>&nbsp;&nbsp;';
                                  print'<a href="signup.php"><b>SignUp</a>&nbsp;&nbsp;';
								}
								?>
                                
								</h3>
							</a>
							<div class="clearfix"> </div>
						</div>
					</div>
					 <div class="clearfix"> </div>
				</div>
			  </div>
			      <!--start-nav-->
			
            <div class="top-nav">
				  <div class="container">
				    <div class="home"><a href="index.php"><i class="glyphicon glyphicon-home"> </i></a></div>
					<span class="menu"> </span>
					<div class="top-menu">
						<nav class="navigation">
							<ul class="cl-effect-16">
								<li><a href="index.php"><b>Home</a></li>
								 <li><a href="showcategory.php"><b>Music</a></li>
                                 <li><a href="recentsongs.php"><b>Mixed Songs</a></li>
                                 <li><a href="contact.php"><b>Contact</a></li>
                                <li><a href="feedback.php"><b>Feedback</a></li>
								 <li><a href="search1.php"><b>Search</a></li>
								   <div class="clearfix"> </div>
							<ul>
							<!-- script-menu -->
							<script>
							$( "span.menu" ).click(function() {
							  $( ".top-menu" ).slideToggle( "slow", function() {
								// Animation complete.
							  });
							});
						</script>
						<!-- script-menu -->
						</nav>		
				    </div>
				
		

			        <div class="clearfix"> </div>
                   
                   </div>
                   </div>
                   </div>
                   

			   
		    