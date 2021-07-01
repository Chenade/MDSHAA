<?php

    include('../connect.php');

    switch ($_POST['action']){
        case 'add':
            $target_file .= $_POST['photo'];

            $sql = 'INSERT INTO `alumni`(`name`, `year`, `honor`, `img`) 
                    VALUES ("'.$_POST['name'].'","'.$_POST['year'].'","'.$_POST['honor'].'","'.$target_file.'")';
            break;

        case 'edit':
            $target_file .= $_POST['photo'];
            $sql = 'UPDATE `alumni` SET `name`="'.$_POST['name'].'",`year`="'.$_POST['year'].'",`honor`="'.$_POST['honor'].'",`img`="'.$target_file.'" WHERE `id`="'.$_POST['id'].'"';

            break;

        case 'delete':
            $sql = 'DELETE FROM `alumni` WHERE `id`="'.$_POST['id'].'"';
            break;
    }

    $run = mysqli_query($con, $sql);
    header('location:alumni.php');

?>