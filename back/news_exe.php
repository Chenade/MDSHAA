<?php

include('../connect.php');

switch ($_POST['action']){
    case 'add':
        $target_file = $_POST['photo'];

        $sql = 'INSERT INTO `news`(`title`, `content`, `img`, `link`) 
			VALUES ("'.$_POST['title'].'","'.$_POST['content'].'","'.$target_file.'","'.$_POST['link'].'")';
        break;

    case 'edit':
        $target_file .= $_POST['photo'];
        $sql = 'UPDATE `news` SET `title`="'.$_POST['title'].'",`link`="'.$_POST['link'].'",`content`="'.$_POST['content'].'",`img`="'.$target_file.'" WHERE `id`="'.$_POST['id'].'"';

        break;

    case 'delete':
        $sql = 'DELETE FROM `news` WHERE `id`="'.$_POST['id'].'"';
        break;
}

$run = mysqli_query($con, $sql);
header('location:news.php');

?>