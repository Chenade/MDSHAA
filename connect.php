<?php
	
	
	//$server = '140.128.156.150';
	$server = '127.0.0.1';
	$username = 'admin';
	$password = '1234';
	$database = 'md';
	
	$con = mysqli_connect($server,$username,$password,$database) or die('connect failed');
	mysqli_query($con,"SET NAMES 'UTF8'");
	//header("Content-Type:text/html; charset=utf-8");
?>