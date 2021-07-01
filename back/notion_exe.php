<?php

include('../connect.php');

switch ($_POST['action']){
    case 'add':
        $target_file = $_POST['photo'];

        $sql = 'INSERT INTO `notion`(`title`,`name`, `job`,`detail`, `img`) 
			    VALUES ("'.$_POST['title'].'","'.$_POST['name'].'","'.$_POST['job'].'","'.$_POST['detail'].'","'.$target_file.'")';
        break;

    case 'edit':
        $target_file .= $_POST['photo'];
        $sql = 'UPDATE `notion` SET `job`="'.$_POST['job'].'",`title`="'.$_POST['title'].'",`name`="'.$_POST['name'].'",`detail`="'.$_POST['detail'].'",`img`="'.$target_file.'" WHERE `id`="'.$_POST['id'].'"';

        break;

    case 'delete':
        $sql = 'DELETE FROM `notion` WHERE `id`="'.$_POST['id'].'"';
        break;
}

$run = mysqli_query($con, $sql);
header('location:notion.php');

?>