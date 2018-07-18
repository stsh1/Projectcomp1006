<?php

$databaseHost = 'tcp:serverdbcomp.database.windows.net';
$databaseName = 'projectcomp1006';
$databaseUsername = 'admincomp1006';
$databasePassword = 'anjana@123';

// PHP Data Objects(PDO) Sample Code:
try {
	// http://php.net/manual/en/pdo.connections.php
	$dbConn = new PDO("mysql:host={$databaseHost};dbname={$databaseName}", $databaseUsername, $databasePassword);
	
	$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Setting Error Mode as Exception
	// More on setAttribute: http://php.net/manual/en/pdo.setattribute.php
} catch(PDOException $e) {
	echo $e->getMessage();
}
 
?>
