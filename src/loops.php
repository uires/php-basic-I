<?php
// For loop
/*for( $i= 0; $i<=10; $i++ ){
	echo $i."i/10<br>";
	if ($i == 10) {
		echo "end loop for... <br>";
	}
}
	

$x = 0;
echo "starts loop white...<br>";
while ( $x <= 10) {
	echo $x."/10 <br>";
	$x++;
}
*/

$nome = array( 'nome' => 'uires',
				'idade' => 20,
				'cidade' => 'Salvador',
				'pais' => 'Brasil'
			);
foreach ($nome as $key => $value) {
	echo $key.": ".$value."<br>";
}
