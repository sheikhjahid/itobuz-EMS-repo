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
    <link href="<?php echo base_url('/'); ?>public/css/upload.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
   <style>
   .fa-instagram{

size:70%;
height: 11px;
width: 11px;
background:blue; 
color:pink;
border-radius:100%;
position:absolute;
cursor:pointer;
top:74%;
right:47%;
left:50%;
bottom:46%;
opacity:none;
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
      </div>

     

      <div class="col-md-10">
          
        <div class="content-box-large">
          <div class="panel-heading">
          
        </div>
          <div class="panel-body">

            <div class="container">
          <?php if($this->session->flashdata('upload_msg')) { ?>
          <div class="alert alert-warning alert-dismissible fade in" role="alert" id="message" style="border-margin:12px;background-color:orange"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><?php echo $this->session->flashdata('upload_msg'); ?></div>
                  <?php
                      }
                  ?>
          <!--upload code here-->
          
          <center><p><label class="upl-head" style="position:absolute;top:11%;left:38%"><u><b>UPLOAD YOUR PICTURE</b></u></label></p></left></center>

       <?php echo form_open_multipart('user/doUpload');?>
    
      <input type="file" name="userfile"  height="20px" size="30px"  class="fa fa-instagram" style="size:70%;height: 11px;width: 11px;background:blue; color:pink;border-radius:100%;position:absolute;cursor:pointer;top:74%;right:47%;left:50%;bottom:46%;opacity:none">

    </br>
  </br>
   
<!-- <p class="upl"><?php //echo anchor('upload', 'Upload Your Profile Picture'); ?></p> -->

    <div><br><p><input type="submit" value="UPLOAD" name="upload" class="button"></p></br></div>
    </form>
   <center><img src="<?php echo base_url('/'); ?>/public/pics/<?php echo $imgpath->image_path; ?>" class="circle" style="text-align:center;height:120px;width:120px;border-radius:0%;position:absolute;right:50%;top:23%" ></center>
   
          <!--end  of upload code-->
    
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