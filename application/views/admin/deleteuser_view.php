<html>
	<head>
		<title>Admin - Delete User</title>

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
					<li><a href="<?php echo base_url();?>index.php/admin_home_controller/adduser">Add User</a></li>
					<li><a href="<?php echo base_url();?>index.php/admin_modifyuser_controller/index">Modify User</a></li> 
					<li class="active"><a href="<?php echo base_url();?>index.php/admin_deleteuser_controller/index">Remove User</a></li> 
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			</div>
		</nav>

		<center>
			<div class="container">          
			  <table class="table table-striped">
			    <thead>
			      <tr>
			        <th>Firstname</th>
			        <th>Lastname</th>
			        <th>Email</th>
			        <th>Birthday</th>
			        <th>Gender</th>
			        <th>Address</th>
			        <th>Civil Status</th>
			        <th>Position</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
					<?php foreach ($record as $value) {?>
					<td>
						<?php echo $value->firstname;?>
					</td>
					<td>
						<?php echo $value->lastname;?>
					</td>
					<td>
						<?php echo $value->email;?>
					</td>
					<td>
						<?php echo $value->birthday;?>
					</td>
					<td>
						<?php echo $value->gender;?>
					</td>
					<td>
						<?php echo $value->street_address;?>
						<?php echo $value->city;?>
						<?php echo $value->zipcode;?>
					</td>
					<td>
						<?php echo $value->civil_status;?>
					</td>
					<td>
						<?php echo $value->position;?>
					</td>
					<td>
						<?php echo anchor('admin_deleteuser_controller/deleteuser'.$value->employee_id, 'Delete')?>
					</td>
				</tr>
				<?php		
					}
				?>
			    </tbody>
			  </table>
			</div>
		<table>
		
		</center>
	</body>
</html>