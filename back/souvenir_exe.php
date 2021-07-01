<?php

include('../connect.php');

switch ($_POST['action']){
    case 'add':
        $target_file = $_POST['photo'];

        $sql = 'INSERT INTO `souvenir`(`name`, `intro`, `price`, `img`, `remain_count`) 
			    VALUES ("'.$_POST['name'].'","'.$_POST['intro'].'","'.$_POST['price'].'","'.$target_file.'","'.$_POST['remain_count'].'")';
        break;

    case 'edit':
        $target_file .= $_POST['photo'];
        $sql = 'UPDATE `souvenir` SET `name`="'.$_POST['name'].'",`intro`="'.$_POST['intro'].'",`price`="'.$_POST['price'].'",`img`="'.$target_file.'",`remain_count`="'.$_POST['remain_count'].'" WHERE `id`="'.$_POST['id'].'"';

        break;

    case 'delete':
        $sql = 'DELETE FROM `souvenir` WHERE `id`="'.$_POST['id'].'"';
        break;
}

$run = mysqli_query($con, $sql);
header('location:souvenir.php');

?>