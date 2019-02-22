<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome!</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
      body{
      padding-top: 3.5rem;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      b{
      	color: green;
      }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	  	<a class="navbar-brand" href="#">Admin</a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  	</button>

	  	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
	    	<ul class="navbar-nav mr-auto">
	      		<li class="nav-item active">
	        		<a class="nav-link" href="includes/adminlogout.inc.php">Logout</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
	      		</li>
	      		<li class="nav-item dropdown">
	        		<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tools</a>
	        		<div class="dropdown-menu" aria-labelledby="dropdown01">
			          <a class="dropdown-item" target="_blank" href="addemployee.php">Add Employee</a>
			          <a class="dropdown-item" href="employeelist.php">View Employee list</a>
			        </div>
	      		</li>
	    	</ul>
	    	<form class="form-inline my-2 my-lg-0">
	      		<input class="form-control mr-sm-2" type="text" placeholder="Search Employees" aria-label="Search">
	      		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    	</form>
	  	</div>
	</nav>

	<main role="main">
  		<div class="jumbotron">
    		<div class="container">
      			<h1 class="display-3">Welcome	
      				<?php
						if(isset($_SESSION['uid'])) {
							echo  "<b>".$_SESSION['uid']."</b>";
							} else {
						header('Location: adminlogin.php' );}
					?>	
				</h1>
		      <p>This is the employee management system for Techland HQ</p>
		      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    		</div>
  		</div>

	  	<div class="container">
	    	<div class="row">
	      		<div class="col-md-6">
	        		<h2>Departments</h2>
	        		<p>View Full lists of departments here.</p>
	       			<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
	      		</div>
	      		<div class="col-md-6">
			        <h2>Managers</h2>
			        <p>Our Organisation is led by highly respected personnel in the global world. Headed by the CEO Mr. Abimbola Falodu, you can view the full list of managers here.</p>
			        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
	      		</div>
	    	</div>

	    	<hr>

	  	</div> 
	</main>
</body>

<footer class="text-center">
  <p class="mt-5 mb-3 text-muted">&copy; <a href="https://facebook.com/stephenjohnson01">Falodu Stephen Abimbola</a><br> All rights reserved 2019</p>
</footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
