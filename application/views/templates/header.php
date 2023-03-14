<html>
  <head>
    <title>Biblio</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
   

  </head>
  <body>
  <nav class="navbar navbar-expand-md navbar-dark bg-primary mb-2">
  	
     <a class="navbar-brand" href="#">biblio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
 <div class="collapse navbar-collapse" id="navbarCollapse">
     <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>posts">bibliotheque</a>
          </li>
  
         <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>categories">Categorie</a>
        </li>
  	</ul>
       <ul class="navbar-nav ml-auto">
         <?php if(!$this->session->userdata('login')): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a>
            </li>
         <?php endif; ?>
         <?php if($this->session->userdata('login')): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>users/dashboard"><?php echo $this->session->userdata('username'); ?></a></li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a>
            </li>
         <?php endif; ?>
       </ul>  
  		
  </div>
  </nav>

  <div class="container">

  <!-- Flash Messages -->
    <?php if($this->session->flashdata('user_registered')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
    <?php endif; ?>

     <?php if($this->session->flashdata('post_created')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
    <?php endif; ?>

     <?php if($this->session->flashdata('post_updated')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('category_created')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('post_deleted')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('login_failed')): ?>
      <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_loggedin')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_loggedout')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
    <?php endif; ?>

     <?php if($this->session->flashdata('category_deleted')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
    <?php endif; ?>




    
      <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ckeditor.js"></script>
