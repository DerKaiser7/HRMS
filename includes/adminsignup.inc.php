<?php

	require 'hrms.inc.php';

if (isset($_POST['adminsignup-submit'])) {
	
	$email = $_POST['email'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	

	//error handlers
	//check for empty fields
	if (empty($uid) || empty($pwd) || empty($email)) {
		header("Location: ../adminsignup.php?signup=empty");
		exit();
	} else{
			//check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../adminsignup.php?signup=invalidemail");
				exit();			
			} else {
			$sql = "SELECT user_uid FROM admins WHERE user_uid=?;";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)){
				header("Location: ../adminsignup.php?signup=sqlerror");
				exit();	
			}

			else {
		      mysqli_stmt_bind_param($stmt, "s", $uid);
		      mysqli_stmt_execute($stmt);
		      mysqli_stmt_store_result($stmt);
		      $resultCount = mysqli_stmt_num_rows($stmt);
		      mysqli_stmt_close($stmt);
		      if ($resultCount > 0) {
		        header("Location: ../adminsignup.php?error=usertaken&mail=".$email);
		        exit();
		    }
		    else {
		        $sql = "INSERT INTO admins (user_email, user_uid, user_pwd) VALUES (?, ?, ?);";
		        $stmt = mysqli_stmt_init($conn);
		        if (!mysqli_stmt_prepare($stmt, $sql)) {
		          // If there is an error we send the user back to the signup page.
		          header("Location: ../adminsignup.php?error=structure-error");
		          exit();
		        }
		         else {
		          $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
		          mysqli_stmt_bind_param($stmt, "sss", $email, $uid, $hashedPwd);
		          mysqli_stmt_execute($stmt);

		          // Lastly we send the user back to the signup page with a success message!
		          header("Location: ../index.php?signup=success");
		          exit();
		      		}
	 			}

			} 
		}
	 mysqli_stmt_close($stmt);
 	 mysqli_close($conn);

 }
} else{
	header("Location: ../adminsignup.php");
	exit();
	}