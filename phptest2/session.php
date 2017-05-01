<?php
	$hn = 'localhost';
  	$db = 'Badhan';
  	$un = 'root';
  	$pw = '1234';

//	$conn = new mysqli($hn, $un, $pw, $db);
//			if ($conn->connect_error) die($conn->connect_error);
//   		$query  = "SELECT * FROM login";
//			$result = $conn->query($query);
//			if (!$result) die($conn->error);
//			$rows = $result->num_rows;
//			$rows = $result->num_rows;
//			if ($rows == 1) {
//				$_SESSION['login_user']=$username; // Initializing Session
//				header("location: profile.php"); // Redirecting To Other Page
//			} else {
//				$error = "Username or Password is invalid";
//			}
//			mysql_close($connection); // Closing Connection

	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$conn = new mysqli($hn, $un, $pw, $db);
	// Starting Session
	session_start();
	// Storing Session
	$user_check=$_SESSION['login_user'];
	// SQL Query To Fetch Complete Information Of User
	$query  = "select Name from Donor where Id='$user_check'";
	$result = $conn->query($query);
	$result->data_seek(0);
    	$row = $result->fetch_array(MYSQLI_ASSOC);
	$login_session =$row['Name'];
	if(!isset($login_session)){
		$result->close();
  		$conn->close();
		header('Location: index.php'); // Redirecting To Home Page
	}
	else{
		$result->close();
		$conn->close();
	}
?>
