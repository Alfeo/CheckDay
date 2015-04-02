<!-- DB Connecting Process -->
<?php
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=checkday', 'root', 'Rabbit');
	}
	catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}
?>
<!-- END -->

<!-- Adding Process -->

<?php
	if ($_POST["cost"] != 0) {
		$request = $bdd->prepare("INSERT INTO price (name, cost) VALUES (?, ?)");
		$first = $_POST["name"];
		$second = $_POST["cost"];
		$request->bindParam(1, $first);
		$request->bindParam(2, $second);
		$request->execute();
		header('Location: index.php');
	}
	else {
		header('Location: index.php');
	}

?>
<!-- END -->
