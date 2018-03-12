<?php
/*
	@uthor: uires
	2018-02-09
*/
// array_key, retorna todos os elementos de index de um Array
$nomes = array(
	"nome" => "Uires",
	"idade" => 20,
	"cidade" => "salvador",
	"pais" => "Brasil"
);
$arrayIndex = array_keys($nomes);
print_r($arrayIndex);
echo "<br>";

// array_values, essa funcao cria um array só com os valores de uma determinada array
$arrayValues = array_values($nomes);
var_dump($arrayValues);
echo "<br>";


// array_pop, remove o ultimo registro no array; no caso vai remover o conteudo do index 'quartaCidade'


$listaCidades = array('primeiraCidade' => "Salvador",
					 'segundaCidade' => 'Onha',
					 'terceiraCidade' => 'Nazaré',
					 'quartaCidade'=> 'Sao Bernado');
var_dump($listaCidades);echo "<br>";
array_pop($listaCidades);
var_dump($listaCidades);
echo "<br>";


// array_shift, remove o conteudo do primeiro index do array no caso 'primeiraCidade'

array_shift($listaCidades);
print_r($listaCidades);
echo "<br>";

// asort e arsort, ordena um Array mantendo a associacao entre indices e valores, ASC e DESC

$estadosBrasil = array('primeiro' => 'Bahia',
					   'segundo' => 'Sao Paulo',
					   'terceiro' => 'Amazonas',
					   'quarto' => 'Acre',
					   'quinto' => 'Rio de Janeiro');

asort($estadosBrasil);
var_dump($estadosBrasil);
echo "<br>";


//count, refere o total de registro em um array

echo "Total registro: ". count($estadosBrasil)."<br>";


//in_array, verifica a existencia de determinado elemento no array

if (in_array("Acre", $estadosBrasil)) {
	echo "Tem<br>";
}else{
	echo "Nao tem<br>";
}
