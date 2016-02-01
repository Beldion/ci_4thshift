<html>
	<head>
		<title>Admin - Add User</title>

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
					<li class="active"><a href="#">Add User</a></li>
					<li><a href="#">Modify User</a></li> 
					<li><a href="#">Remove User</a></li> 
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			</div>
		</nav>

		<div class="col-sm-4"></div><!-- replace this -->
		<div class="col-sm-4">
			<h2 style="text-align: center;">Add User</h2>
			<hr />
			<form>
				<div class="form-group">
					<label for="firstname">First Name</label>
					<input type="text" class="form-control" id="firstname" placeholder="First Name">
				</div>
				<div class="form-group">
					<label for="lastname">Last Name</label>
					<input type="text" class="form-control" id="lastname" placeholder="Last Name">
				</div>
				<div class="form-group">
					<label for="emailaddress">Email Address</label>
					<input type="text" class="form-control" placeholder="email address" aria-describedby="basic-addon2">
				</div>	
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="gender">Gender</label><br>
					<label class="radio-inline"><input type="radio" name="optradio">Male</label>
					<label class="radio-inline"><input type="radio" name="optradio">Female</label>
				</div>
				<div class="form-group">
					<label for="sel1">Marital Status</label>
					<select class="form-control" id="sel1">
					<option>Single</option>
					<option>Married</option>
					<option>Windowed</option>
					<option>Seperated</option>
					</select>
				</div>
				<div class="form-group">
					<label for="gender">Complete Address</label>
				</div>
				<div class=col-xs-12>
					<input type="text" class="form-control" placeholder="Street Address" aria-describedby="basic-addon2">
				</div>
				<div class=col-xs-8>
					<input type="text" class="form-control" placeholder="City" aria-describedby="basic-addon2">
				</div>
				<div class=col-xs-4>
					<input type="text" class="form-control" placeholder="Zipcode" aria-describedby="basic-addon2">
				</div>
				<div class="form-group">
					<label for="exampleInputFile">Upload Avatar</label>
					<input type="file" id="exampleInputFile">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<div class="form-group">

		</div>


	</body>
</html>