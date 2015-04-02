<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="./script/jquery.js"></script>
		<script type="text/javascript" src="./script/checkday.js"></script>
		<link type="text/css" rel="stylesheet" href="./css/bootstrap.css">
		<link type="text/css" rel="stylesheet" href="./css/checkday.css">
		<title>CheckDay</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			try {
				$bdd = new PDO('mysql:host=localhost;dbname=checkday', 'root', 'Rabbit');
			}
			catch (Exception $e) {
				die('Erreur : ' . $e->getMessage());
			}
		?>

		<form action="request.php" method="POST">
			Nom de l'article :<br></br>
			<input type="text" name="name"><br></br>
			Prix de l'article :<br></br>
			<input type="text" name="cost"><br></br>
			<input type="submit" value="Ajouter !">
		</form>
		<br></br>

		<?php
			$total = 0;
			$selection = "SELECT * FROM price";
    	$calls = $bdd->query($selection);
			foreach ($calls as $call) {
				echo "Article : " . $call["name"] . " Prix : " . $call["cost"] . " €";
				echo "<br></br>";
				$total = $total + $call["cost"];
			}
			echo "Total : " . $total . " €";
		?>
	</body>
</html>
