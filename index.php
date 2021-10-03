<!DOCTYPE html>
<html lang="pt-pt">
<head>
	<meta charset="utf-8">
	<title>Upload de ficheiros</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1 class="title">Upload de Imagens</h1>

	<form action="upload.php" method="post" enctype="multipart/form-data" name="cadatro">
		Titulo do Ficheiro<input type="text" name="ficheiro">
		<input type="file" name="foto" accept='image/*'>
		<input type="submit" name="cadastrar" value="Cadastrar">	
	</form>

</body>
</html>