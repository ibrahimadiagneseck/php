<?php 

    function service($result) {

        foreach ($result as $row) {
            echo '<div class="paragraphe">';
            echo '<h2>' . $row['titre'] . '</h2>';
            echo '<p>' . $row['contenu'] . '</p>';
            echo '</div>';
        }

    }

?>