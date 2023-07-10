<?php 

    require('../service/service.php');

    function controllerAccueil() {

        require('../connexion/connexion.php');

		$articles = $bdd->prepare('SELECT titre, contenu FROM actualite.article ORDER BY id ASC');
		$articles->execute();

		$result = $articles->fetchAll(PDO::FETCH_ASSOC);

        service($result);

    }

    function controllerSport() {

        require('../connexion/connexion.php');

		$articles = $bdd->prepare("SELECT titre, contenu FROM Article
                                    WHERE categorie = (SELECT id FROM Categorie WHERE libelle = 'Sport');");
		$articles->execute();

		$result = $articles->fetchAll(PDO::FETCH_ASSOC);

        service($result);

    }

    function controllerSante() {

        require('../connexion/connexion.php');

		$articles = $bdd->prepare("SELECT a.*
                                    FROM Article AS a
                                    JOIN Categorie AS c ON a.categorie = c.id
                                    WHERE c.libelle = 'Sante';");
		$articles->execute();

		$result = $articles->fetchAll(PDO::FETCH_ASSOC);

        service($result);

    }

    function controllerEducation() {

        require('../connexion/connexion.php');

		$articles = $bdd->prepare("SELECT titre, contenu
                                    FROM Article AS a
                                    JOIN Categorie AS c ON a.categorie = c.id
                                    WHERE c.libelle = 'Education';");
		$articles->execute();

		$result = $articles->fetchAll(PDO::FETCH_ASSOC);

        service($result);

    }

    function controllerPolitique() {

        require('../connexion/connexion.php');

		$articles = $bdd->prepare("SELECT titre, contenu
                                    FROM Article AS a
                                    JOIN Categorie AS c ON a.categorie = c.id
                                    WHERE c.libelle = 'Politique';");
		$articles->execute();

		$result = $articles->fetchAll(PDO::FETCH_ASSOC);

        service($result);

    }

?>