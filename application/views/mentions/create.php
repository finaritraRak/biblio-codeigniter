<h2><?= $title ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('categories/create'); ?>
  <div class="form-group">
    <label>nom du category</label>
    <input type="text" class="form-control" name="name" placeholder="Ajouter nom du category">
  </div>
  <button type="submit" class="btn btn-primary mt-2">Valider</button>
</form>