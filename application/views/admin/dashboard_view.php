<html>
	<head>
		<title>Admin - Dashboard</title>

	    <!-- Bootstrap CSS -->
	    <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>"  rel="stylesheet" />

	    <!-- jQuery -->
	    <link href="<?php echo base_url("assets/js/jquery.min.js"); ?>"  rel="stylesheet" />

	    <!-- Javascript -->
	    <link href="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"  rel="stylesheet" />
	</head>
	<body>

		
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Fourth Shift</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="<?php echo base_url();?>index.php/admin_adduser_controller/index">Add User</a></li>
					<li><a href="<?php echo base_url();?>index.php/admin_modifyuser_controller/index">Modify User</a></li> 
					<li><a href="<?php echo base_url();?>index.php/admin_deleteuser_controller/index">Remove User</a></li> 
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			</div>
		</nav>

		<div class="jumbotron text-center">
			<h2>Welcome Admin</h2>
			<img src="<?php echo base_url("public/img/avatar.jpg"); ?>" class="img-rounded" alt="Avatar" width="304" height="236">  
			<br />
			<br />
			<div class="form-inline">
				<?php echo form_open('admin_searchuser_controller/search_user'); ?>
					<input id="searchuser" name="searchuser"type="text" class="form-control" size="50" placeholder="Search Employee" required>
					<button type="submit" name="submit" value="Submit">Search</button>
				<?php echo form_close(); ?>
			</div>
		</div>

		<div id="about" class="container-fluid">
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<h2>Lorem ipsum	dolor</h2><br>
					<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
		</div>
	</body>
</html>