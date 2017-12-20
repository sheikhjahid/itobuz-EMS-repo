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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
   <style>
 .circle
 {
  text-align:center;
  height:120px;
  width:120px;
  border-radius:100%;
  position:absolute;
  right:50%;
  top:23%;
 }
 .fa-instagram{

size:70%;
height: 11px;
width: 11px;
background:blue; 
color:pink;
border-radius:100%;
position:absolute;
cursor:pointer;
top:50%;
right:47%;
left:49.5%;
bottom:45%;
opacity:1.0;
}
.button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 2px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width:18%;
    font-size: 18px;
    position:absolute;
    bottom:23%;
    left:37%;
}
.upl
{
  position:absolute;
  left:38%;
  bottom:77%;
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
          
        </div>
          <div class="panel-body">

            <div class="container">
          <?php if($this->session->flashdata('upload_msg')) { ?>
          <div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><?php echo $this->session->flashdata('upload_msg'); ?></div>
                  <?php
                      }
                  ?>
          <!--upload code here-->
            
       <?php echo form_open_multipart('user/doUpload');?>
    
      <input type="file" name="userfile"  height="20px" size="30px"  class="fa fa-instagram">
    </br>
  </br>
   
<p class="upl"><?php echo anchor('upload', 'Upload Your Profile Picture'); ?></p>
    <br><p><input type="submit" value="UPLOAD" name="upload" class="button"></p></br>
    </form>
    <?php foreach($row as $value){ ?>
   <center><img src="<?php echo $value->$profile_image;?>" class="circle" ></img></center>
   <?php } ?>
   </br>
   </br>
   </br>
   </br>
   </br>
   </br>
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