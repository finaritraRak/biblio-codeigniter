<h3><b><?= $title ?></b></h3>
<br>
<ul class="list-group">
<?php foreach($mentions as $mention) : ?>
	<li class="list-group-item"><a style="text-decoration: none;" href="<?php echo site_url('/categories/posts/'.$mention['id']); ?>"><?php echo $mention['name_mention']; ?></a>
		<?php if($this->session->userdata('user_id') == $mention['user_id']): ?>
			<form class="cat-delete" action="categories/delete/<?php echo $mention['id']; ?>" method="POST">
				<input type="submit" class="btn-link text-danger" value="[X]">	
			</form>
		<?php endif; ?>
	</li>
<?php endforeach; ?>
</ul>