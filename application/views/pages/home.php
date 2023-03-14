<style type="text/css">
    img{
        height: 150px;
    }
    .card:hover{
        cursor: pointer;
    }
</style>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
<div class="jumbotron">
     <div class="container">
         <div class="row">
              <div class="col-md-4 ml-auto order-2">
                 <!-- <img src="etudiant/img/developer.jpg" alt="" class="img-fluid d-none d-sm-block">-->
              
                  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                          <div class="carousel-item active">
                              <img src="<?php echo base_url(); ?>assets/images/galleries/book.jpg" alt="first slide" class="d-block w-100 img-fluid rounded">
                          </div>
                          <div class="carousel-item">
                              <img src="etudiant/img/developer.jpg" alt="second slide" class="d-block w-100 img-fluid rounded">
                          </div>

                          <div class="carousel-item">
                              <img src="etudiant/img/developer.jpg" alt="third slide" class="d-block w-100 img-fluid rounded">
                          </div>
                      </div>
                  </div>
            
              
              
                </div>
              <div class="col-md-8 order-1 mb-2">
                  <h1>Oniversity FJKM Ravelojaona</h1>
                  <p><h3>Bibliothèque numerique</h3></p>
                      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal">Voir Catégorie</button>
              </div>

    <!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#007bff;color:#fff">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, corrupti!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- fin Modal -->


         </div>
     </div>  
</div>

<hr>

 

<h2>Livre disponible par mention</h2>

 <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="<?php echo base_url(); ?>assets/images/galleries/droit.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Droit</h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?php echo base_url(); ?>assets/images/galleries/com.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Communication</h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?php echo base_url(); ?>assets/images/galleries/info.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Informatique</h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?php echo base_url(); ?>assets/images/galleries/ges.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Gestion</h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?php echo base_url(); ?>assets/images/galleries/download.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Genie Civile et Industrielle</h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?php echo base_url(); ?>assets/images/galleries/book.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Agronomiques</h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?php echo base_url(); ?>assets/images/galleries/tourisme.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tourisme</h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?php echo base_url(); ?>assets/images/galleries/anglais.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Anglaises</h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?php echo base_url(); ?>assets/images/galleries/pexel.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">GAPE</h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
</div>