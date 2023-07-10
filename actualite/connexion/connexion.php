<?php

    try {
        $bdd = new PDO('mysql:host=localhost; dbname=actualite; chaset=utf8;', 'root', '');
    } catch (PDOException $e) {	
        exit('An error occurred while connecting to the database: ' . $e->getMessage());
        $bdd = null;
    }

    

?>