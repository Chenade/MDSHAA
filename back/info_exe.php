<?php

include('../connect.php');

switch ($_POST['action']){
    case 'add':
        $target_file = $_POST['photo'];

        $sql = 'INSERT INTO `info`(`title`, `img`, `link`) 
			    VALUES ("'.$_POST['title'].'","'.$target_file.'","'.$_POST['link'].'")';
        break;

    case 'edit':
        $target_file = $_POST['photo'];
        $sql = 'UPDATE `info` SET 
                `title`="'.$_POST['title'].'",
                `img`="'.$_POST['photo'].'",
                `link`="'.$_POST['link'].'" WHERE `id`="'.$_POST['id'].'"';

        break;

    case 'delete':
        $sql = 'DELETE FROM `info` WHERE `id`="'.$_POST['id'].'"';
        break;
}

$run = mysqli_query($con, $sql);
echo $sql;
header('location:info.php');

?>