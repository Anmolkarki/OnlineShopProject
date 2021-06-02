<!DOCTYPE html>
<html>
<head>
	<title>List All Customers</title>
</head>
<body>
	<?php 
	include('connection.php');

	//querying data from Customer table
	//Display heading
	echo '<h2>Select ALL from the Customer Table</h2>';
	//run query to select all records from customer table
	$stmt="SELECT * FROM Customer";
	//store the result of the query in a variable called $qry
	$qry=mysqli_query($conn, $stmt);
	//Use a while loop to iterate through your $result array and display
	//the first name, last name and email for each record
	//Display heading
	while ($row=mysqli_fetch_array($qry)){
	echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br />';
}

//Display heading
echo "<h2>Select ALL from the Customer Table with Age > 22</h2>";
//run query to select all records from customer table whose age is greater than 22
$stmt = "SELECT * FROM Customer where Age > 22";
//store the result of the query in a variable called $result
$qry=mysqli_query($conn, $stmt);
//Use a while loop to iterate through your $result array and display
//the first name, last name and email for each record
while ($row=mysqli_fetch_array($qry)){
echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br />';
}

//Display heading
echo "<h2>Select Females from the Customer Table with Age >= 22</h2>";
//run query to select all records from customer table whose age is greater than and equal to 22 and are female
$stmt = "SELECT * FROM Customer where Age >= 22 AND Gender = 'F'";
//store the result of the query in a variable called $result
$qry = mysqli_query($conn, $stmt);
//Use a while loop to iterate through your $result array and display
//the first name, last name and email for each record
while ($row=mysqli_fetch_array($qry)){
echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br />';
}

//Display heading
echo "<h2>Select Males from the Customer Table list by age descending</h2>";
//run query to select all records from customer table whose gender is Male and show data on in descending order on the basis of age
$stmt = "SELECT * FROM Customer where Gender = 'M' order by Age desc";
//store the result of the query in a variable called $result
$qry = mysqli_query($conn, $stmt);
//Use a while loop to iterate through your $result array and display
//the first name, last name and email for each record
while ($row=mysqli_fetch_array($qry)){
echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br />';
}

//Display heading
echo "<h2>Select all with \"a\" in first name </h2>";
//run query to select all records from customer table where first name contains letter a
$stmt = "SELECT * FROM Customer where FirstName LIKE '%a%'";
//store the result of the query in a variable called $result
$qry = mysqli_query($conn, $stmt);
//Use a while loop to iterate through your $result array and display
//the first name, last name and email for each record
while ($row=mysqli_fetch_assoc($qry)){
echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br />';
}









	
	//counting the record
	$count=mysqli_num_rows($qry);
	if($count>=1)
	{
		while($row=mysqli_fetch_array($qry))
		{
		echo  $row['CustomerID']; 
		echo "\t";
		echo  $row['FirstName']; 
		echo "\t";
		echo  $row['LastName']; 
		echo "\t";
		echo  $row['Email']; 
		echo "\t";
		echo  $row['Password']; 
		echo "\t";
		echo  $row['Gender']; 
		echo "\t";
		echo  $row['Age']; 
		echo "<br/>";
		}

	}
	else
	{
		echo "<h1>There is No data To Dispaly";
	}
	?>
</body>
</html>