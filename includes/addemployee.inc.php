<?php

	require 'hrms.inc.php';

if (isset($_POST['signup-submit'])) {
	

	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$hiredate = $_POST['date'];
	$dept = $_POST['dept'];
	$mgr = $_POST['mgr'];
	$commission = $_POST['salarycomm'];
	$salary = $_POST['salary'];
	$jobid = $_POST['jobid'];

	//error handlers
	//check for empty fields
	if (empty($first) || empty($last) || empty($email) || empty($phone) || empty($hiredate) || empty($salary) || empty($commission) || empty($dept) || empty($mgr) || empty($jobid)) {
		header("Location: ../addemployee.php?signup=empty");
		exit();
	} else{
		//check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../addemployee.php?signup=invalid");
			exit();
		} else {
			//check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../addemployee.php?signup=invalidemail");
				exit();			
			} else {
			$sql = "SELECT email FROM users WHERE email=?;";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)){
				header("Location: ../addemployee.php?signup=sqlerror");
				exit();	
			}

			else {
		      mysqli_stmt_bind_param($stmt, "s", $email);
		      mysqli_stmt_execute($stmt);
		      mysqli_stmt_store_result($stmt);
		      $resultCount = mysqli_stmt_num_rows($stmt);
		      mysqli_stmt_close($stmt);
		      if ($resultCount > 0) {
		        header("Location: ../addemployee.php?error=usertaken&mail=".$email);
		        exit();
		    }
		    else {
		        $sql = "INSERT INTO users (firstname, lastname, email, phone_no, hire_date, dept_id, manager_id, commission, salary, jobrole) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
		        $stmt = mysqli_stmt_init($conn);
		        if (!mysqli_stmt_prepare($stmt, $sql)) {
		          // If there is an error we send the user back to the signup page.
		          header("Location: ../addemployee.php?error=structure-error");
		          exit();
		        }
		         else {
		          mysqli_stmt_bind_param($stmt, "ssssssssss", $first, $last, $email, $phone, $hiredate, $dept, $mgr, $commission, $salary, $jobid);
		          mysqli_stmt_execute($stmt);
		          header("Location: ../landingpage.php?signup=success");
		          exit();
		      		}
	 			}

			} 
		}
	}
	 mysqli_stmt_close($stmt);
 	 mysqli_close($conn);

 }
} else{
	header("Location: ../addemployee.php");
	exit();
	}