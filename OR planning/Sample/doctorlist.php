
	<?php
		include "connectioncreation.php";
		session_start();

		if (!isset($_SESSION['login_user'])) {
			echo "Please Login again";
			echo "<a href='signin.php'>Click Here to Login</a>";
		}
		else {
			$now = time(); // Checking the time now when home page starts.

			if ($now > $_SESSION['expire']) {
				session_destroy();
				echo "Your session has expired! <a href='index.html'></a>";
			}
			else { //Starting this else one [else1]
	?>
				<!-- From here all HTML coding can be done -->
				<html>
		<head>
		
		
		<script>
function myfunction()
   {
       
       var x =document.getElementById('calender').value;
       var xs =x.split('-');
       var l=parseInt(xs[0]);
       var l1=xs[1];
       var l2=xs[2];
       var y =document.getElementById('dob').value;
       var ys =y.split('-');
       var k=parseInt(ys[0]);
       var k1=ys[1];
       var k2=ys[2];
       var z=l-k;
       document.getElementById('age').value=z;
       
   }
                                    
     </script>
		
		
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			  <!--Import materialize.css-->
			  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

			  <!--Let browser know website is optimized for mobile-->
			  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<ul id="dropdown1" class="dropdown-content">
	  <li><a href="logout.php">logout</a></li>
	  <li><a href="profile.php">profile</a></li>
	 
	</ul>
	<nav>
	  <div class="nav-wrapper">
		<a href="Home.php" class="brand-logo"><img src="a.png" width=45%; heigth=50px; /></a>
		<ul class="right hide-on-med-and-down">
		  <li><a href="Home.php">Home</a></li>
		  <li><a href="register.php">Register</a></li>
		  <li><a href="doctorlist.php">Doctor List</a></li>
				  
			
		  <!-- Dropdown Trigger -->
		  <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><?php echo $_SESSION['login_user']; ?><i class="material-icons right">arrow_drop_down</i></a></li>
		</ul>

	  </div>
	</nav>
	<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
		  </head>
		  
		  
<form method="post" action="">
<table style="width:50%; height:20%; margin-left:25%; margin-top:3%; ">
  <tr>
    <th colspan=2><center> Welcome   <?php echo $_SESSION['login_user']; ?> the avialable doctors list</center></th>
  </tr>
  <tr><td align="center" >Name</td> <td>Department</td></tr>
  <?php
 $mn= $_SESSION['login_user'];
  $q3 = "SELECT * FROM signup ";
  
	$q4=mysql_query($q3);
	
	if(!$q4)
		die(mysql_error());
	while($q5=mysql_fetch_array($q4))
	{
		$cv=$q5[6];
		if($cv=="reception")
		{
			} else if($cv=="admin")
		{
			}
			
		else
		{
		
		
	?>    
  
		<tr><td align="center" ><?php echo $q5[1]; ?> <?php echo $q5[2]; ?></td> <td><?php echo $q5[6]; ?></td></tr>
		

		<?php }}?>
		</table>

		</form>
		
		<footer class="page-footer" >
			  <div class="container">
				<div class="row">
				  <div class="col l6 s12">
					<h5 class="white-text">Decision Support Systems</h5>
					<p class="grey-text text-lighten-4">Here you can find the help and our rules for privacy!!!</p>
				  </div>
				  <div class="col l4 offset-l2 s12">
					<h5 class="white-text">Links</h5>
					<ul style="
		height: 60px;
		width: 1650px;
	">
					  <li><a class="grey-text text-lighten-3"  href="Contactusreg.php">Contact Us     </a></li>
						
					  <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/DSSOR.planning//?skip_nax_wizard=true">Facebook       </a></li>
			
					</ul>
				  </div>
				</div>
			  </div>
			  <div class="footer-copyright">
				<div class="container">© 2015 Decision Support Systems Inc. All Rights Reserved.
			</div>
			  </div>
			</footer>



		  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
			  <script type="text/javascript" src="js/materialize.min.js"></script>
				</html>
	<?php
			}?>
	<?php	}
	?>
