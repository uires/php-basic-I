<?php
	$hi = sha1(md5("olá"));


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $hi;?></title>
</head>
	<body>
		<a href="src/criptografia.php">Criptografia</a><br/>
		<a href="src/funcoes.php">Funções</a><br/>
		<a href="src/loops.php">Estruturas de Repetição</a><br/>
		<a href="src/manipulacao-array.php">Manipulação de Array, Unidimensional</a><br/>
		<a href="src/manipulacao-texto.php">Manipulação de arquivos .txt</a><br/>
		<a href="src/math-function.php">Funções, Math</a><br/>
		<a href="src/time-funcoes.php">Funções, Tempo</a><br/>
	</body>
</html>