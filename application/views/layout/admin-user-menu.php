<li class="submenu">
                         <a href="#">
                            <i class="fa fa-users"></i> Team <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="<?php echo base_url('team/showTeam'); ?>"><i class="fa fa-list"></i> Teams </a></li>
                            <li><a href="<?php echo base_url('team/insertTeam'); ?>"><i class="fa fa-plus" aria-hidden="true"></i>Add Team</a></li>
                        </ul>
                    </li>
                    <li class='submenu'>
                      <a href="#">
                        <i class="fa fa-id-badge"></i>Role<span class="caret pull-right"></span>
                      </a>
                     <!--Sub menu-->
                    <ul>
                            <li><a href="<?php echo base_url('role/showRole'); ?>"><i class="fa fa-list"></i> Roles </a></li>
                            <li><a href="<?php echo base_url('role/insertRole'); ?>"><i class="fa fa-plus" aria-hidden="true"></i>Add Role</a></li>
                    </ul>
                  </li>
                     <li class='submenu'>
                      <a href="#">
                        <i class="fa fa-user-circle"></i>User<span class="caret pull-right"></span>
                      </a>
                      <!--Sub-menu-->
                      <!--Sub menu-->
                      <ul>
                            <li><a href="<?php echo base_url('user/showUserData'); ?>"><i class="fa fa-list"></i> Show Users </a></li>
                  
                            <li><a href="<?php echo base_url('user/register'); ?>"><i class="fa fa-plus-circle"></i> Register User </a></li>
                  
                      </ul>
                  </li>