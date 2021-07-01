<?php

include('../connect.php');

switch ($_POST['action']){
    case 'add':
        $sql = 'INSERT INTO `map`(`name`, `address`, `alumni`, `graduate`, `category`) VALUES 
			("'.$_POST['name'].'","'.$_POST['address'].'","'.$_POST['alumni'].'","'.$_POST['graduate'].'","'.$_POST['category'].'")';
        break;

    case 'edit':
        $sql = 'UPDATE `map` SET `name`="'.$_POST['name'].'",`address`="'.$_POST['address'].'",`alumni`="'.$_POST['alumni'].'",`graduate`="'.$_POST['graduate'].'",`category`="'.$_POST['category'].'" WHERE `id` ="'.$_POST['id'].'"';
        break;

    case 'delete':
        $sql = 'DELETE FROM `map` WHERE `id`="'.$_POST['id'].'"';
        break;
}

$run = mysqli_query($con, $sql);
header('location:map.php');

?>