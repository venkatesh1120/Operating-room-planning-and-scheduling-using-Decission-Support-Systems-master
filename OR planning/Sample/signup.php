<?php
	include "connectioncreation.php";
?>	
<?php
if(isset($_REQUEST['register']))
{
	$cal=$_REQUEST['calender'];
	$fn=$_REQUEST['firstname'];
	$ln=$_REQUEST['lastname'];
	$g=$_REQUEST['gender'];
	$o=$_REQUEST['occupation'];
	$dob=$_REQUEST['dob'];
	$a=$_REQUEST['age'];
	$bg=$_REQUEST['bg'];
	$ms=$_REQUEST['ms'];
	$e=$_REQUEST['email'];
	$phone=$_REQUEST['phone'];
	$ad=$_REQUEST['ad'];
	$dep=$_REQUEST['dep'];
	$cn=$_REQUEST['cn'];
	$pt=$_REQUEST['pt'];
	$tos=$_REQUEST['tos'];
	$mh=$_REQUEST['history'];
	$id=$fn. "_".$ln." _ld_".$a;
	echo 
	$q="INSERT INTO `register`(`id`,`rg` ,`fn`, `ln`, `g`, `o`, `dob`, `a`, `bg`, `ms`, `e`, `phone`, `ad`, `dep`, `cn`, `pt`, `tos`, `mh`) VALUES ( '$id','$cal', '$fn', '$ln', '$g', '$o', '$dob', '$a', '$bg', '$ms', '$e', '$phone', '$ad', '$dep', '$cn', '$pt', '$tos', '$mh')";
	$q4=mysql_query($q);
	if(!$q4)
		die(mysql_error());
	else
		echo"inserted";
	//header("location:signin.php");
}
?>
