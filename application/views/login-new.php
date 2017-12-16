<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login-ITOBUZ-EMS.com</title>
  <!-- CORE CSS-->
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/materialize.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/login.css">


  
</head>

<body class="red">


  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
        <?php


          $attributes = array('class' => 'email', 'id' => 'myform');
          echo form_open('user/authentication', $attributes);

          ?>  
        <div class="row">
          <div class="input-field col s12 center">
            <img src="<?php echo base_url('/'); ?>public/pics/itobuz.png" alt="" class="responsive-img valign profile-image-login">
            <?php 

              if($this->session->flashdata('login_error'))
              {

            ?>
                
                <p class="center login-form-text">

                 <div class="alert">
                 <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                 <strong>Error : </strong><?php echo  $this->session->flashdata('login_error'); ?>
                 </div>
                  
                </p>
                <?php
                
            }
            ?>

          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <?php

            $data = array(
              'name'          => 'username',
              'id'            => 'username',
              'maxlength'     => '100',
              'class'         => 'validate'
            );

            echo form_input($data);
            ?>
            <label for="email" data-error="wrong" data-success="" class="center-align">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <?php

                 $data = array(
                  'name'          => 'password',
                  'id'            => 'password',
                  'maxlength'     => '100',
                  'class'         => 'form-control'
                );

             echo form_password($data);
             ?>
            <label for="password">Password</label>
          </div>
        </div>
       
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light col s12">Login</button>
          </div>
        </div>

      </form>
    </div>
  </div>




  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
 <script src="<?php echo base_url(); ?>public/js/jquery.js"></script>
  <!--materialize js-->
  <script src="<?php echo base_url(); ?>public/js/materialize.js"></script>

 


   <footer class="page-footer">
          <div class="footer-copyright">
            <div class="container">
            © 2017 itobuz.com
            <a class="grey-text text-lighten-4 right" href="">Itobuz</a>
            </div>
          </div>
  </footer>
</body>

</html>