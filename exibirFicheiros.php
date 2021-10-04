<?php
	$connection = include_once('./conexao.php');

	$sql = 'select * from produto';
	$result = $connection -> prepare($sql);
	$result -> execute();
	$ficheiros = $result -> fetchAll(PDO::FETCH_OBJ);


	//para impressao das imagens na tela
	$html = "<div>";
	foreach ($ficheiros as $ficheiro) {
		$html .= "
		<div>
			<h1>{$produto -> nome}</h1>
			<img src=./img/{$ficheiro->imagem}>
		</div>
		";
	}
	$html .='</div>';

	return $html;

	




?>