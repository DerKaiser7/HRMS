<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!--Additional css for this page -->
	<link rel="stylesheet" type="text/css" href="login.css">
	<title>Admin Signup</title>
</head>
<body class="text-center">
  	<form class="form-signin" action="includes/adminsignup.inc.php" method="POST">
  		<h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
  		<label for="inputEmail" class="sr-only">Email Address</label>
		<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email Address">
	  	<label for="inputuid" class="sr-only">Username</label>
		<input type="text" name="uid" id="inputuid" class="form-control" placeholder="Username">
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password">
  	  	<button class="btn btn-lg btn-success btn-block" name="adminsignup-submit" type="submit">Sign up</button>
 	  	<p class="mt-5 mb-3 text-muted">&copy; <a href="https://facebook.com/stephenjohnson01" target="_blank">Falodu Stephen Abimbola</a><br> All rights reserved 2019</p>
 	</form>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>