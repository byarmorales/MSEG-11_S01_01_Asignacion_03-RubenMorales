<?php
date_default_timezone_set('America/Costa_Rica');
$server = '10.142.0.9';
$username = 'redish';
$password = '5NZXdZm#@M7!';
$database = 'registro_redish';
try {
	 $conn = new PDO("mysql:host=$server;dbname=$database;", $username,$password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    } catch (PDOException $e) {
     die('Connection Failed: ' . $e->getMessage());
}
?>
