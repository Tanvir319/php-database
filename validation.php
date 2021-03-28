<!DOCTYPE html>
<html>
<head>
	<title>Insertion</title>
</head>
<body>

	<h1>Database Insertion</h1>

	<?php
       
       session_start();
       
       $host = 'localhost';
       $user = 'moon07';
       $pass = '13579m';
       $db   =  'wlab';

       $conn1 = new mysqli($host, $user, $pass, $db);

       if($conn1->connect_error) {
		echo "Database Connection Failed!";
		echo "<br>";
		echo $conn1->connect_error;
	}
	else {
		echo "Database Connection Successful!";
  
       $stmt1 = $conn1->prepare("insert into user (name, pwd) VALUES (?, ?)");
		$stmt1->bind_param("ss", $p1, $p2);
		$p1 = $_POST['name'];
		$p2 = $_POST['pwd'];
		$status = $stmt1->execute();

		if($status==1) {
			header('location:home.php');
		}
		 {
		  header('location:login.php');
		}
	}

		$conn1->close();

	?>

</body>
</html>