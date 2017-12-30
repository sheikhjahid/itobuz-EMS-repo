<div class="sidebar content-box" style="display: block;">
	<ul class="nav">
		<!-- Main menu -->
		<li class="current">
			<a href="<?php echo base_url('user/dashboard'); ?>">
				<i class="glyphicon glyphicon-home"></i>Dashboard</a>
			</li>

			<?php 
			if($role_id==1)
			{
				require_once 'admin-user-menu.php';
			}
			?>

			<li class="submenu">
				<a href="#">
					<i class="fa fa-user">

					</i>Profile<span class="caret pull-right"></span></a>
					<ul>	
						<li class="current">
							<a href="<?php echo base_url('user/updateUserData/').$id;?>">
								<i class="fa fa-pencil"></i> Update Profile</a>
						</li>

							<li class="current">
								<a href="<?php echo base_url('user/UploadPage'); ?>">
									<i class="fa fa-camera"></i>Upload Photo</a>
								</li>
							</ul>
						</li>

						<li class="submenu">
							<a href="#">
								<i class="fa fa-bed"></i>
								Leave
								<span class="caret pull-right"></span>
							</a>
							<ul>
								<li class="current">
									<a href="<?php echo base_url('user/LeaveApp'); ?>">
										<i class="fa fa-pencil"></i>
										Apply
									</a>
								</li>
								<?php if($role_id==1 || $role_id==7 || $role_id==9 || $role_id==10)
								{
								 ?>
								
								<li class="current">
									<a href="<?php echo  base_url('user/showLeaveList'); ?>">
										<i class="fa fa-list"></i>
										List
									</a>
								</li>
								<?php } ?>
							</ul>
						</li>

						<li class="current">
							<a href="<?php echo base_url('logout'); ?>">
								<i class="glyphicon glyphicon-log-out"></i> Logout</a>
							</li>
						</ul>
					</div>