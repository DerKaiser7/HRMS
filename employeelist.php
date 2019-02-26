<?php
	include_once 'includes/hrms.inc.php';

	$sql = "SELECT * FROM users";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)) {
		$users[] =  array('id' => $row['employee_id'], 'fname' => $row['firstname'], 'lname' => $row['lastname'], 'jobrole' => $row['jobrole']);
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
		      <th scope="col">Edit Staff Details</th>
		    </tr>
	  	</thead>
	  	<tbody>
	  		<?php foreach ($users as $user):?>
		    <tr>
		    	<th scope="row"> <?= $user['id']; ?> </th>
		      	<td> <?= $user['fname'];?> </td>
		   		<td> <?= $user['lname'];?> </td>
		   		<td> <?= $user['jobrole'];?> </td>
		   		<td><a href="<?php echo 'updatestaff.php?id='.$user['id'] ?>">Update</a>||<a href="">Delete</a></td>
		   	</tr>
			<?php endforeach; ?>	   
	  	</tbody>
	</table>
<footer>
	<div class="pagefooter">
		<div class="row">
			<div class="col-lg-12">
				<a href="">Techland</a> - Copyright ©2019 
				<a href="https://facebook.com/stephenjohnson01" target="_blank">Falodu Stephen Abimbola</a>. All rights reserved
			</div>
		</div>
	</div>
</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>