<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="<?php echo base_url('user/dashboard'); ?>"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>

                    <?php 
                      if($role_id==1)
                      {
                        require_once 'admin-user-menu.php';
                      }
                    ?>
                    <?php 

                    if($role_id!=1)
                    {
                     ?>
                    
                    <li class="current"><a href="<?php echo base_url('user/updateUserdata/').$id; ?>"><i class="fa fa-pencil"></i> Update Profile</a></li>
                    <?php } ?>
                    <li class="current"><a href="<?php echo base_url('logout'); ?>"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                    

                </ul>
        </div>