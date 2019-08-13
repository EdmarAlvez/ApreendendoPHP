<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

	<body>

		<?php 

			//int
			$valor_inteiro = 1 * 4;
			echo $valor_inteiro;
			echo "<br>";

			$valor_inteiro = $valor_inteiro *2;
			echo $valor_inteiro;

			echo "<br>";

			//float
			$valor_fracionado = 10.1;
			echo $valor_fracionado;

			echo '<br>';

			//bollean
			$estado = true; #false
			echo $estado;

			echo "<br>";

			//string
			$texto = 'Curso de PhP - ' .$valor_inteiro;
			echo $texto;

			echo "<br>";
			
			//arrays
			echo "<br>";
			echo "========ARRAY=======";
			echo "<br>";
			echo "<br>";
			$mensagens_divertidas[1] = 'Olá sou Edmar';
			$mensagens_divertidas[2] = 'Estudo ADS';
			$mensagens_divertidas[3] = 'Estou atrás de um emprego';
			$mensagens_divertidas[4] = 'Quero muito Apreender';
			$mensagens_divertidas[5] = 'Valeu e obg!';
			echo "<br>";
			
			// outro modo

			$mensagens_divertidas1 = array('a' => 'Ola edmar' , 'b' => 'OK OK' ); 

			echo "<br>";
			echo "<br>";

			
			
			var_dump($mensagens_divertidas);
			echo "<br>";
			echo "<br>";
			print_r($mensagens_divertidas);
			echo "<br>";
			echo "<br>";
			echo $mensagens_divertidas[3];
			echo "<br>";
			echo "<br>";
			print_r($mensagens_divertidas1)



		?>

	

	</body>

</html>