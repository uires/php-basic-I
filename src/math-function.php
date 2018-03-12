<?php


$lista = array("Jurema", "Julia", "Fulano", "Lucas");

$randomNumberSort = rand(1, 3);
echo "Random number: ". $randomNumberSort."<br>";
for ($i=0; $i < 4; $i++) {
	if ($randomNumberSort == $i) {
		echo "O ganhador é: ".$lista[$i];
	}
	
}