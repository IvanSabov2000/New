<?php 


$connection = mysqli_connect('localhost', 'root', '', 'FirstDataBase');

$select_db = mysqli_select_db($connection, 'Users');

if($connection == false)
	echo 'Что то с бд.';

mysqli_query($connection, "SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
mysqli_query($connection, "SET CHARACTER SET 'utf8'");


