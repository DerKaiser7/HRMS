<?php
	require 'hrms.inc.php';

if (isset($_POST['login-submit'])) {
	

	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	//Error handlers
	//Check if inputs are empty
	if (empty($uid) || empty($pwd)) {
		header("Location: ../index.php?login=empty");
		exit(); 
}	else {
		$sql = "SELECT * FROM admins WHERE user_uid=?;";
		$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
      exit();
    }	
    else {
    	mysqli_stmt_bind_param($stmt, "s", $uid);
    	mysqli_stmt_execute($stmt);
    	$result = mysqli_stmt_get_result($stmt);
    	if ($row = mysqli_fetch_assoc($result)) {
			$pwdCheck = password_verify($pwd, $row['user_pwd']);
			
        // If they don't match then we create an error message!
        if ($pwdCheck == false) {
          // If there is an error we send the user back to the signup page.
          header("Location: ../index.php?error=wrongpwd");
          exit();
    	}
	 	elseif ($pwdCheck == true) {
				session_start();
				$_SESSION['id'] = $row['id'];
				$_SESSION['uid'] = $row['user_uid'];
				header("Location: ../landingpage.php?login=success");
				exit();
				}
			}
		}
	}
		mysqli_stmt_close($stmt);
		mysqli_close($conn);

	}
	 else {
	header("Location: ../index.php");
	exit();
}
