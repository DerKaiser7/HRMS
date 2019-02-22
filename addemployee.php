<?php
	include_once 'includes/hrms.inc.php';

	$manager = "";
	$department = "";

	$sql = "SELECT * FROM hods";
	$result = mysqli_query($conn, $sql);

	if ($row = mysqli_fetch_assoc($result)) {
		$managers[] =  array('id' => $row['manager_id'], 'name' => $row['managername']);
		$departments[] = array('id1' => $row['dept_id'], 'name1' => $row['deptname']);
		foreach ($result as $row) {
			$managers[] =  array('id' => $row['manager_id'], 'name' => $row['managername']);
		}
		foreach ($result as $row) {
			$departments[] = array('id1' => $row['dept_id'], 'name1' => $row['deptname']);
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Add Employee</title>
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
						<input type="text" name="first" class="form-control" placeholder="Enter your First Name here">
					</div>
					<div class="form-group col-md-6">
						<label for="lastname">Last Name</label>
						<input type="text" name="last" class="form-control" placeholder="Enter your Last Name here">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="email">E-mail</label>
						<input type="email" name="email" class="form-control" placeholder="Enter employee E-mail address here">
					</div>
					<div class="form-group col-md-6">
						<label for="phonenumber">Phone Number</label>
						<input type="text" name="phone" class="form-control" placeholder="Enter your Phone Number here">
					</div>
				</div>
				<div class="form-group">
				    <label for="inputAddress">Hire Date</label>
				    <input type="date" name="date" class="form-control" placeholder="YYYY-MM-DD">
  				</div>
  				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="dept">Department</label>
						<select name="dept" class="form-control">
							<option value="select">Choose...</option>
							
							<?php foreach ($departments as $dept):?>
								<option value="<?= $dept['id1'] ?>"> <?= $dept['name1'] ?> </option>
							<?php endforeach; ?>

						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="manager">Manager</label>
						<select name="mgr" class="form-control">
							<option value="select">Choose...</option>

							<?php foreach ($managers as $manager):?>
								<option value="<?= $manager['id'] ?>"> <?= $manager['name'] ?> </option>
							<?php endforeach; ?>

						</select>	
					</div>
				</div>
  				<div class="form-row">
  					<div class="form-group col-md-6">
						<label for="commission">Commission</label>
						<input type="text" name="salarycomm" class="form-control" placeholder="Commission">
					</div>
					<div class="form-group col-md-6">
						<label for="salary">Salary</label>
						<input type="text" name="salary" class="form-control" placeholder="Salary">
					</div>
				</div>
				<div class="form-group">
				    <label for="jobid">Role</label>
				    <input type="text" name="jobid" class="form-control" placeholder="Role">
  				</div>
				<button type="submit" name="signup-submit" class="btn btn-primary">Submit</button>
			</form>
		</div>

	

<footer>
	<p class="mt-5 mb-3 text-muted">&copy; <a href="https://facebook.com/stephenjohnson01">Falodu Stephen Abimbola</a><br> All rights reserved 2019</p>
</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>