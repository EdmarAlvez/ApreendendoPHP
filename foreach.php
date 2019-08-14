<?php

$produtos[1] = 'sofá';
$produtos[2] = 'cadeira';
$produtos[3] = 'TV';
$produtos[4] = 'mesa';
$produtos[5] = 'Geladeira';

foreach ($produtos as $produto ) {
		# code...

	echo $produto.'<br>';

	if ($produto == 'mesa') {
		# code...
		echo "Compre uma mesa e ganhe 50% de desconto";
		echo "<br>";

	}



}





?>