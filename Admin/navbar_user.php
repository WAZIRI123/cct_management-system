<div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
                        <!-- .nav, .navbar-search, .navbar-form, etc -->
					<ul class="nav">
					<li><a href="dashboard.php"><i class="icon-home icon-large"></i>&nbsp;Home</a></li>
					<li  class="active"><a href="users.php"><i class="icon-user icon-large"></i>&nbsp;Users</a></li>
					<?php 
					include('dropdown.php');
					?>
					<li><a href="Camera.php"><i class="icon-book icon-large"></i>&nbsp;Cameras</a></li>
					<li><a href="client.php"><i class="icon-group icon-large"></i>&nbsp;Clients</a></li>
					<li><a href="logout.php" ><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
					</ul>
					 <div class="pull-right">
						<div class="admin">Welcome</div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
		 <?php include('search_form.php'); ?>

