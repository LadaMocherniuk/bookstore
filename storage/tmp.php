<?php 

$con = mysqli_connect("127.0.0.1", "root", "") or die("Ошибка, невозможно установить соединение." . "Код ошибки errno: " . mysqli_connect_errno() . "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL);

$sql = "SET NAMES utf8mb4; DROP DATABASE IF EXISTS `laravel`; DROP SCHEMA IF EXISTS laravel; CREATE SCHEMA laravel CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;";


if (mysqli_multi_query($con, $sql)){
    echo "Schema created successfully";
}else{
    echo "error creating schema: ".mysqli_error($con);
}

mysqli_close($con);
