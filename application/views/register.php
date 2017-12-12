<!DOCTYPE html>
<html>
  <head>
    <title>ITOBUZ-EMS.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="<?php echo base_url('/'); ?>public/css/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="<?php echo base_url('/'); ?>public/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url('/'); ?>public/css/styles.css" rel="stylesheet">
    <link href="<?php echo base_url('/'); ?>public/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url('/'); ?>public/css/registration.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>

    .drop{

  background-color:grey;
  border:none;
  width:140px;
  height:40px;
  border-radius:5px;
}

</style>
  <body>
    <div class="header">
       <div class="container">
          <div class="row">
             <?php require_once 'layout/top-bar.php'; ?>
                <!-- Logo -->
               
       </div>
  </div>

    <div class="page-content">
      <div class="row">
      <div class="col-md-2">

        <?php require_once 'layout/left-bar.php'; ?>
                    <!-- Main menu -->

                     <!-- Sub menu -->
        
      </div>
      <div class="col-md-10">

        <div class="content-box-large">
          <div class="panel-heading">
          <div class="panel-title"><b><i><u>Register User:</u></i></b>

            <?php if($this->session->flashdata('insert_msg')) { ?>

            <div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><?php echo $this->session->flashdata('insert_msg'); ?></div>
                  <?php
                      }
                  ?>



             <div class="col-sm-5 form-box"></p>
                          </br>
                          </br>
                          <div class="form-top">
                            <div class="form-top-left">
                              <h3><b>Sign Up Form</b></h3>
                                <p>Fill in the form below to register user</p>
                            </div>
                            
                            </div>

                            <div class="form-bottom">
                          <form role="form" action="<?php echo base_url('user/register'); ?>" method="post" class="registration-form">
                            </br>
                        </br>
                        </br>
                        </br>
                            <div class="form-group">
                              <label class="sr-only" for="form-full-name">Full Name</label>
                                <input type="text" name="fullname" placeholder="Enter your fullname here" class="form-fullname form-control" id="form-fullname">
                              </div>
                              <div class="form-group">
                                <label class="sr-only" for="form-email">Email</label>
                                <input type="text" name="email" placeholder="Enter your email here" class="form-email form-control" id="form-email">
                              </div>
                                </br>
                              </br>
                              
                              <div class="form-group">
                                <select class="drop">
                                  <option value="0">Select Team</option>
                              <?php foreach($team_list as $t){ ?>
                                  <option value="<?php echo $t->id; ?>">
                                    <?php echo ucwords($t->name); ?>
                                  </option>
                             
                              <?php } ?>
                                </select>
                         
                              </div>
                              <div class="form-group">
                                <select class="drop">
                                  <option value="0">Select Role</option>
                              <?php foreach($role_list as $r){ ?>
                                  <option value="<?php echo $r->id; ?>">
                                    <?php echo ucwords($r->name); ?>
                                  </option>
                             
                              <?php } ?>
                                </select>
                         
                              </div>
                        
                            </br>
                              </br>
                             
                              <button type="submit" class="btn">Register me!!</button>
                            </br>
                            </br>
                          </form>
                        </div>
                        </div> 
                        </p>      
         
                 </div>
               </div>
             </div>
          
      </div>
    </div>
     </div>
<div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>

      </footer>
  </div>

      <link href="<?php echo base_url('/'); ?>public/css/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('/'); ?>public/js/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="<?php echo base_url('/'); ?>public/js/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('/'); ?>public/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url('/'); ?>public/js/jquery.dataTables.min.js"></script>

    <script src="<?php echo base_url('/'); ?>public/js/dataTables.bootstrap.js"></script>

    <script src="<?php echo base_url('/'); ?>public/js/custom.js"></script>
    <script src="<?php echo base_url('/'); ?>public/js/tables.js"></script>
    </div>

  </body>
</html>