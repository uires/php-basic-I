<?php
/*
	@uthor: uires
	date: 2018-02-09
*/

// Cria uma string juntando elementos de uma array
$nome = array('Uires','Sousa' );
$nomeCompleto = implode(" ", $nome);
print $nomeCompleto; 
echo "<br><br>";



// Formata um n'umero a partir da virgula, para demostrar casas decimais

$number = 3.0319239;
$x = number_format($number, 2);
var_dump($x);
echo "<br><br>";



// Search: Busco a palavra que desejo alterar na variavel, replace: defino o que ira substituir e por fim para o paramentro de subject que e a variavel a ser alterada, essa e basicamente a ideia central da manipulacao atraves do str_replace

$texto = "Tem tres casas azuis, la na casa de papel, azuis cor de mar, azuis do marajar.";
echo $texto."<br>";
$string = str_replace("azuis", "amarelas", $texto);

echo $string."<br><br><br>" ;

// String to lower, basicamente transforma uma string de caixa alta para caixa baixa; 

$nomeCaixaAlta = "UIRES DEIVIDE SANTOS SOUSA";
echo $nomeCaixaAlta."<br>";
$nomeCaixaBaixa = strtolower($nomeCaixaAlta);
echo $nomeCaixaBaixa."<br>";


//ucwords converte a primeira letra de cada palavra

$nomeUser= "uires deivide santos sousa";
echo "<br>".$nomeUser."<br>";
$nomeUserTranform = ucwords($nomeUser);
echo $nomeUserTranform."\n";

//substring pega os caracteres de sua escolha da determinada string
echo "<br><br><br>";
$y = "Bonieky";
$yY = substr($y, 2, 3);
echo "<br>".$yY;

