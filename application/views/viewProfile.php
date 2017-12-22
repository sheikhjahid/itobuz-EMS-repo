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
    <link href="<?php echo base_url('/'); ?>public/css/profile.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  
  
  
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
          
        </div>
          <div class="panel-body">

            <div class="container">
          <?php if($this->session->flashdata('upload_msg')) { ?>
          <div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><?php echo $this->session->flashdata('upload_msg'); ?></div>
                  <?php
                      }
                  ?>
          <?php if($this->session->flashdata('upload_error')){ ?>
          <div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><?php echo $this->session->flashdata('upload_error'); ?></div>
                  <?php
                      }
                  ?>
          <!--profile code here-->

         <!--  <h2 style="text-align:center" class="profile"><b><u>User Profile Details</u></b></h2> -->

          <div class="card">
            <?php if($user_image!=''){ ?>
          <img src="<?php echo base_url('/'); ?>public/pics/<?php echo $profile->image_path; ?>" class="circle" style="height:140px;
            width:120px;background-color:blue;border-radius:15%">
          <?php } ?>
          <!-- <div><label><b>Upload your profile pictire</b></label></div> -->
         

          <p class="name"> <?php foreach($row as $value){    ?> </p>
        </br>
      </br>
    </br>
  </br>

          <div class="container">
        
       <div class="row">
       <div class="col-md-12">
       <div class="col-md-2" id="fullname"><b>FULLNAME  </b><center><label class="fullname">:</label></center></div>
       <div class="col-md-10" id="fullname1"><?php echo $value->fullname; ?></div>
       </div>
       </div>         
    <div class="row">
  <div class="col-md-12"> 
  
  <div class="col-md-2" id="id"><b>ID  </b><center><label class="id">:</label></center></div>
    <div class="col-md-10" id="id1"><?php echo $value->id;  ?></div>
  </div>
</div>
    <div class="row">
    <div class="col-md-12">
    <div class="col-md-2" id="phone"><b> PHONE  </b><center><label class="phone">:</label></center></div>
    <div class="col-md-10" id="phone1"><?php echo $value->phone; ?></div>
  </div>
</div>
<div class="row">
    <div class="col-md-12">
    <div class="col-md-2" id="address"><b> ADDRESS  </b><center><label class="address">:</label></center></div>
    <div class="col-md-10" id="address1"><?php echo $value->address; ?></div>
  </div>
</div>
<div class="row">
    <div class="col-md-12">
    <div class="col-md-2" id="email"><b> EMAIL  </b><center><label class="email">:</label></center></div>
    <div class="col-md-10" id="email1"><?php echo $value->email; ?></div>
  </div>
</div>
<div class="row">
    <div class="col-md-12">
    <div class="col-md-2" id="team"><b> TEAM  </b><center><label class="team">:</label></center></div>
    <div class="col-md-10" id="team1"><?php echo ucwords($value->team_name); ?></div>
  </div>
</div>
<div class="row">
    <div class="col-md-12">
    <div class="col-md-2" id="role"><b> ROLE  </b><center><label class="role">:</label></center></div>
    <div class="col-md-10" id="role1"><?php echo ucwords($value->role_name); ?></div>
  </div>
</div>
    
<?php } ?>
</div> 

          </div>
          <!--end  of profile code-->
    
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