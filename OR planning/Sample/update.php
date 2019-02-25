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

if(isset($_REQUEST['update']))
{
	$un=$_REQUEST['un'];
	$fn=$_REQUEST['fn'];
	$ln=$_REQUEST['ln'];
	
	$dob=$_REQUEST['dob'];
	
	$e=$_REQUEST['email'];
	
	$pno=$_REQUEST['pno'];
	
	$pt=$_REQUEST['pt'];
	$tos=$_REQUEST['pt1'];
	$lis=$_SESSION['login_user'];
	echo $lis;
	$q="UPDATE `signup` SET `fn`='$fn',`ln`='$ln',`dob`='$dob',`em`='$e',`pno`='$pno',`pas`='$pt',`password`='$tos' WHERE `username`='$un'";
	echo $q;
	$q4=mysql_query($q);
	
	if(!$q4)
		die(mysql_error());
	else
		
header("location:home.php");
}
			}
		}
?>
