<?php
$server = 'localhost';
$username = 'id17268434_manju';
$password = '=U9<DOIY$f}Eo=%s';
$database = 'id17268434_pirai';


try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}