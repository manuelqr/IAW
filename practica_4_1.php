<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		$n = 100;   
		$impar = 1; 
		while ( $impar <= $n){
			echo "$impar <br />";
			$count = $count + $impar;
			$impar = $impar + 2;

		}
		
		echo $count;
	?>

</body>
</html>