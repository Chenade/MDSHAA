<?php

include('../connect.php');


$sql = 'DELETE FROM `'.$_GET['year'].'` WHERE `id`="'.$_GET['id'].'"';
echo $sql;
$run = mysqli_query($con, $sql);


header('location:graduation_year.php?year='.$_GET['year'].'');

?>