<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>"  rel="stylesheet" />

    <!-- jQuery -->
    <link href="<?php echo base_url("assets/js/jquery.min.js"); ?>"  rel="stylesheet" />

    <!-- Javascript -->
    <link href="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"  rel="stylesheet" />

    <!-- Signin Custom CSS -->
    <link href="<?php echo base_url("assets/css/signin.css"); ?>"  rel="stylesheet" />

  </head>

  <body>

    <div class="container">

      <form class="form-signin">
      	<center><img src="<?php echo base_url("assets/images/logo.jpg"); ?>"></center><br/>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div>
  </body>
</html>
