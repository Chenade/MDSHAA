<?php

include('../connect.php');

switch ($_POST['action']){
    case 'add':
        $target_file = $_POST['photo'];

        $sql = 'INSERT INTO `past_board`(`name`, `year`, `resume`, `img`) 
			    VALUES ("'.$_POST['name'].'","'.$_POST['year'].'","'.$_POST['resume'].'","'.$target_file.'")';
        break;

    case 'edit':
        $target_file = $_POST['photo'];
        $sql = 'UPDATE `past_board` SET `year`="'.$_POST['year'].'",`name`="'.$_POST['name'].'",`resume`="'.$_POST['resume'].'",`img`="'.$target_file.'" WHERE `id`="'.$_POST['id'];

        break;

    case 'delete':
        $sql = 'DELETE FROM `past_board`  WHERE `id`="'.$_POST['id'];
        break;
}

$run = mysqli_query($con, $sql);
header('location:past.php');

?>