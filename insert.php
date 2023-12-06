<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
        include_once("dp_config.php");
		$conn = mysqli_connect($servername,$username,$password,$dbname);
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$fullname = $_REQUEST['fullname'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO college VALUES ('$fullname', 
			'$username','$password','$email','$gender','$address')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>"; 

			echo nl2br("\n$fullname\n $username\n "
				. "$password\n $email\n $gender\n $address");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
