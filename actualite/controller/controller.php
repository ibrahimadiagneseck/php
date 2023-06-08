<?php 

    require('../service/service.php');

    function controller($req) {

        require('../connexion/connexion.php');

		$articles = $bdd->prepare($req);
		$articles->execute();

		$result = $articles->fetchAll(PDO::FETCH_ASSOC);

        service($result);

    }

?>