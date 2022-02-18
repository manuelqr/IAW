<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	Hola <?php echo htmlspecialchars($_POST['nombre']); ?>.<br />
    Usted tiene <?php echo (int)$_POST['edad']; ?> años.<br />
    Su correo es <?php echo htmlspecialchars($_POST['correo']); ?>.<br />
</body>
</html>