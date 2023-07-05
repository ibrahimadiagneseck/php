<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $restaurant->fiche->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Restaurant</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">ID:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="id" value="<?php echo $restaurant->fiche->id; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nom du Restaurant:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nom_restaurant" value="<?php echo $restaurant->fiche->nom; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Propriètaire:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="proprietaire" value="<?php echo $restaurant->fiche->nom_restaurateur; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Adresse:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="adresse" value="<?php echo $restaurant->fiche->adresse; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Coordonnées:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="coordonnees" value="<?php echo $restaurant->fiche->coordonnees; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Liste:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="liste" value="<?php echo $restaurant->fiche->description_restaurant->liste; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Texte Descriptif:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="texte" value="<?php echo $restaurant->fiche->description_restaurant->paragraphe; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Commentaire & Avis:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="commentaire" value="<?php echo $restaurant->fiche->description_restaurant->partie; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nom(s) plat(s):</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nom_plat" value="<?php echo $restaurant->fiche->carte->plat->nom; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Prix:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="prix_plat" value="<?php echo $restaurant->fiche->carte->plat->prix; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Description:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="description_plat" value="<?php echo $restaurant->fiche->carte->plat->description->paragraphe; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Titre(s) Menu(s):</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nom_menu" value="<?php echo $restaurant->fiche->menus->menu->titre; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Prix:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="prix_menu" value="<?php echo $restaurant->fiche->menus->menu->prix; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Description:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="description_menu" value="<?php echo $restaurant->fiche->menus->menu->description->paragraphe; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $restaurant->fiche->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Restaurant</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $restaurant->fiche->nom; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $restaurant->fiche->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>