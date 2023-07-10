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

			<header>
				<div id="entete">
						<h1>ACTUALITES POLYTECHNICIENNES</h1>
				</div>
			</header>

			<main>
				<div id="menu">
					<ul>
						<li><a href="corps-accueil.php" target="zone">Accueil</a></li>
						<li><a href="corps-sport.php" target="zone">Sport</a></li>
						<li><a href="corps-sante.php" target="zone">Santé</a></li>
						<li><a href="corps-education.php" target="zone">Education</a></li>
						<li><a href="corps-politique.php" target="zone">Politique</a></li>
					</ul>
				</div>
			
					<iframe src="corps-accueil.php" id="corps" name="zone"></iframe>
			</main>

			<footer>
				<div id="pied">
					copyright &copy; dgi 2023
				</div>
			</footer>

			

		</body>
		</html>
		<?php
	}


	function corps_accueil() { 

		?>
			<h1 style="text-align: center;">Les dernières actualités</h1>

			<?php
				controllerAccueil();
			?>
		
		<?php
	}


	function corps_sport() { 

		?>
			<h1 style="text-align: center;">Les actualités du Sport</h1>

			<?php
				controllerSport();
			?>
		
		<?php
	}


	function corps_sante() { 

		?>
			<h1 style="text-align: center;">Les actualités de la Santé</h1>

			<?php
				controllerSante();
			?>
		
		<?php
	}



	function corps_education() { 

		?>
			<h1 style="text-align: center;">Les actualités de l'Education</h1>

			<?php
				controllerEducation();
			?>
		
		<?php
	}


	function corps_politique() { 

		?>
			<h1 style="text-align: center;">Les actualités de la Politique</h1>

			<?php
				controllerPolitique();
			?>
		
		<?php
	}

?>


