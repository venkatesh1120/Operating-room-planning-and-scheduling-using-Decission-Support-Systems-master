    <?php
	include "connectioncreation.php";
session_start();
 $mn= $_SESSION['login_user'];
$y = $_SERVER['QUERY_STRING'];

if(isset($_REQUEST['l']))
{
	$un=$_REQUEST['p'];
	
	$q="UPDATE `register` SET`slot`='$un' WHERE `id`='$y'";
	$q4=mysql_query($q);
	
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
	<tr><td align="center" >Patient Id</td> <td align="center" >Patient name</td><td align="center" >Department</td> <td align="center" >Doctor Name</td> <td align="center" >Doctor Date</td> <td align="center" >Doctor Start Time</td> <td align="center" >Doctor End Time</td><td align="center" >Room no</td> <td align="center" >Messge</td>  <td align="center" >Slot confirm</td> </tr>
  </tr>
   <?php
 
  $q3 = "SELECT * FROM register ";
  
	$q4=mysql_query($q3);
	
	if(!$q4)
		die(mysql_error());
	while($q5=mysql_fetch_array($q4))
	{
	
		if(strlen($q5[18])==0)
		{
		
		}
		else
		{
 
?>
<tr><td> <?php echo $q5[0]; ?></td> <td> <?php echo $q5[2]." ".$q5[3] ?></td> <td> <?php echo $q5[13]; ?></td><td> <?php echo $q5[14]; ?></td><td> <?php echo $q5[18]; ?></td><td> <?php echo $q5[19]; ?></td><td> <?php echo $q5[20]; ?></td>
<td> <?php if ($q5[21]==0){ echo"alot a room no";}else if($q5[21]==8){ echo"  ";}  else echo $q5[21]; ?></td>
		<td>
		<?php
		if(strlen($q5[22])==0)
		{ echo "Alot a room";}
	else
		if(strlen($q5[22])==6)
		{ 
			echo $q5[22];
	}
	else{
		echo $q5[22];
		}
	?>
	</td><td><button value="<?php echo $q5[0];?>" onclick="x(this.value)"> Change/Add</button></td> </tr>
		
		
			
		<script>


 function x(y)
	{ 
	
	
	  location.href='aminconfirm.php?'+y;
	}
</script>	
		
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
                  <li><a class="grey-text text-lighten-3" href="Contactusad.php"">Contact Us     </a></li>
                    
                  <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/DSSOR.planning/?skip_nax_wizard=true">Facebook       </a></li>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">© 2015 Decision Support Systems INC. All Rights Reserved.
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