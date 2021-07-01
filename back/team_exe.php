<?php

include('../connect.php');

switch ($_POST['action']){
    case 'add':
        $target_file = $_POST['photo'];

        $sql = 'INSERT INTO `team`( `name`, `job`, `img`,`email`,`tel`)
			    VALUES ("'.$_POST['name'].'","'.$_POST['job'].'","'.$target_file.'","'.$_POST['email'].'","'.$_POST['tel'].'")';
        break;

    case 'edit':
        $target_file .= $_POST['photo'];
        $sql = 'UPDATE `team` SET `name`="'.$_POST['name'].'",`email`="'.$_POST['email'].'",`tel`="'.$_POST['tel'].'",`job`="'.$_POST['job'].'",`img`="'.$target_file.'"  WHERE `id`="'.$_POST['id'].'"';
        break;

    case 'delete':
        $sql = 'DELETE FROM `team`  WHERE `id`="'.$_POST['id'].'"';
        break;
}

$run = mysqli_query($con, $sql);
header('location:team.php');

?>