<?php
	$connection = include_once('./conexao.php');

	$sql = 'select * from produto';
	$result = $connection -> prepare($sql);
	$result -> execute();


	$ficheiros = $result -> fetchAll(PDO::FETCH_OBJ);
	




?>