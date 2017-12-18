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
  height:90px;
  width:90px;
  background-color:blue;
  border-radius:0%;
}
.name
{

  font-size:30px;
  position:absolute;
  right:82%;
}
.profile
{
  position:absolute;
  right:42%;
}
#id
{

position:absolute;
left:33%;
bottom:12320%;
}
#id1
{
  position:absolute;
  left:36%;
  bottom:12320%;
}
#phone
{
  position:absolute;
  bottom:9699%;
  left:30.4%;
}
#phone1
{
 position:absolute;
 left:36%; 
 bottom:9699%;
}
#address
{
  position:absolute;
  left:29.1%;
  bottom:6897%;
}
#address1
{
  position:absolute;
  left:36%;
  bottom:6897%;
}
#email
{
  position:absolute;
  left:31%;
  bottom:4220%;
}
#email1
{
  position:absolute;
  left:36%;
  bottom:4220%;
}
#team
{
  position:absolute;
  left:31.4%;
  bottom:1097%;  
}
#team1
{
  position:absolute;
  left:36%;
  bottom:1097%;
}
#role
{
  position:absolute;
  left:31.4%

}
#role1
{
 position:absolute;
 left:36%; 
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
          
          <!--profile code here-->

         <!--  <h2 style="text-align:center" class="profile"><b><u>User Profile Details</u></b></h2> -->

          <div class="card">
          <img src="<?php echo base_url('/'); ?>public/pics/dpadmin.jpg"   class="circle">
          <p class="name"> <?php foreach($row as $value){  echo $value->fullname;  ?> </p>
        </br>
      </br>
    </br>
  </br>

          <div class="container">
        
               
    <div class="row">
  <div class="col-md-12"> 
  
  <div class="col-md-2" id="id"><b>ID : </b></div>
    <div class="col-md-10" id="id1"><?php echo $value->id;  ?></div>
  </div>
</div>
    <div class="row">
    <div class="col-md-12">
    <div class="col-md-2" id="phone"><b> PHONE : </b></div>
    <div class="col-md-10" id="phone1"><?php echo $value->phone; ?></div>
  </div>
</div>
<div class="row">
    <div class="col-md-12">
    <div class="col-md-2" id="address"><b> ADDRESS : </b></div>
    <div class="col-md-10" id="address1"><?php echo $value->address; ?></div>
  </div>
</div>
<div class="row">
    <div class="col-md-12">
    <div class="col-md-2" id="email"><b> EMAIL : </b></div>
    <div class="col-md-10" id="email1"><?php echo $value->email; ?></div>
  </div>
</div>
<div class="row">
    <div class="col-md-12">
    <div class="col-md-2" id="team"><b> TEAM : </b></div>
    <div class="col-md-10" id="team1"><?php echo ucwords($value->team_name); ?></div>
  </div>
</div>
<div class="row">
    <div class="col-md-12">
    <div class="col-md-2" id="role"><b> ROLE : </b></div>
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