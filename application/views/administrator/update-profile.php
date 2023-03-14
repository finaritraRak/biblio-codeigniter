   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admintemplate/bower_components/switchery/dist/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admintemplate/assets/pages/advance-elements/css/bootstrap-datetimepicker.css">
    <!-- Date-range picker css  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admintemplate/bower_components/bootstrap-daterangepicker/daterangepicker.css" />
    <!-- Date-Dropper css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admintemplate/bower_components/datedropper/datedropper.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admintemplate/bower_components/switchery/dist/switchery.min.css" />

    
            <div class="page-header">
                <div class="page-header-title">
                    <h4>Modifier mon profile</h4>
                </div>
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index-2.html">
                                <i class="icofont icofont-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Modifier mon profile</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Modifier mon profile</a>
                        </li>
                    </ul>
                </div>
            </div>
           
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                       
                        <div class="card">
                            <div class="card-header">
                                <h5>Modifier Administrateur</h5>
                                <div class="card-header-right">
                                    <i class="icofont icofont-rounded-down"></i>
                                    <i class="icofont icofont-refresh"></i>
                                    <i class="icofont icofont-close-circled"></i>
                                </div>
                            </div>
                            <div class="card-block">
                             <div class="col-sm-8">
                               <?php echo form_open_multipart('administrator/update_admin_profile_data'); ?>
                                     <input type="hidden" name="id" class="form-control" value="<?php echo $this->session->userdata('user_id'); ?>">
                                   
                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nom d'utilisateur</label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly="" name="username" class="form-control" value="<?php echo $user['username']; ?>" placeholder="User Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Adresse mail</label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly=""  name="email" class="form-control" value="<?php echo $user['email']; ?>" placeholder="Adresse mail">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nom complet</label>
                                        <div class="col-sm-10">
                                            <input type="text"  name="name" class="form-control" value="<?php echo $user['name']; ?>" placeholder="Nom complet">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Numero de telephone</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="contact" value="<?php echo $user['contact']; ?>" class="form-control" placeholder="Numero de telephone">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Adresse</label>
                                        <div class="col-sm-10">
                                            <input type="text"  name="address" value="<?php echo $user['address']; ?>" class="form-control" placeholder="Adresse">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Matricule</label>
                                        <div class="col-sm-10">
                                            <input type="text"  name="zipcode" value="<?php echo $user['zipcode']; ?>" class="form-control" placeholder="Matricule">
                                        </div>
                                    </div>
                                    <div class="form-group row" style="float:center;">
                                    <label class="col-sm-2 col-form-label">Genre</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                    
                                         <label>
                                            <input value="Female" <?php if($user['gender'] == 'Female'){ echo "checked"; } ?> name="gender" checked="" type="radio"><i class="helper"></i> Femme
                                        </label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                        <label>
                                            <input value="Male" <?php if($user['gender'] == 'Male'){ echo "checked"; } ?> name="gender" type="radio"><i class="helper"></i> Homme
                                        </label>
                                    </div>
                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Photo</label>
                                        <div class="col-sm-6">
                                           <img src="<?php echo base_url().'assets/images/users/'.$user['image']; ?>" width="70px">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Mettre a jour mon photo</label>
                                        <div class="col-sm-6">
                                            <input type="file" name="userfile" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Date de naissance</label>
                                        <div class="col-sm-6">
                                        <input type="text" id="dropper-default" value="<?php echo $user['dob']; ?>" name="dob" class="form-control" placeholder="Selectionner votre date de naissance">
                                        </div>
                                    </div>
                                  
                                            <input type="hidden" value="<?php echo $user['status']; ?>" name="status" class="js-single" />
                                        
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" name="submit" class="btn btn-primary">Mettre a jour</button>
                                        </div>
                                    </div>
                                    <textarea id="description" style="visibility: hidden;"></textarea>
                                </form>
                               </div>
                                   
                                </div>
                            </div>
                        </div>
                       
                   

     <script type="text/javascript" src="<?php echo base_url(); ?>admintemplate/bower_components/switchery/dist/switchery.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>admintemplate/assets/pages/advance-elements/swithces.js"></script>
       <script type="text/javascript" src="<?php echo base_url(); ?>admintemplate/assets/pages/advance-elements/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>admintemplate/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>admintemplate/assets/pages/advance-elements/bootstrap-datetimepicker.min.js"></script>
    <!-- Date-range picker js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>admintemplate/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Date-dropper js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>admintemplate/bower_components/datedropper/datedropper.min.js"></script>

   
    <!-- ck editor -->
    <script src="<?php echo base_url(); ?>admintemplate/bower_components/ckeditor/ckeditor.js"></script>
    <!-- echart js -->
  
    <script src="<?php echo base_url(); ?>admintemplate/assets/pages/user-profile.js"></script>