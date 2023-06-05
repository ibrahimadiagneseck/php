<?php 

    function contenu_par_requete($req) {

        require('connexion.php');

		$articles = $bdd->prepare($req);
		$articles->execute();

		$result = $articles->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $row) {
            echo '<div class="paragraphe">';
            echo '<h2>' . $row['titre'] . '</h2>';
            echo '<p>' . $row['contenu'] . '</p>';
            echo '</div>';
        }

        $bdd = null;

    }

?>