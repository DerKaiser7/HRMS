
<?php
	include_once 'includes/hrms.inc.php';
	$id = $_GET['id'];

	//initialize variables
	$user = null;
	$managers = array();

	//retrieve user details
	$sql = "SELECT * FROM users where employee_id=".$id;
	$result = mysqli_query($conn, $sql);

	if($row = mysqli_fetch_assoc($result)) {
		$user =  $row;
	}

	//retrieve hods and departments
	$sql = "SELECT * FROM hods";
	$result = mysqli_query($conn, $sql);

	while($row = mysqli_fetch_assoc($result)) {
		$managers[] =  array(
			'id' => $row['manager_id'], 
			'name' => $row['managername'], 
			'deptname' => $row['deptname'], 
			'dept_id' => $row['dept_id'],
		);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Update Employee</title>
	<style type="text/css">
		body{
			background-color: #E8ECE0;
		}
		h1, p, .pagefooter{
			text-align: center;
		}
		h1{
			color: green;
		}
		#heading{
			margin-top: 10px;
			padding-bottom: 25px;
		}
	</style>
</head>
<body>
	<header>
			<div class="container" id="heading">
				<h1>Please fill Employee details here</h1>
			</div>
	</header>
	<div class="container">
			<form action="includes/addemployee.inc.php" method="POST">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="firstname">First Name</label>
						<input type="text" name="first" class="form-control" placeholder="Enter your First Name here"
							value="<?php 
							echo isset($user['firstname']) ? $user['firstname'] : "";
							?>"
						>

						<input type="hidden" name="staff_id" value="<?php echo $user['employee_id'] ?>" />
					</div>
					<div class="form-group col-md-6">
						<label for="lastname">Last Name</label>
						<input type="text" name="last" class="form-control" placeholder="Enter your Last Name here"
						value="<?php 
							echo isset($user['lastname']) ? $user['lastname'] : "";
							?>"
						>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="email">E-mail</label>
						<input type="email" disabled name="email" class="form-control" placeholder="Enter employee E-mail address here"
						value="<?php 
							echo isset($user['email']) ? $user['email'] : "";
							?>"
						>
					</div>
					<div class="form-group col-md-6">
						<label for="phonenumber">Phone Number</label>
						<input type="text" name="phone" class="form-control" placeholder="Enter your Phone Number here"
						value="<?php 
							echo isset($user['phone_no']) ? $user['phone_no'] : "";
							?>"
						>
					</div>
				</div>
				<div class="form-group">
				    <label for="inputAddress">Hire Date</label>
				    <input type="date" name="date" class="form-control" placeholder="YYYY-MM-DD"
					value="<?php 
							echo isset($user['hire_date']) ? $user['hire_date'] : "";
							?>"
					>
  				</div>
  				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="dept">Department</label>
						<select name="dept" class="form-control">
							<option value="select">Choose...</option>
							
							<?php foreach ($managers as $dept):?>
								<option value="<?= $dept['dept_id'] ?>" 

								<?php echo ($dept['dept_id'] == $user['dept_id']) ? "selected" : "";?>

								> <?= $dept['deptname'] ?> </option>
							<?php endforeach; ?>

						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="manager">Manager</label>
						<select name="mgr" class="form-control">
							<option value="select">Choose...</option>

							<?php foreach ($managers as $manager):?>
								<option value="<?= $manager['id'] ?>" 

								<?php echo ($manager['id'] == $user['manager_id']) ? "selected" : ""; ?>

								> <?= $manager['name'] ?> </option>
							<?php endforeach; ?>

						</select>	
					</div>
				</div>
  				<div class="form-row">
  					<div class="form-group col-md-6">
						<label for="commission">Commission</label>
						<input type="text" name="salarycomm" class="form-control" placeholder="Commission" 
						value="<?php 
							echo isset($user['commission']) ? $user['commission'] : "";
							?>">
					</div>
					<div class="form-group col-md-6">
						<label for="salary">Salary</label>
						<input type="text" name="salary" class="form-control" placeholder="Salary" 
						value="<?php 
							echo isset($user['salary']) ? $user['salary'] : "";
							?>">
					</div>
				</div>
				<div class="form-group">
				    <label for="jobid">Role</label>
				    <input type="text" name="jobid" class="form-control" placeholder="Role" 
					value="<?php 
							echo isset($user['jobrole']) ? $user['jobrole'] : "";
							?>">
  				</div>
				<button type="submit" name="signup-submit" class="btn btn-primary">Update</button>
			</form>
		</div>

	

<footer>
	<p class="mt-5 mb-3 text-muted">&copy; <a href="https://facebook.com/stephenjohnson01" target="_blank">Falodu Stephen Abimbola</a><br> All rights reserved 2019</p>
</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>