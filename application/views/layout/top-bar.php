<div class="col-md-5">
                <div class="logo">
                   <h1><a href="<?php echo base_url('user/dashboard'); ?>">ITOBUZ-EMS BLOG</a></h1>
                </div>
             </div>
             <div class="col-md-5">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="input-group form">
                         <input type="text" class="form-control" placeholder="Search...">
                         <span class="input-group-btn">
                           <button class="btn btn-primary" type="button">Search</button>
                         </span>
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
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="<?php echo base_url('user/logout'); ?>">Logout</a></li>
                          </ul>
                        </li>
                      </ul>
                    </nav>
                </div>
             </div>