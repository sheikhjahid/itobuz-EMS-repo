
<style>

.Brand
{

width:35px;
position:absolute;
top:23%;
right:93%;
}

</style>
<div class="col-md-5">
                <div class="logo">
                   <h1><a class="navbar-brand" href="http://www.itobuz.com"><img class="Brand" src="<?php echo base_url('/') ?>public/pics/itobuz.png"></a><a href="<?php echo base_url('user/dashboard'); ?>"> ITOBUZ-EMS BLOG</a></h1>
                </div>
             </div>
             <div class="col-md-5">
                <div class="row">
                  <div class="col-lg-12">
                    <form action="<?php echo base_url('user/showSearch'); ?>" method="post">
                    <div class="input-group form">
                         <input type="text" class="form-control" placeholder="Search by fullname,phone,email.." name="keyword" >
                         <span class="input-group-btn">
                           <button class="btn btn-primary" type="submit" id="search">Search</button>
                         </span>
                       </form>
                    </div>
                  </div>
                </div>
             </div>
             
             <div class="col-md-2">
                <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                      <ul class="nav navbar-nav">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i><?php echo (trim($fullname)==''?$username:$fullname); ?> <b class="caret"></b></a>
                          <ul class="dropdown-menu animated fadeInUp">

                            <li><a href="<?php echo base_url('user/profile/').$id; ?>">Profile</a></li>
                            <li><a href="<?php echo base_url('user/logout'); ?>">Logout</a></li>
                          </ul>
                        </li>
                      </ul>
                    </nav>
                </div>
             </div>
            