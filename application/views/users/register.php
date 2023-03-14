
<div class="container-fluid">
<div class="row">
	<div class="col-md-12">
		<?php echo validation_errors(); ?>
		<?php echo form_open_multipart('users/register'); ?>
		<h3 class="text-center"><?= $title ?></h3>
		   <div class="form-group">
		   	 <label>Nom</label>
		   	 <input type="text" class="form-control" name="name" placeholder="Nom">
		   </div>
		   <div class="form-group">
		   	 <label>Prenom</label>
		   	 <input type="text" name="username" class="form-control" placeholder="Prenom">
		   </div>

           <div class="form-group">
		   	 <label>Mention</label>
		   	 <input type="text" name="mention" class="form-control" placeholder="votre mention">
		   </div>

          <div class="form-group">
		    <label>Niveau</label>
		    <select name="niveau" class="form-control">
		    
		    	<option value="Licence1">Licence 1</option>
		    	<option value="Licence2">Licence 2</option>
		    	<option value="Licence3">Licence 3</option>
		    	<option value="Master1">Master 1</option>
		    	<option value="Master2">Master 2</option>
		    
		    </select>
          </div>

		   <div class="form-group">
		   	 <label>adresse mail</label>
		   	 <input type="text" name="email" class="form-control" placeholder="Votre adresse mail">
		   </div>
		   <div class="form-group">
		   	 <label>Mot de passe</label>
		   	 <input type="password" class="form-control" name="password" placeholder="Votre mot de passe">
		   </div>
		   <div class="form-group">
		   	 <label>confirmation mot de passe</label>
		   	 <input type="password" class="form-control" name="password2" placeholder="Confirmer votre mot de passe">
		   </div>
		   
		   <button type="submit" class="btn btn-primary mt-2">Valider</button>
		<?php echo form_close() ?>
	</div>
</div>
</div>