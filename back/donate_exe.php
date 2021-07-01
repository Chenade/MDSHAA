<?php

include('../connect.php');

switch ($_POST['action']){
    case 'add':

        $sql = 'INSERT INTO `donate`(`name`, `amount`, `target`, `mehtod`) 
                VALUES ("'.$_POST['name'].'","'.$_POST['amount'].'","'.$_POST['target'].'","'.$_POST['method'].'")';

        break;

    case 'edit':

        $sql = 'UPDATE `donate` SET 
                `name`="'.$_POST['name'].'",
                `amount`="'.$_POST['amount'].'",
                `target`="'.$_POST['target'].'",
                `mehtod`="'.$_POST['method'].'" 
               WHERE `id`="'.$_POST['id'].'"';

        break;

    case 'delete':
        $sql = 'DELETE FROM `donate` WHERE `id`="'.$_POST['id'].'"';
        break;
}

$run = mysqli_query($con, $sql);
echo $sql;
header('location:donate.php');

?>