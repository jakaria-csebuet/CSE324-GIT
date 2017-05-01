<?php
	$hn = 'localhost';
  	$db = 'Badhan';
  	$un = 'root';
  	$pw = '1234';
	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
/*
					id="name" name="name" placeholder="" type="text">
					id="id" name="id" placeholder="" type="text">
					id="hall" name="hall" placeholder="" type="text">
					id="blood" name="blood" placeholder="" type="text">
					id="date" name="date" placeholder="" type="text">
					id="area" name="area" placeholder="" type="text">
					id="email" name="email" placeholder="" type="text">
					id="phone" name="phone" placeholder="01" type="text">
					id="password" name="password" placeholder="**********" type="password">
*/
	if (isset($_POST['Signup'])) {
		if (empty($_POST['name']) || empty($_POST['id']) || empty($_POST['hall']) || empty($_POST['blood']) ||
		    empty($_POST['date']) || empty($_POST['area']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['password']))
		{
			$error = empty($_POST['name']) .",". empty($_POST['id']) .",". empty($_POST['hall']) .",". empty($_POST['blood']) .",".
		    empty($_POST['date']) .",". empty($_POST['area']) .",". empty($_POST['email']) .",". empty($_POST['phone']) .",". empty($_POST['password']);
		}
		else
		{
			// Define $username and $password
			$name=$_POST['name'];
			$id=$_POST['id'];
			$hall=$_POST['hall'];
			$blood=$_POST['blood'];
			$date=$_POST['date'];
			$area=$_POST['area'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$password=$_POST['password'];
			$conn = new mysqli($hn, $un, $pw, $db);
			if ($conn->connect_error) {
				die($conn->connect_error);
				$error = "Could not connect to database";
			}
    			else{
				$query    = "INSERT INTO SinUpReq VALUES"."('$id', '$name', '$date','$blood','$area','$hall','$password','$phone','$email')";
    				$result   = $conn->query($query);

			  	if (!$result) echo "INSERT failed: $query<br>".$conn->error . "<br><br>";
				else{
					$_SESSION['req_user']=$name; // Initializing Session
					header("location: dummy.php"); // Redirecting To Other Page

				}
			}
  			$conn->close();
		}
	}
?>
