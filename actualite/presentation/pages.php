<?php 

	require('../controller/controller.php');

	function accueil() { 

		?>
		<!DOCTYPE html>
		<html>
		<meta charset="utf-8">
		<head>
			<link rel="stylesheet" href="../css/accueil.css?v=<?php echo time(); ?>">
			<title>Accueil</title>
		</head>
		<body>

			<div id="entete">
					<h1>ACTUALITES POLYTECHNICIENNES</h1>
			</div>

			<div id="menu">
				<ul>
					<li><a href="corps_accueil.php" target="zone">Accueil</a></li>
					<li><a href="corps_sport.php" target="zone">Sport</a></li>
					<li><a href="corps_sante.php" target="zone">Santé</a></li>
					<li><a href="corps_education.php" target="zone">Education</a></li>
					<li><a href="corps_politique.php" target="zone">Politique</a></li>
				</ul>
			</div>
		
				<iframe src="corps_accueil.php" id="corps" name="zone"></iframe>

			<div id="pied">
				copyright &copy; dgi 2023
			</div>

		</body>
		</html>
		<?php
	}


	function corps_accueil() { 

		?>
		
			<link rel="stylesheet" href="../css/corps.css?v=<?php echo time(); ?>">

			<h1>Les dernières actualités</h1>

			<?php
				controller('SELECT titre, contenu FROM actualite.article');
			?>
		
		<?php
	}


	function corps_sport() { 

		?>
		
			<link rel="stylesheet" href="../css/corps.css?v=<?php echo time(); ?>">

			<h1>Les actualités du Sport</h1>

			<?php

				controller("SELECT titre, contenu FROM Article
									WHERE categorie = (SELECT id FROM Categorie WHERE libelle = 'Sport');");
			?>
		
		<?php
	}


	function corps_sante() { 

		?>
		
			<link rel="stylesheet" href="../css/corps.css?v=<?php echo time(); ?>">

			<h1>Les actualités de la Santé</h1>

			<?php

				controller("SELECT a.*
									FROM Article AS a
									JOIN Categorie AS c ON a.categorie = c.id
									WHERE c.libelle = 'Sante';");
			?>
		
		<?php
	}



	function corps_education() { 

		?>
		
			<link rel="stylesheet" href="../css/corps.css?v=<?php echo time(); ?>">

			<h1>Les actualités de l'Education</h1>

			<?php

				controller("SELECT titre, contenu
									FROM Article AS a
									JOIN Categorie AS c ON a.categorie = c.id
									WHERE c.libelle = 'Education';");
			?>
		
		<?php
	}


	function corps_politique() { 

		?>
		
			<link rel="stylesheet" href="../css/corps.css?v=<?php echo time(); ?>">

			<h1>Les actualités de la Politique</h1>

			<?php

				controller("SELECT titre, contenu
									FROM Article AS a
									JOIN Categorie AS c ON a.categorie = c.id
									WHERE c.libelle = 'Politique';");
			?>
		
		<?php
	}

?>


