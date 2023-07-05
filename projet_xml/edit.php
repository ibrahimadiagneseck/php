<?php
	session_start();
	if(isset($_POST['edit'])){
		$restaurants = simplexml_load_file('files/restaurants.xml');
		foreach($restaurants->restaurants->restaurant->fiche as $fiche){
			
						if($fiche->id == $_POST['id']){
							$fiche->nom = $_POST['nom_restaurant'];
							$fiche->nom_restaurateur = $_POST['proprietaire'];
							$fiche->adresse = $_POST['adresse'];
							$fiche->coordonnees = $_POST['coordonnees'];

							$fiche->description_restaurant->liste = $_POST['liste'];
							$fiche->description_restaurant->paragraphe = $_POST['texte'];
							$fiche->description_restaurant->partie = $_POST['commentaire'];

							$fiche->carte->plat->nom = $_POST['nom_plat'];
							$fiche->carte->plat->prix = $_POST['prix_plat'];
							$fiche->carte->plat->description->paragraphe = $_POST['description_plat'];

							$fiche->menus->menu->titre = $_POST['titre_menu'];
							$fiche->menus->menu->prix = $_POST['prix_menu'];
							$fiche->menus->menu->description->paragraphe = $_POST['description_menu'];

							break;
						}
					
		}
		file_put_contents('files/restaurants.xml', $restaurants->asXML());
		$_SESSION['message'] = 'Restaurant updated successfully';
		header('location: index.php');
	} else {
		$_SESSION['message'] = 'Select Restaurant to edit first';
		header('location: index.php');
	}

?>