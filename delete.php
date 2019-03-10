<?php
	require('db.php');
	include("auth.php");

	$id = $_GET['id'];
	$sql = "DELETE FROM adminpost WHERE id='$id'";
	$res = mysqli_query($con, $sql);
				
	if($res){
		header("Location: dashboard.php");
		exit();
	} else {
		header("Location: dashboard.php");
		exit();
	}
	mysqli_close($con);
?>