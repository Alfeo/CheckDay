<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="../script/jquery.js"></script>
		<script type="text/javascript" src="../script/index.js"></script>
		<link type="text/css" rel="stylesheet" href="../css/bootstrap.css">
		<link type="text/css" rel="stylesheet" href="../css/index.css">
		<title>CheckDay</title>
		<meta charset="utf-8">
	</head>
	<body>

<!-- BDD Connecting Process -->
		<?php
			try {
				$bdd = new PDO('mysql:host=localhost;dbname=checkday', 'root', 'Rabbit');
			}
			catch (Exception $e) {
				die('Erreur : ' . $e->getMessage());
			}
		?>
<!-- END -->

		<div class="header col-md-10 col-md-offset-1">
			<h2><strong>CheckDay !</strong></h2>
		</div>

		<div class="imgpres col-md-10 col-md-offset-1">
			<img src="../img/flat.png">
		</div>

		<div class="formadd col-md-3 col-md-offset-1">
			<form action="add.php" method="POST">
				Nom de l'article :<br></br>
				<input type="text" name="name"><br></br>
				Prix de l'article :<br></br>
				<input type="text" name="cost"><br></br>
				<input type="submit" value="Ajouter !">
			</form>
		</div>

		<div class="main col-md-4"i>
<!-- Showing Process -->
			<?php
				$total = 0;
				$selection = "SELECT * FROM price";
    		$calls = $bdd->query($selection);
				foreach ($calls as $call) {
					echo "<strong>Article : </strong>" . $call["name"] . " /<strong> Prix</strong> : " . $call["cost"] . " €";
					echo "<br></br>";
					$total = $total + $call["cost"];
				}
			?>
<!-- END -->
		</div>
		<div class="result col-md-3">
			<?php echo "Total : " . $total . " €";?>
			<br></br>
			<a href="./delete.php">Effacer Tout</a>
		</div>
		
		<div class=" col-md-10 col-md-offset-1 footer"></div>
		<div class="empt col-md-12"></div>
	</body>
</html>
