<?php
	session_start();
	$id = $_GET['id'];

	$restaurants = simplexml_load_file('files/restaurants.xml');

	$index = 0;
	$i = 0;

	foreach($restaurants->restaurant->fiche as $restaurant){
		if($restaurant->fiche->id == $id){
			$index = $i;
			break;
		}
		$i++;
	}

	unset($restaurants->restaurant[$index]);
	file_put_contents('files/restaurants.xml', $restaurants->asXML());

	$_SESSION['message'] = 'Restaurant deleted successfully';
	header('location: index.php');

?>