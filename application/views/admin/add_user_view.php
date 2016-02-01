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
		<label class="description" for="element_1">First Name </label>
		<div>
			<input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Last Name </label>
		<div>
			<input id="element_5" name="element_5" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_6" >
		<label class="description" for="element_6">Street Address </label>
		<div>
			<input id="element_6" name="element_6" class="element text large" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_7" >
		<label class="description" for="element_7">City </label>
		<div>
			<input id="element_7" name="element_7" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_8" >
		<label class="description" for="element_8">Zip Code </label>
		<div>
			<input id="element_8" name="element_8" class="element text small" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_14" >
		<label class="description" for="element_14">Gender </label>
		<span>
			<input id="element_14_1" name="element_14" class="element radio" type="radio" value="1" />
			<label class="choice" for="element_14_1">Male</label>
			<input id="element_14_2" name="element_14" class="element radio" type="radio" value="2" />
			<label class="choice" for="element_14_2">Female</label>

		</span> 
		</li>		<li id="li_15" >
		<label class="description" for="element_15">Civil Status </label>
		<span>
			<input id="element_15_1" name="element_15" class="element radio" type="radio" value="1" />
			<label class="choice" for="element_15_1">Single</label>
			<input id="element_15_2" name="element_15" class="element radio" type="radio" value="2" />
			<label class="choice" for="element_15_2">Married</label>
			<input id="element_15_3" name="element_15" class="element radio" type="radio" value="3" />
			<label class="choice" for="element_15_3">Divorced</label>
			<input id="element_15_4" name="element_15" class="element radio" type="radio" value="4" />
			<label class="choice" for="element_15_4">Separated</label>
			<input id="element_15_5" name="element_15" class="element radio" type="radio" value="5" />
			<label class="choice" for="element_15_5">Widowed</label>

		</span> 
		</li>		<li id="li_12" >
		<label class="description" for="element_12">BirthDate </label>
		<span>
			<input id="element_12_1" name="element_12_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_12_1">MM</label>
		</span>
		<span>
			<input id="element_12_2" name="element_12_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_12_2">DD</label>
		</span>
		<span>
	 		<input id="element_12_3" name="element_12_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_12_3">YYYY</label>
		</span>
	
		<span id="calendar_12">
			<img id="cal_img_12" class="datepicker" src="<?php echo base_url('assets/images/calendar.gif');?>" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_12_3",
			baseField    : "element_12",
			displayArea  : "calendar_12",
			button		 : "cal_img_12",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="li_10" >
		<label class="description" for="element_10">Email </label>
		<div>
			<input id="element_10" name="element_10" class="element text large" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_11" >
		<label class="description" for="element_11">Password </label>
		<div>
			<input id="element_11" name="element_11" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_13" >
		<label class="description" for="element_13">Date Hired </label>
		<span>
			<input id="element_13_1" name="element_13_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_13_1">MM</label>
		</span>
		<span>
			<input id="element_13_2" name="element_13_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_13_2">DD</label>
		</span>
		<span>
	 		<input id="element_13_3" name="element_13_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_13_3">YYYY</label>
		</span>
	
		<span id="calendar_13">
			<img id="cal_img_13" class="datepicker" src="<?php echo base_url('assets/images/calendar.gif');?>" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_13_3",
			baseField    : "element_13",
			displayArea  : "calendar_13",
			button		 : "cal_img_13",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="li_16" >
		<label class="description" for="element_16">Drop Down </label>
		<div>
		<select class="element select medium" id="element_16" name="element_16"> 
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