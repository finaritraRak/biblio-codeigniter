<h2><?= $title ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('books/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Category</label>
    <select name="category_id" class="form-control">
    <?php /*foreach ($categories as $category): */?>
    	<option value="<?php /* echo $category['id']; */?>memoire"><?php /* echo $category['name']; */ ?></option>
    <?php /*endforeach; */ ?>
    </select>
  </div>
  <div class="form-group">
    <label>Upload book</label>
    <input type="file" name="userfile" size="20">
  </div>
  <div class="form-group">
    <label>Description</label>
    <textarea id="editor1" class="form-control" name="Description" placeholder="Ajouter Description"></textarea>
  </div>
  <button type="submit" class="btn btn-primary mt-2">Valider</button>
</form>