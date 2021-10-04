<?php
	
	//chamando a conexao
	$connection = include_once('./conexao.php');

	$foto = $_FILES['foto'];
	//var_dump($foto);

	if ($foto['name'] != '') {
		//pegar o nome da foto, mas com o MD5 para evitar repeticao de nomes na base de dados e concatenar com um numero RANDOM
		$nameImagem = md5($foto['name'] .rand(0,9999));

		//variavel para pegar e armazenar a extensao da imagem
		$tipo = substr($foto['name'], -4);

		//Variavel para armazenar o nome completo da imagem
		$nomeCompleto = "{$nameImagem}{$tipo}";

		//variavel para armazenar o endereco na imagem
		$imagem = $foto['tmp_name'];

		//nome do ficheiro
		$nomeFicheiro = $_POST['ficheiro'];

		//movendo o ficheiro para a pasta imagem
		move_uploaded_file($imagem, "./img/{$nomeCompleto}");

		//instrucao sql para guardar a imagem na base de dados
		$sql = "insert into tbl_imagens (nome, imagem) values (:ficheiro, :imagem)";

		//dizendo ao PDO para preparar a a conexao com a base de dados
		$result = $connection -> prepare($sql);
		$result -> bindValue(':ficheiro',$nomeFicheiro);
		$result -> bindValue(':imagem',$nomeCompleto);
		$result -> execute();
		
		header('location: ./index.php');
	} 
	

?>