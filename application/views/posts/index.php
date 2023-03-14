<h2><b><?= $title ?></b></h2>



<table class="table">
  <thead>
    <tr>
      <th scope="col">Category</th>
      <th scope="col">Mention</th>
      <th scope="col">Niveau</th>  
      <th scope="col">Etudiant</th>
      <th scope="col">Date</th>
      <th scope="col">Description</th>
       <th scope="col">Telechargement</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach($posts as $post) : ?>
	    <tr>
	      <th scope="row"><?php echo $post['name_cat']; ?></th>
	      <td><?php echo $post['mention']; ?></td>
         <td><?php echo $post['niveau']; ?></td>
        <td><?php echo $post['name']; ?> <?php echo $post['username']; ?></td>
	      <td><?php echo $post['created_at']; ?></td>
        
	      <td><a style="text-decoration: none;" href="<?php echo site_url('/posts/'.$post['slug']); ?>">voir plus</a></td>

        <?php 
       ?>
	      <td><a style="text-decoration: none;" href="<?php echo site_url();?>assets/livre/<?php echo $post['post_image']; ?>">telecharger</a></td>
	    </tr>
   <?php endforeach; ?>
  </tbody>
</table>





<div class="paginate-link">
	<?php echo $this->pagination->create_links(); ?>
</div>