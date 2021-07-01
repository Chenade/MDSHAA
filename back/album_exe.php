<?php

    include('../connect.php');

    switch ($_POST['action']){
        case 'add':
            $target_file = $_POST['photo'];

            $sql = 'INSERT INTO `album`(`name`, `date`, `intro`, `cover`, `link`) 
                VALUES ("'.$_POST['name'].'","'.$_POST['date'].'","'.$_POST['intro'].'","'.$target_file.'","'.$_POST['link'].'")';
            break;

        case 'edit':
            $target_file = $_POST['photo'];
            $sql = 'UPDATE `album` SET 
                `name`="'.$_POST['name'].'",
                `date`="'.$_POST['date'].'",
                `intro`="'.$_POST['intro'].'",
                `link`="'.$_POST['link'].'",
                `cover`="'.$target_file.'" WHERE `id`="'.$_POST['id'].'"';

            break;

        case 'delete':
            $sql = 'DELETE FROM `album` WHERE `id`="'.$_POST['id'].'"';
            break;
    }

    $run = mysqli_query($con, $sql);
    echo $sql;
    header('location:album.php');

?>