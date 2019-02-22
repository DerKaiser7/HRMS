<?php
	include_once 'includes/hrms.inc.php';

	$first = "";
	$last = "";
	$role = "";

	$sql = "SELECT * FROM users";
	$result = mysqli_query($conn, $sql);

	if ($row = mysqli_fetch_assoc($result)) {
		$firsts[] =  array('id' => $row['employee_id'], 'name' => $row['firstname']);
		$lasts[] = array('id1' => $row['employee_id'], 'name1' => $row['lastname']);
		$roles[] = array('id2' => $row['dept_id'], 'name2' => $row['jobrole']);
		foreach ($result as $row) {
			$firsts[] =  array('id' => $row['employee_id'], 'name' => $row['firstname']);
		}
		foreach ($result as $row) {
			$lasts[] = array('id1' => $row['employee_id'], 'name1' => $row['lastname']);
		}
		foreach ($result as $row) {
			$roles[] = array('id2' => $row['dept_id'], 'name2' => $row['jobrole']);
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Employee Management System</title>
	<style type="text/css">
		body{
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="jumbotron">
		<div class="container">
			<h1>Employee List</h1>
		</div>
	</div>
	<table class="table table-bordered">
		<thead class="thead-dark">
		    <tr>
		      <th scope="col">S/N</th>
		      <th scope="col">First Name</th>
		      <th scope="col">Last Name</th>
		      <th scope="col">Role</th>
		    </tr>
	  	</thead>
	  	<tbody>
		    <tr>
		    	<th scope="row">
		      		<?php foreach ($firsts as $first):?>
						 <?= $first['id'] ?> 
					<?php endforeach; ?>
			  	</th>
		      	<td>
		      		<?php foreach ($firsts as $first):?>
						 <?= $first['name'] ?> 
					<?php endforeach; ?>
		      	</td>
		      	<td>
		      		<?php foreach ($lasts as $last):?>
						 <?= $last['name1'] ?> 
					<?php endforeach; ?>
		      	</td>
		      	<td>
		      		<?php foreach ($roles as $role):?>
						 <?= $role['name2'] ?> 
					<?php endforeach; ?>
		      	</td>
		    </tr>
	  	</tbody>
	</table>
<footer>
	<div class="pagefooter">
		<div class="row">
			<div class="col-lg-12">
				<a href="">Techland</a> - Copyright ©2019 
				<a href="https://facebook.com/stephenjohnson01">Falodu Stephen Abimbola</a>. All rights reserved
			</div>
		</div>
	</div>
</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>