<html>
	<head>
		<meta charset="1">
		<title>Dia</title>
	</head>
 <body>
 	<?php
 		function linha($semana)
 		{
 			echo "
 				<tr>
 					<th>{$semana[0]</th>
 					<th>{$semana[1]</th>
 					<th>{$semana[2]</th>
 					<th>{$semana[3]</th>
 					<th>{$semana[4]</th>
 					<th>{$semana[5]</th>
 					<th>{$semana[6]</th>
 				</tr>
 			";	
 		}

 		function calendario()
 		{
 			$dia= 1 ;
 			$semana = array();
 			while ($dia <= 31){
 				array_push($semana, $dia);

 				if (count($semana == 7){
 					linha($semana);
 					$semana = array();
 				}
 				
 				$dia++;
 			} 
 		}
 	?>

 	<table border="1">
 		<tr>
 			<th>Dom</th>
 			<th>Seg</th>
 			<th>Ter</th>
 			<th>Qua</th>
 			<th>Qui</th>
 			<th>Sex</th>
 			<th>Sáb</th>
 		</tr>
 		<?php calendario(); ?>
 	</table>	
 </body>
</html>