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

<!-- Deleting Process -->
<?php
	$request = $bdd->prepare("delete from price");
	$request->execute();
	header('Location: index.php');
?>
<!-- END -->
