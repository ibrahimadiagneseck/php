<?php
	session_start();
	if(isset($_POST['add'])){
		//open xml file
		$restaurants = simplexml_load_file('files/restaurants.xml');
		$portail = $restaurants->addChild('restaurants');

		$restaurant = $restaurants->restaurants->addChild('restaurant');

		$fiche = $restaurant->addChild('fiche');
		$fiche->addChild('id', $_POST['id']);
		$fiche->addChild('nom', $_POST['nom_restaurant']);
		$fiche->addChild('nom_restaurateur', $_POST['proprietaire']);
		$fiche->addChild('addresse', $_POST['addresse']);
		$fiche->addChild('coordonnees', $_POST['coordonnees']);
		$description_restaurant = $fiche->addChild('description_restaurant');
		$description_restaurant->addChild('liste', $_POST['liste']);
		$description_restaurant->addChild('paragraphe', $_POST['texte']);
		$description_restaurant->addChild('partie', $_POST['commentaire']);
		$carte = $fiche->addChild('carte');
		$plat = $carte->addChild('plat');
		$plat->addChild('nom', $_POST['nom_plat']);
		$plat->addChild('prix', $_POST['prix_plat']);
		$description = $plat->addChild('description');
		$description->addChild('paragraphe', $_POST['description_plat']);
		$menus = $fiche->addChild('menus');
		$menu = $menus->addChild('menu');
		$menu->addChild('titre', $_POST['nom_menu']);
		$menu->addChild('prix', $_POST['prix_menu']);
		$description1 = $menu->addChild('description');
		$description1->addChild('paragraphe', $_POST['description_menu']);
		// Save to file
		// file_put_contents('files/members.xml', $users->asXML());
		// Prettify / Format XML and save
		$dom = new DomDocument();
		$dom->preserveWhiteSpace = false;
		$dom->formatOutput = true;
		$dom->loadXML($restaurants->asXML());
		$dom->save('files/restaurants.xml');
		// Prettify / Format XML and save

		$_SESSION['message'] = 'Restaurant added successfully';
		header('location: index.php');
	}
	else{
		$_SESSION['message'] = 'Fill up add form first';
		header('location: index.php');
	}

?>