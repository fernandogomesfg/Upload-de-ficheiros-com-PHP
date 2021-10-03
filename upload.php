<?php
	
	//chamando a conexao
	$connection = include_once('./conexao.php');

	$foto = $_FILES['foto'];
	//var_dump($foto);

	if ($foto['name'] != '') {
		//pegar o nome da foto, mas com o MD5 para evitar repeticao de nomes na base de dados e concatenar com um numero RANDOM
		$nameImagem = md5($foto['name'] .rand(0,9999));

		//variavel para pegar e armazenar a extensao da imagem
		$tipo = 

		var_dump($nameImagem);
	} else {
		// code...
	}
	

?>