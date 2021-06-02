<!DOCTYPE html>
<html>
<head>
<title>week 6 Progress Check</title>
</head>
<body>
	<h1>Search Form</h1>
	<form method="post" action="" >
		<p><label>Location:</label></p>
		<input type="text" name="location" value="<?php if(isset($_POST['location'])){echo $_POST['location'];} ?>" >
		<p><label>Category:</label></p>
		<select name="select">
			<option value="">Please select</option>
			<option <?php if(isset($_POST['select']) && $_POST['select'] == "Hotel"){echo "selected";} ?> value="Hotel">Hotel</option>
			<option <?php if(isset($_POST['select']) && $_POST['select'] == "Guest House"){echo "selected";} ?> value="Guest House">Guest House</option>
		<option <?php if(isset($_POST['select']) && $_POST['select'] == "Rental"){echo "selected";} ?> value="Rental">Pepperoni</option>>
			<option value="Rental">Rental</option>
		</select>
		<input type="submit" value="Submit" name="submit"/>
	</form>
	
<?php
//Checking if the form is submitted and collecting data from the forms
	if(isset($_POST['submit'])){
	$location=$_POST['location'];
	//filter_var() function is used to remove the excess spaces and character.
	$location = filter_var($location, FILTER_SANITIZE_EMAIL);
	echo "$location";
	echo "<br/>";
	$select=$_POST['select'];
	echo "$select";
	echo "<br/>";

//use of isset() function, checking whether the form is empty or not, allowing the user know when the data is entered while submitting the form, alerting user about the error
	if(empty($location) || empty($select) || !isset($_POST['location']) || !isset($_POST['select'])){
			echo "All fields Required";
			echo "<br/>";
			echo " Form couldnot be submitted";
			echo "<br/>";
			echo "Error is found";	
		}
		else{
			echo "Form submitted succesfully";
	}	
	}
	?>	
</body>
</html>