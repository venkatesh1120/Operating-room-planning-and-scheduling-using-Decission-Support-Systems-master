    <?php
	include "connectioncreation.php";
session_start();
 $mn= $_SESSION['login_user'];
$y = $_SERVER['QUERY_STRING'];

if(isset($_REQUEST['l']))
{
	$un=$_REQUEST['p'];
	echo $un;
	echo $y;
	$q="UPDATE `register` SET`slot`='$un' WHERE `id`='$y'";
	$q4=mysql_query($q);
	echo $q4;
	if(!$q4)
		die(mysql_error());
	else
		header("location:homedoc.php");
}

?>
	
<?php
    
	
	
    if (!isset($_SESSION['login_user'])) {
        echo "Please Login again";
        echo "<a href='index.html.php'>Click Here to Login</a>";
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
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <!--Import materialize.css-->
          <link type="text/css" rel="stylesheet" href="css/materialize.min1.css"  media="screen,projection"/>

          <!--Let browser know website is optimized for mobile-->
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <ul id="dropdown1" class="dropdown-content">
  <li><a href="logout.php">logout</a></li>
  <li><a href="profile.php">profile</a></li>
 
</ul>
<nav>
  <div class="nav-wrapper">
        <a href="homedoc.php" class="brand-logo"><img src="a.png" width=45%; heigth=50px; /></a>

    <ul class="right hide-on-med-and-down">
      <li><a href="adminhome.php">Home</a></li>
      
           <li><a href="adminpatients.php">Patients</a></li>
		     <li><a href="adminreception.php">Receptionist</a></li>
		   <li><a href="admindoctors.php">Doctors</a></li>
		   <li><a href="adminbooked.php">Booked slots</a></li>
        
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
<body style="min-height:'500px';">



<table style="width:50%; height:20%; margin-left:25%; margin-top:3%;">
  <tr>
    <th colspan=6><center> Welcome <?php echo $_SESSION['login_user']; ?> </center></th>
	<tr><td align="center" >Doctor Name</td> <td align="center" >Doctor email</td><td align="center" >Doctor phone no</td> <td align="center" >Doctor Department</td> </tr>
  </tr>
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
  
		<tr> <td><?php echo $q5[1]." ".$q5[2]; ?></td> <td><?php echo $q5[4]; ?></td><td><?php echo $q5[5]; ?></td><td><?php echo $q5[6]; ?></td></tr>
		
		
	

		<?php }}?>
	
		</table>













</body>

  <footer class="page-footer">
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
                  <li><a class="grey-text text-lighten-3" href="Contactusad.php">Contact Us     </a></li>
                  
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