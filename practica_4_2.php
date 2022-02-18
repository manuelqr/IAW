<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	$A = 1;
	$C = 1;
		while ( $A <= 50 ) {
      	$C = $A * $A;
      		echo "El cuadrado de $A es $C <br />";
      	$A = $A + 1;
      	$count = $count + $C;	
		}
		echo "La suma de los primeros 50 cuadrados es $count"
	?>	
</body>
</html>
