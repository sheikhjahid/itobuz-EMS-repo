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
  input[type=submit] {

    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
  }

  .wrapper{
    text-align: left;
  }



  .btn-default
  {
    top: 85%;
    left:75%;
    position:absolute;

  }

  .form-top{

    text-align:center;
    position:absolute;
    top:2%;
    left:18%;
    right:9%;
  }
  .fullname
  {

    position:absolute;
    right:78%;
    top:28%;
  }
  #form-fullname
  {
    position:absolute;
    right:24.5%;
    top:27%;
    width:237px;
  }

  .email
  {
    position:absolute;
    bottom:52%;
    left:12%;
  }
  #form-email
  {
    position:absolute;
    bottom:52%;
    left:31%;
    width:237px;
  }

  .drop1{

    background-color:white;
    width:180px;
    height:40px;
    border-radius:5px;
    position:absolute;
    right:35%;
    bottom:17%;
    top:55%;

  }

  .team
  {

    position:absolute;
    bottom:37%;
    right:77%;

  }
  .role
  {
    position:absolute;
    left:4%;
    bottom:22%;
  }

  .drop2
  {
    background-color:white;
    border-radius:5px;
    width:180px;
    height:40px;
    position:absolute;
    left:31%;
    bottom:21%;
  }

  #register{

    width:180px;
    right:32%;
    bottom:5%;
    position:absolute;
    background-color:green;
  }


  .col-sm-5{
    font-size:17px;
    background-color: white;
    text-align:center;
    position:absolute;
    right:60%;
    left:25%;
    top:98%;
    width:530px;

    border:1px groove;
    padding-right:0px;
    padding-top:0px;
    padding-top:0px;
    padding-left:0px;
    padding-bottom:0px;
  }


  .drop{

    background-color:grey;
    border:none;
    width:180px;
    height:40px;
    border-radius:5px;
    position:absolute;
    right:55%;

  }



  p.groove
  {
    border-style:groove;
  }

  .btn-group
  {

    text-align:center;
    position:absolute;
    bottom:23%;
    right:29%;
    left:-201%;

  }

  .symbol
  {

    width:75px;
    position:absolute;
    right:45%;

  }  

  .sign
  {
    position:absolute;
    right:34%;
    top:47%;
  }
  .foot
  {
    background-color:red; 
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




           <div class="col-sm-5 form-box"></p>
           </br>
         </br>
         <div class="form-top">
          <div class="form-top-left">


          </br>
        </br>
      </br>
      <h3 class="sign"><b><u><center>Sign Up Form</center></u></b></h3>

    </div>

  </div>

  <div class="form-bottom">
    <form role="form" action="<?php echo base_url('user/register'); ?>" method="post" class="registration-form">
    </br>
  </br>
</br>
</br>
</br>
</br>
<div class="form-group">
 <!--  <label class="sr-only" for="form-full-name">Full Name</label> -->
 <label class="fullname">FullName : </label> <input type="text" name="fullname" placeholder="Enter your fullname here" class="form-fullname form-control" id="form-fullname">
</div>
<div class="form-group">
</br>
<label class="email">Email : </label> <input type="text" name="email" placeholder="Enter your email here" class="form-email form-control" id="form-email">
</div>
</br>
</br>

<div class="form-group">
  <label class="team">Select Team : </label><select name="team_id" class="drop1">
    <option value="0">Select Team</option>
    <?php foreach($team_list as $t){ ?>
    <option value="<?php echo $t->id; ?>">
      <?php echo ucwords($t->name); ?>
    </option>

    <?php } ?>
  </select>

</div>

</br>
</br>

<div class="form-group">
  <label class="role">Select Role : </label><select name="role_id" class="drop2">
    <option value="0">Select Role</option>
    <?php foreach($role_list as $r){ ?>
    <option value="<?php echo $r->id; ?>">
      <?php echo ucwords($r->name); ?>
    </option>

    <?php } ?>
  </select>

</div>

<div>
  <button type="submit" class="btn" id="register"> Register 
    <i class="fa fa-arrow-right" aria-hidden="true"> </i>
  </button>

</div>


</br>
</br>
<!-- <?php  //echo $password; ?> -->
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
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<footer>
 <div class="container">

  <div class="copy text-center">
   Copyright 2014 <a href='#'>Website</a>
 </div>

</div>

</footer>
</div>
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