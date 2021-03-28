<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Login and Registration</title>
	<meta charset="utf-8">
</head>
<body>

	<div class="login">
		
      <form action="validation.php" method="POST">

      	<h2>Login here</h2>
      	<table>
      		<tr>
      			<td>Username:<input type="text" name="uname" placeholder="type email"></td>
      		</tr>
      	    <tr>
      	    	<td>Password:<input type="password" name="pwd" placeholder="type password"></td>
      	    </tr>
      	    <tr>
      	    	<td><input type="submit" name="submit" value="LOGIN"></td>
      	    </tr>
      	</table>
      	
      </form>

	</div>

	<div class="regi">

		<h2>Registration Here</h2>
		<form action="registration.php" method="POST">
			
			<table>
				<table>
					<tr>
						<td>Name:<input type="text" name="name" placeholder="type name"></td>
					</tr>
					<tr>
						<td>Password:<input type="password" name="pwd" placeholder="type password"></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="REGISTER"></td>
					</tr>
				</table>
			</table>


		</form>

	</div>

</body>
</html>