<?php
 if ($this->session -> userdata('email') == "" && $this->session -> userdata('login') != true && $this->session -> userdata('role_id') != 1) {
      redirect('administrator/index');
    }
 ?>

     <!-- Menu aside start -->
    <div class="main-menu">
        <div class="main-menu-header">
           <ul class="nav-left-new">
                        <li>
                            <a id="collapse-menu" href="#">
                                <i class="ti-home"></i>
                            </a>
                        </li>
                        <li>
                            <a class="main-search morphsearch-search" href="#">
                                <i class="ti-user   "></i>
                            </a>
                        </li>
                        <li>
                            <a class="main-search morphsearch-search" href="#">
                                <i class="ti-settings"></i>
                            </a>
                        </li>
                        <li>
                            <a class="main-search morphsearch-search" href="#">
                                <i class="ti-email"></i>
                            </a>
                        </li>
                   
                    </ul>
        </div>
        <div class="main-menu-content">
            <ul class="main-navigation">
             <li class="nav-item has-class">
                    <a href="<?php echo base_url(); ?>administrator/dashboard">
                        <i class="ti-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
             
                <li class="nav-item">
                    <a href="#!">
                        <i class="ti-layout"></i>
                        <span>Etudiants</span>
                    </a>
                    <ul class="tree-1">
                        <li><a href="<?php echo base_url(); ?>administrator/users/add-user">Ajouter Etudiant</a></li>
                        <li><a href="<?php echo base_url(); ?>administrator/users/users">Etudiants</a></li>
                    </ul>
                </li>
                    <li class="nav-item">
                        <a href="#!">
                            <i class="ti-layers"></i>
                            <span>Agenda</span>
                        </a>
                        <ul class="tree-1">
                            <li class="nav-sub-item"><a href="#">Agenda</a>
                                <ul class="tree-2">
                                    <li><a href="<?php echo base_url(); ?>administrator/blogs/add-blog">Ajouter un Agenda</a></li>
                                    <li><a href="<?php echo base_url(); ?>administrator/blogs/list-blog">Liste d'agenda</a></li>
                                </ul>
                            </li>
                           <li><a href="<?php echo base_url(); ?>administrator/blogs/blog-comments">Commentaire</a></li>
                        </ul>

                    </li>
                    <li class="nav-item">
                        <a href="#!">
                            <i class="ti-pencil-alt"></i>
                            <span>Livres</span>
                        </a>
                        <ul class="tree-1">
                           
                            <li class="nav-sub-item"><a href="#">Categorie</a>
                                <ul class="tree-2">
                                    <li><a href="<?php echo base_url(); ?>administrator/product-categories/create">Ajouter un categorie</a></li>
                                    <li><a href="<?php echo base_url(); ?>administrator/product-categories">Liste des Categories</a></li>
                                </ul>
                            </li>
                            <li class="nav-sub-item"><a href="#">Livres</a>
                                <ul class="tree-2">
                                    <li><a href="<?php echo base_url(); ?>administrator/products/create">Ajouter Livres</a></li>
                                    <li><a href="<?php echo base_url(); ?>administrator/products">Liste des Livres</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                
                    <li class="nav-item">
                        <a href="#!">
                            <i class="ti-settings"></i>
                            <span>Site Configuration</span>
                        </a>
                        <ul class="tree-1">
                            <li><a href="<?php echo base_url(); ?>administrator/site-configuration/update/1">Site Configuration</a></li>
                            <li><a href="<?php echo base_url(); ?>administrator/scopages">SCO</a></li>
                            <li> <a href="<?php echo base_url(); ?>administrator/sociallinks">Social Links</a></li>
                            <li> <a href="<?php echo base_url(); ?>administrator/page-contents">Page Contents</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#!">
                            <i class="ti-layout-slider"></i>
                            <span data-i18n="nav.basic-components.main">Sliders</span>
                        </a>
                        <ul class="tree-1">
                            <li><a href="<?php echo base_url(); ?>administrator/sliders/create" data-i18n="nav.basic-components.alert">Ajouter slider</a></li>
                            <li><a href="<?php echo base_url(); ?>administrator/sliders" data-i18n="nav.basic-components.breadcrumbs">Liste slider</a></li>
                        </ul>
                    </li>
                     <li class="nav-item">
                        <a href="#!">
                            <i class="ti-layout-slider"></i>
                            <span data-i18n="nav.basic-components.main">Gallerie</span>
                        </a>
                        <ul class="tree-1">
                            <li><a href="<?php echo base_url(); ?>administrator/galleries/add" data-i18n="nav.basic-components.alert">Ajouter Gallerie</a></li>
                            <li><a href="<?php echo base_url(); ?>administrator/galleries" data-i18n="nav.basic-components.breadcrumbs">Liste Gallerie</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#!">
                            <i class="ti-layout-grid2-thumb"></i>
                            <span data-i18n="nav.basic-components.main">Equipes</span>
                        </a>
                        <ul class="tree-1">
                            <li><a href="<?php echo base_url(); ?>administrator/team/add" data-i18n="nav.basic-components.alert">Ajouter une Equipe</a></li>
                            <li><a href="<?php echo base_url(); ?>administrator/team/list" data-i18n="nav.basic-components.breadcrumbs">Liste des Equipe</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#!">
                            <i class="ti-direction-alt"></i>
                            <span data-i18n="nav.basic-components.main">Testimonials</span>
                        </a>
                        <ul class="tree-1" style="display: none;">
                            <li><a href="<?php echo base_url(); ?>administrator/testimonials/add" data-i18n="nav.basic-components.alert">Add Testimonial</a></li>
                            <li><a href="<?php echo base_url(); ?>administrator/testimonials/list" data-i18n="nav.basic-components.breadcrumbs">List Testimonials</a></li>
                        </ul>
                    </li>
            </ul>
        </div>
    </div>
    <!-- Menu aside end -->
     <!-- Main-body start -->
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->

    <?php if($this->session->flashdata('success')): ?>
      <?php echo '<div class="alert alert-success icons-alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="icofont icofont-close-line-circled"></i>
                </button>
                <p><strong>Success! &nbsp;&nbsp;</strong>'.$this->session->flashdata('success').'</p></div>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('danger')): ?>
      <?php echo '<div class="alert alert-danger icons-alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="icofont icofont-close-line-circled"></i>
                </button>
                <p><strong>Error! &nbsp;&nbsp;</strong>'.$this->session->flashdata('danger').'</p></div>'; ?>
    <?php endif; ?>

     <?php if(validation_errors() != null): ?>
      <?php echo '<div class="alert alert-warning icons-alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="icofont icofont-close-line-circled"></i>
                </button>
                <p><strong>Alert! &nbsp;&nbsp;</strong>'.validation_errors().'</p></div>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('match_old_password')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('match_old_password').'</p>'; ?>
    <?php endif; ?>


     



