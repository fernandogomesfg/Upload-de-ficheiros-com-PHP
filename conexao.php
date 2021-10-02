<?php
	$host = 'localhost';
	$port = '3306';
	$db = 'db_upload';
	$user = 'root';
	$senha = '';

	try {
		$connection = new PDO("mysql:host={$host};port={$port};dbname={$db}",$user,$senha);
		return $connection;
	} catch (Exception $e) {
		echo "Ocorreu o seguinte erro: {$e -> getMessage()}";
	}


?>