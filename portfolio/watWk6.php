<!DOCTYPE html>
<html>
<head>
	<title>Add Customers</title>
</head>
<body>

	<?php
	if(isset($_POST['submit']))
	{

		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$gender=$_POST['gender'];
		$age=$_POST['age'];

		//Making Statement for query
		$stmt="INSERT INTO Customer(FirstName, LastName, Email, Password, Gender, Age) VALUES ('$firstname', '$lastname', '$email', '$password', '$gender' , '$age')";

		//Making Query
		$qry=mysqli_query($conn, $stmt);

		if($qry)
		{
			echo "Data Added Successfully";
		}

		else
		{
			echo "<br/>";
		}
		echo  $stmt;
	}
	?>
 	<form method="POST" action="" ecntype="multipart/form-data">
 		<fieldset>
 			<legend>Add Customer</legend>

 			<table border=0 Cellpadding=5 cellspacing=5>
 				<tr>
 					<td>FirstName</td>
 					<td><input type="text" name="firstname" /></td>
 				</tr>

 				<tr>
 					<td>LastName</td>
 					<td><input type="text" name="lastname" /></td>
 				</tr>
 				<tr>
 					<td>Email</td>
 					<td><input type="email" name="email" /></td>
 				</tr>

 				<tr>
 					<td>Password</td>
 					<td><input type="password" name="password" /></td>
 				</tr>
 				<tr>
 					<td>Gender</td>
 					<td><select name="gender">
 						<option value="M">Male</option>
 						<option value="F">Female</option>
 					</select>
 				</td>
 				</tr>

 				<tr>
 					<td>Age</td>
 					<td><input type="number" name="age" /></td>
 				</tr>
 				<tr>
 					<td></td>
 						<td>
 							<input type="submit" name="submit" value="Add">
 						</td>
 					</tr>
 			</table>
 	</form>
</body>
</html>
<?php
include ('selectRecord.php');
?><br>

