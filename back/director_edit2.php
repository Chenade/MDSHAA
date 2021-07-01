<?php


    include('../connect.php');
	

	$target_file = $_POST['photo'];

	
	$sql = 'UPDATE `director` SET `name`="'.$_POST['name'].'",`word`="'.$_POST['word'].'",`img`= "'.$target_file.'" WHERE 1';
	$run = mysqli_query($con,$sql);
	
	header('location:index.php');

?>