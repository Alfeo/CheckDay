<?php
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=checkday', 'root', 'Rabbit');
	}
	catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}
?>

<?php
	$request = $bdd->prepare("delete from price");
	$request->execute();
	header('Location: checkday.php');
?>
