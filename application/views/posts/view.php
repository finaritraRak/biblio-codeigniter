<!-- To view the blog details -->
<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Publié le: <?php echo $post['created_at']; ?></small><br>
<div class="post-body">
	<?php echo $post['body']; ?>
</div>
<a href="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image']; ?>">telecharger</a>

<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
	<a class="btn btn-default pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'] ?>">Edit</a>
	<?php echo form_open('posts/delete/'.$post['id']); ?>
		<input type="submit" value="delete" class="btn btn-danger">
	</form>
<?php endif; ?>
