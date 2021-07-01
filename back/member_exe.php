<?php

include('../connect.php');

switch ($_POST['action']){
    case 'add':
        $target_file = $_POST['photo'];

        $sql = 'INSERT INTO `board_member`( `name`, `year`, `graduate`, `job`, `company`,img)
			    VALUES ("'.$_POST['name'].'","'.$_POST['year'].'","'.$_POST['graduate'].'","'.$_POST['job'].'","'.$_POST['company'].'","'.$target_file.'")';
        break;

    case 'edit':
        $target_file .= $_POST['photo'];
        $sql = 'UPDATE `board_member` SET `name`="'.$_POST['name'].'",`year`="'.$_POST['year'].'",`graduate`="'.$_POST['graduate'].'",`job`="'.$_POST['job'].'",`company`="'.$_POST['company'].'",`img`="'.$target_file.'"  WHERE `id`="'.$_POST['id'].'"';

        break;

    case 'delete':
        $sql = 'DELETE FROM `board_member`  WHERE `id`="'.$_POST['id'].'"';
        break;
}

$run = mysqli_query($con, $sql);
header('location:member.php');

?>