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
					<div class="panel-title"><b><i><u>USER TABLE</i></b></u></div>
				</div>
  				<div class="panel-body">

  					<div class="container">
        
              <h1 class="symbol"><img src="<?php echo base_url('/'); ?>public/pics/itobuz.png" style="width:97px;position:absolute;left:60%;top:30%"></h1>

      <?php foreach($data as $value) {?>            
    <div class="row">
  <div class="col-md-12"> 
  
  <div class="col-md-2"><b>ID : </b></div>
    <div class="col-md-10"><?php echo $value->id;  ?></div>
  </div>
</div>
    <div class="row">
    <div class="col-md-12">
    <div class="col-md-2"><b> FULLNAME : </b></div>
    <div class="col-md-10"><?php echo $value->fullname; ?></div>
  </div>
</div>

<div class="row">
    <div class="col-md-12">
    <div class="col-md-2"><b> PHONE : </b></div>
    <div class="col-md-10"><?php echo $value->phone; ?></div>
  </div>
</div>

<div class="row">
    <div class="col-md-12">
    <div class="col-md-2"><b> ADDRESS : </b></div>
    <div class="col-md-10"><?php echo $value->address; ?></div>
  </div>
</div>

<div class="row">
    <div class="col-md-12">
    <div class="col-md-2"><b> EMAIL : </b></div>
    <div class="col-md-10"><?php echo $value->email; ?></div>
  </div>
</div>

<div class="row">
    <div class="col-md-12">
    <div class="col-md-2"><b> TEAM-ID : </b></div>
    <div class="col-md-10"><?php echo $value->team_id; ?></div>
  </div>
</div>

<div class="row">
    <div class="col-md-12">
    <div class="col-md-2"><b> ROLE-ID : </b></div>
    <div class="col-md-10"><?php echo $value->role_id; ?></div>
  </div>
</div>
    
<?php } ?>
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