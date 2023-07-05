<?php
    $cheminFichier = 'files/restaurants.xml';
    $document = simplexml_load_file($cheminFichier);
    $restaurants = $document->restaurants;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Gestion Restaurants</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <h1 class="page-header text-center">Gestion des Restaurants</h1>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span
                        class="glyphicon glyphicon-plus"></span> New</a>
                <?php 
                session_start();
                if(isset($_SESSION['message'])){
                    ?>
                <div class="alert alert-info text-center" style="margin-top:20px;">
                    <?php echo $_SESSION['message']; ?>
                </div>
                <?php

                    unset($_SESSION['message']);
                }
            ?>
                <table class="table table-bordered table-striped" style="margin-top:20px; margin-left: -30%;">
                    <thead>
                        <th></th>
                        <th colspan="4" style="text-align: center;">Fiche</th>
                        <th colspan="3" style="text-align: center;">Description</th>
                        <th colspan="3" style="text-align: center;">Plats</th>
                        <th colspan="3" style="text-align: center;">Menus</th>
                    </thead>
                    <thead>
                        <th>ID</th>
                        <th>Nom du Restaurant</th>
                        <th>Proprietaire</th>
                        <th>Adresse</th>
                        <th>Coordonnées</th>

                        <th>Liste</th>
                        <th>Texte Descriptif</th>
                        <th>Commentaire & Avis</th>

                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Description</th>

                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Description</th>

                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($restaurants->restaurant as $restaurant) : ?>
                        <tr>
                            <td><?= $restaurant->fiche->id ?></td>
                            <td><?= $restaurant->fiche->nom ?></td>
                            <td><?= $restaurant->fiche->nom_restaurateur ?></td>
                            <td><?= $restaurant->fiche->addresse ?></td>
                            <td><?= $restaurant->fiche->coordonnees ?></td>
                            <td><?= $restaurant->fiche->description_restaurant->liste ?></td>
                            <td><?= $restaurant->fiche->description_restaurant->paragraphe ?></td>
                            <td><?= $restaurant->fiche->description_restaurant->partie ?></td>
                            <td><?= $restaurant->fiche->carte->plat->nom ?></td>
                            <td><?= $restaurant->fiche->carte->plat->prix ?></td>
                            <td><?= $restaurant->fiche->carte->plat->description->paragraphe ?></td>
                            <td><?= $restaurant->fiche->menus->menu->titre ?></td>
                            <td><?= $restaurant->fiche->menus->menu->prix ?></td>
                            <td><?= $restaurant->fiche->menus->menu->description->paragraphe ?></td>
                            <td>
                                <a href="#edit_<?php echo $restaurant->fiche->id; ?>" data-toggle="modal"
                                    class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span>
                                    Edit</a>
                                <a href="#delete_<?php echo $restaurant->fiche->id; ?>" data-toggle="modal"
                                    class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span>
                                    Delete</a>
                            </td>
                            <?php include('edit_delete_modal.php'); ?>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include('add_modal.php'); ?>
    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>