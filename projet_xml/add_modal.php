<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">ID:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="id">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nom du Restaurant:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nom_restaurant">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Propriètaire:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="proprietaire">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Addresse:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="addresse">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Coordonnées:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="coordonnees">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Liste:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="liste">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Texte Descriptif:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="texte">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Commentaire & Avis:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="commentaire">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nom(s) plat(s):</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nom_plat">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Prix:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="prix_plat">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Description:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="description_plat">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Titre(s) Menu(s):</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nom_menu">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Prix:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="prix_menu">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Description:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="description_menu">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>