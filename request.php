<?php
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=checkday', 'root', 'Rabbit');
	}
	catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}
?>

<?php
	$request = $bdd->prepare("INSERT INTO price (name, cost) VALUES (?, ?)");
	$first = $_POST["name"];
	$second = $_POST["cost"];
	$request->bindParam(1, $first);
	$request->bindParam(2, $second);
	$request->execute();
	header('Location: checkday.php');
?>
