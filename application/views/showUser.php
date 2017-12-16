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
					<div class="panel-title">USER TABLE</div>
				</div>
  				<div class="panel-body">

            <?php if($this->session->flashdata('insert_msg'))

            {

             ?>

             <div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><?php echo $this->session->flashdata('insert_msg'); ?></div>
                  <?php
                      }
                  ?>


            <?php if($this->session->flashdata('update_msg')) { ?>

              <div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><?php echo $this->session->flashdata('update_msg'); ?></div>
                  <?php
                      }
                  ?>

            <?php if($this->session->flashdata('delete_msg')){ ?>

            <div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><?php echo $this->session->flashdata('delete_msg'); ?></div>
                  <?php
                      }
                  ?>

            <?php if($this->session->flashdata('email_msg')){ ?>

            <div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><?php echo $this->session->flashdata('email_msg'); ?></div>
                  <?php
                      }
                  ?>
                  <?php if($this->session->flashdata('error_email_msg')){ ?>

                <div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><?php echo $this->session->flashdata('error_email_msg'); ?></div>
                  <?php
                      }
                  ?>


  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>ID</th>
								<th>FULL-NAME</th>
                <th>PHONE</th>
                <th>ADDRESS</th>
                <th>EMAIL</th>
                <th>TEAM NAME</th>
                <th>ROLE NAME</th>
								<th>ACTION</th>
							</tr>
						</thead>
						<tbody>
                        <?php 

                            
                               foreach($row as $value) 
                               { 
                        ?>
                        <tr>

                          <td><?php echo $value->id; ?></td>
                          <td><?php echo $value->fullname; ?></td>
                          <td><?php echo $value->phone; ?></td>
                          <td><?php echo $value->address; ?></td>
                          <td><?php echo $value->email; ?></td>
                          <td><?php echo ucwords($value->team_name); ?></td>
                          <td><?php echo ucwords($value->role_name); ?></td>
                           <td><a href="<?php echo base_url('user/viewUserData/').$value->id; ?>">
                              <i class=" fa fa-eye" aria-hidden="true"></i>
                               </a>

                            <a href="<?php echo base_url('user/updateUserData/').$value->id; ?>"> 
                            <i class="fa fa-edit" aria-hidden="true"></i>
                          </a>
                            <a href="<?php echo base_url('user/deleteUser/').$value->id; ?>" class="del-user" data-id="#">
                            <i class="fa fa-trash" aria-hidden="true"  name="delete"></i>
                          </a>
                        </td>
                           </tr>

                            <?php } ?>
                        
                      </tbody>
					</table>
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