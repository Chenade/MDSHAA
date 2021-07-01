<?php

include('../connect.php');

switch ($_POST['action']){
    case 'add':

        $sql = 'INSERT INTO `oversea`(`name`, `place`, `email`, `address`, `social`, `link`,`tel`) 
			VALUES ("'.$_POST['name'].'","'.$_POST['place'].'","'.$_POST['email'].'","'.$_POST['address'].'","'.$_POST['social'].'","'.$_POST['link'].'","'.$_POST['tel'].'")';
        break;

    case 'edit':

        $sql = 'UPDATE `oversea` SET `name`="'.$_POST['name'].'",`tel`="'.$_POST['tel'].'",`place`="'.$_POST['place'].'",`email`="'.$_POST['email'].'",`address`="'.$_POST['address'].'",`social`="'.$_POST['social'].'",`link`="'.$_POST['link'].'" WHERE `id`="'.$_POST['id'].'"';

        break;

    case 'delete':
        $sql = 'DELETE FROM `oversea` WHERE `id`="'.$_POST['id'].'"';
        break;
}

$run = mysqli_query($con, $sql);
header('location:oversea.php');

?>