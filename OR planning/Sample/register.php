
	<?php
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
		  
		  
	<body>
	<form method="post" action="registration.php">
			   
						<table align="center"  style="width:50%; height:20%; margin-left:25%; margin-top:3%;">
					  
						  <tr><th colspan=2><center>Register the patient </center></th></tr>
							<tr><td>Registration Date:</td>
							<td><input type="date" name="calender" id="calender"/></td></tr>
							<tr><td>First Name:</td>
							<td><input type="text" name="firstname" /></td></tr>
							<tr><td>Last Name:</td>
							<td><input type="text" name="lastname" /></td></tr>
							
							 <tr><td>Gender:</td>
							 <td> 
							 <input class="with-gap" name="gender" type="radio" id="test3" value="male"  />
		<label for="test3">Male</label> 
		<input class="with-gap" name="gender" type="radio" id="test4" value="female"  />
		<label for="test4">Female</label>
							 </td></tr>
							
							 <tr><td>Occupation:</td>
							<td><input type="text" name="occupation" /></td></tr>
							
						  <tr><td>Date Of Birth:
								  </td><td><input type="date" name="dob" id="dob"/></td></tr>
							
							<tr><td>Age:</td>
							<td><input type="text" name="age"  value="" id="age" onfocus="myfunction()" /></td></tr>  


							
				 <tr><td>Blood Group</td> <td>   
		<input class="with-gap" name="bg" type="radio" id="test5" value="a+"  />
		<label for="test5">A+</label> 
		<input class="with-gap" name="bg" type="radio" id="test6" value="ab+"  />
		<label for="test6">AB+</label>
		 <input class="with-gap" name="bg" type="radio" id="test7" value="b+"  />
		<label for="test7">B+</label>
		 <input class="with-gap" name="bg" type="radio" id="test8" value="o+" checked />
		<label for="test8">O+</label>
		 <input class="with-gap" name="bg" type="radio" id="test9" value="a-"  />
		<label for="test9">A-</label>
		 <input class="with-gap" name="bg" type="radio" id="test10" value="ab-"  />
		<label for="test10">AB-</label>
		 <input class="with-gap" name="bg" type="radio" id="test11" value="b-"  />
		<label for="test11">B-</label>
		 <input class="with-gap" name="bg" type="radio" id="test12" value="o-" />
		<label for="test12">O-</label>




				 
		 <tr><td>Marital Status</td> <td>   

	  <input class="with-gap" name="ms" type="radio" id="test13" value="single"  />
		<label for="test13">Single</label>
	<input class="with-gap" name="ms" type="radio" id="test14" value="married" />
		<label for="test14">Married</label>
		 </td></tr>

	 <tr><td>Email Id:</td><td> <input type="text" name="email" /><br /></td></tr>
	  <tr><td>Telephone:</td><td> <input type="text" name="phone" /><br /></td></tr>
	  <tr><td>Address:</td><td>
			  <textarea id="textarea1"name="ad" class="materialize-textarea"></textarea>
			 
		   
			
			</td></tr>
	<tr><td>Department:</td><td>  

	<input class="with-gap" name="dep" type="radio" id="test15" value="orthopedic" checked/>
		<label for="test15">Orthopedic</label>
	<input class="with-gap" name="dep" type="radio" id="test16" value="dental" />
		<label for="test16">Dental</label><input class="with-gap" name="dep" type="radio" id="test17" value="cardiology"  />
		<label for="test17">Cardiology</label>
	<input class="with-gap" name="dep" type="radio" id="test18" value="radiology" />
		<label for="test18">Radiology</label><input class="with-gap" name="dep" type="radio" id="test19" value="ontology"  />
		<label for="test19">Ontology</label>
	<input class="with-gap" name="dep" type="radio" id="test20" value="gynecology" />
		<label for="test20">Gynecology</label>
		<input class="with-gap" name="dep" type="radio" id="test21" value="neurology"  />
		<label for="test21">Neurology</label>
	<input class="with-gap" name="dep" type="radio" id="test22" value="others" />
		<label for="test22">Others</label>


	  
	<tr><td>Consultant Name:</td><td> <input type="text" name="cn" /></td></tr>
	<tr><td>Patient Type</td> <td> 

	<input class="with-gap" name="pt" type="radio" id="test23" value="emergency"  />
		<label for="test23">Emergency</label>
	<input class="with-gap" name="pt" type="radio" id="test24" value="inpatient" checked />
		<label for="test24">Inpatient</label>
		<input class="with-gap" name="pt" type="radio" id="test25" value="outpatient"  />
		<label for="test25">Outpatient</label>
	<input class="with-gap" name="pt" type="radio" id="test26" value="daypatient" />

	<label for="test26">Daypatient</label>


		   </td></tr>

				 <tr><td>Type of Surgery:</td><td> 

	<input class="with-gap" name="tos" type="radio" id="test27" value="normal" checked  />
		<label for="test27">Normal</label>
	<input class="with-gap" name="tos" type="radio" id="test28" value="critical" />
		<label for="test28">Critical</label>
		<input class="with-gap" name="tos" type="radio" id="test29" value="regular"  />
		<label for="test29">Regular</label>
	<input class="with-gap" name="tos" type="radio" id="test30" value="scheduled" />
<label for="test30">Scheduled</label>
<input class="with-gap" name="tos" type="radio" id="test31" value="complicated" />
<label for="test31">Complicated</label>




</td></tr>
				  
				<tr><td>Medical History
								  </td><td>
								  
								  <input name="history" type="radio" id="test1" value="yes" />
		  <label for="test1">Yes</label>
								   <input name="history" type="radio" id="test2" value="no" checked />
		  <label for="test2">No</label>
								  
								 
								  </td></tr>          
						   <tr><td>  <input type="submit" value="Register" name="register"/>&nbsp;&nbsp;
						</td><td><input type="reset" value="Reset"/></td>
							   </tr>
							   </table>
			
	 
		</form>
		
		
		</body>
		
		
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
					  <li><a class="grey-text text-lighten-3" href="Contactusreg.php">Contact Us     </a></li>
						
					  <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/DSSOR.planning/?skip_nax_wizard=true">Facebook       </a></li>
					  
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
			}
		}
	?>
