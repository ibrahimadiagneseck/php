<?php 

    function service($result) {

        foreach ($result as $row) {
            echo '<div class="paragraphe" style="font-family: Arial, Helvetica, sans-serif; border: thick double black;	border-radius: 15px; padding: 10px;	margin: 10px;">';
            echo '<h2>' . $row['titre'] . '</h2>';
            echo '<p>' . $row['contenu'] . '</p>';
            echo '</div>';
        }

    }

?>