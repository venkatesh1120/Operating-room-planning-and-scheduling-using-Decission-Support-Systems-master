<?php
	include "connectioncreation.php";
?>	
<?php
if(isset($_REQUEST['signup']))
{
	$un=$_REQUEST['username'];
	$fn=$_REQUEST['firstname'];
	$ln=$_REQUEST['lastname'];
	
	$dob=$_REQUEST['dob'];
	
	$e=$_REQUEST['email'];
	$p=$_REQUEST['pno'];
	echo $p;
	
	$idi=$_REQUEST['idi'];
	$pt=$_REQUEST['pt'];
	$tos=$_REQUEST['tos'];
	
	
	$q="INSERT INTO `signup`(`username`, `fn`, `ln`, `dob`, `em`, `pno`, `dep`, `idis`, `pas`, `password`) VALUES ('$un','$fn','$ln','$dob','$e','$p','reception','$idi','$pt','$tos')";
	$q4=mysql_query($q);
	if(!$q4)
		die(mysql_error());
	else
		echo"inserted";
	header("location:index.html");
}
?>
