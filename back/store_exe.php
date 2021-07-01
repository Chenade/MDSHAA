<?php

include('../connect.php');

switch ($_POST['action']){
    case 'add':
        $target_file = $_POST['photo'];

        $sql = 'INSERT INTO `store`(`photo`, `name`, `tel`, `address`, `website`, `discount`) 
			    VALUES ("'.$target_file.'","'.$_POST['name'].'","'.$_POST['tel'].'","'.$_POST['address'].'","'.$_POST['website'].'","'.$_POST['discount'].'")';
        break;

    case 'edit':
        $target_file .= $_POST['photo'];
        $sql = 'UPDATE `store` SET `photo`="'.$target_file.'",`name`="'.$_POST['name'].'",`tel`="'.$_POST['tel'].'",
			    `address`="'.$_POST['address'].'",`website`="'.$_POST['website'].'",`discount`="'.$_POST['discount'].'" WHERE `id`="'.$_POST['id'].'"';

        break;

    case 'delete':
        $sql = 'DELETE FROM `store` WHERE `id`="'.$_POST['id'].'"';
        break;
}

$run = mysqli_query($con, $sql);
header('location:store.php');

?>