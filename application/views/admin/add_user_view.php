<html>
	<head>
		<title>Admin - Add User</title>

	    <!-- Bootstrap CSS -->
	    <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>"  rel="stylesheet" />

	    <!-- jQuery -->
	    <link href="<?php echo base_url("assets/js/jquery.min.js"); ?>"  rel="stylesheet" />
	    <!-- Javascript -->
	    <link href="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"  rel="stylesheet" />

	    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/view.css');?>" media="all">
		<script type="text/javascript" src="<?php echo base_url('assets/js/view.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/calendar.js');?>"></script>

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

		<!--<div class="col-sm-4"></div>
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

		</div>-->
		<img id="top" src="<?php echo base_url('assets/images/top.png');?>" alt="">
	<div id="form_container">
	
		<h1><a>Add User</a></h1>
		<form id="form_1096974" class="appnitro"  method="post" action="">
		<div class="form_description">
			<h2>Add User</h2>
			<p></p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="firstname">First Name </label>
		<div>
			<input id="firstname" name="firstname" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="lastname">Last Name </label>
		<div>
			<input id="lastname" name="lastname" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_6" >
		<label class="description" for="street">Street Address </label>
		<div>
			<input id="street" name="street" class="element text large" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_7" >
		<label class="description" for="city">City </label>
		<div>
			<input id="city" name="city" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_8" >
		<label class="description" for="zipcode">Zip Code </label>
		<div>
			<input id="zipcode" name="zipcode" class="element text small" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_14" >
		<label class="description" for="gender">Gender </label>
		<span>
			<input id="gender" name="gender" class="element radio" type="radio" value="1" />
			<label class="choice" for="gender">Male</label>
			<input id="gender" name="gender" class="element radio" type="radio" value="2" />
			<label class="choice" for="gender">Female</label>

		</span> 
		</li>		<li id="li_15" >
		<label class="description" for="civil_status">Civil Status </label>
		<span>
			<input id="civil_status" name="civil_status" class="element radio" type="radio" value="1" />
			<label class="choice" for="civil_status">Single</label>
			<input id="civil_status" name="civil_status" class="element radio" type="radio" value="2" />
			<label class="choice" for="civil_status">Married</label>
			<input id="civil_status" name="civil_status" class="element radio" type="radio" value="3" />
			<label class="choice" for="civil_status">Divorced</label>
			<input id="civil_status" name="civil_status" class="element radio" type="radio" value="4" />
			<label class="choice" for="civil_status">Separated</label>
			<input id="civil_status" name="civil_status" class="element radio" type="radio" value="5" />
			<label class="choice" for="civil_status">Widowed</label>

		</span> 
		</li>		<li id="li_12" >
		<label class="description" for="firstname2">BirthDate </label>
		<span>
			<input id="firstname2_1" name="firstname2_1" class="element text" size="4" maxlength="2" value="" type="text"> /
			<label for="firstname2_1">MM</label>
		</span>
		<span>
			<input id="firstname2_2" name="firstname2_2" class="element text" size="4" maxlength="2" value="" type="text"> /
			<label for="firstname2_2">DD</label>
		</span>
		<span>
	 		<input id="firstname2_3" name="firstname2_3" class="element text" size="8" maxlength="4" value="" type="text">
			<label for="firstname2_3">YYYY</label>
		</span>
	
		<span id="calendar_12">
			<img id="cal_img_12" class="datepicker" src="<?php echo base_url('assets/images/calendar.gif');?>" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "firstname2_3",
			baseField    : "firstname2",
			displayArea  : "calendar_12",
			button		 : "cal_img_12",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="li_10" >
		<label class="description" for="email">Email </label>
		<div>
			<input id="email" name="email" class="element text large" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_11" >
		<label class="description" for="password">Password </label>
		<div>
			<input id="password" name="password" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_13" >
		<label class="description" for="firstname3">Date Hired </label>
		<span>
			<input id="firstname3_1" name="firstname3_1" class="element text" size="4" maxlength="2" value="" type="text"> /
			<label for="firstname3_1">MM</label>
		</span>
		<span>
			<input id="firstname3_2" name="firstname3_2" class="element text" size="4" maxlength="2" value="" type="text"> /
			<label for="firstname3_2">DD</label>
		</span>
		<span>
	 		<input id="firstname3_3" name="firstname3_3" class="element text" size="8" maxlength="4" value="" type="text">
			<label for="firstname3_3">YYYY</label>
		</span>
	
		<span id="calendar_13">
			<img id="cal_img_13" class="datepicker" src="<?php echo base_url('assets/images/calendar.gif');?>" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "firstname3_3",
			baseField    : "firstname3",
			displayArea  : "calendar_13",
			button		 : "cal_img_13",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="li_16" >
		<label class="description" for="firstname6">Drop Down </label>
		<div>
		<select class="element select medium" id="firstname6" name="firstname6"> 
			<option value="" selected="selected"></option>
			<option value="1" >Administrator</option>
			<option value="2" >User</option>

		</select>
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="1096974" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		
	</div>
	<!-- <img id="bottom" src="<?php echo base_url('assets/images/bottom.png');?>" alt=""> -->


	</body>
</html>