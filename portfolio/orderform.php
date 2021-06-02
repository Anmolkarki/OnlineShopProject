<!DOCTYPE html>
<head>
	<title>Order Form</title>
</head>
<body>
<form method="POST" action="" name="orderForm">
<fieldset>
	<h1>Order Form</h1>
<h2>Please out this form to place your order</h2>

<fieldset>
	<legend>Enter your Login details</legend>
	Username: <input type="text" name="username" value="<?php if(isset($_POST['username'])){echo $_POST['username'];} ?>" >
	Email: <input type="email" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>">
</fieldset>


<fieldset>
	<legend>Pizza Selection</legend>
	Size : <input type="radio" name="size" <?php if (isset($_POST['size']) && $_POST['size']=="Small") echo "checked";?> value="Small" > small
			<input type="radio" name="size" <?php if (isset($_POST['size']) && $_POST['size']=="Medium") echo "checked";?> value="Medium"> medium
			<input type="radio" name="size"<?php if (isset($_POST['size']) && $_POST['size']=="Large") echo "checked";?> value="Large"> large<br />
	Topping : <select name="topping">
				<option selected disabled>Please select</option>
				<option <?php if(isset($_POST['topping']) && $_POST['topping'] == "Pepperoni"){echo "selected";} ?> value="Pepperoni">Pepperoni</option>
				<option <?php if(isset($_POST['topping']) && $_POST['topping'] == "Sausage"){echo "selected";} ?>  value="Sausage">Sausage</option>
				<option <?php if(isset($_POST['topping']) && $_POST['topping'] == "Cheese"){echo "selected";} ?>  value="Cheese">Cheese</option>
				<option <?php if(isset($_POST['topping']) && $_POST['topping'] == "Seafood"){echo "selected";} ?>  value="Seafood">Seafood</option>
				</select><br>

				<!-- //<?php if(isset($_POST['extra']) && $_POST['extra'] == 'olives'){ echo "checked = 'checked'";} ?>  -->
	Extras : 
	<input type="checkbox" name="extra[]" <?php if (isset($_POST['extra']) && $_POST['extra']=="parmesan") echo "checked";?> value="parmesan"> Parmesan
	<input type="checkbox" name="extra[]" <?php if (isset($_POST['extra']) && $_POST['extra']=="olives") echo "checked";?> value="olives">Olives
	<input type="checkbox" name="extra[]" <?php if (isset($_POST['extra']) && $_POST['extra']=="capers") echo "checked";?> value="capers"> Capers<br />

</fieldset>
<input type="submit" value="Submit" name="submit">
	<input type="reset" value="Clear">
</fieldset>
	
</form>

<?php
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		
		
		if(empty($username) || empty($email) || !isset($_POST['size']) || !isset($_POST['topping']) || !isset($_POST['extra'])){
			echo "All fields Required";
		}else{
			if(filter_var($email, FILTER_VALIDATE_EMAIL)){
				$pizzasize = $_POST['size'];
			$extra = $_POST['extra'];
			$topping = $_POST['topping'];
			echo "<h3>Thank you for your order: </h3>";
			echo "Customer ID: $username";
			echo "<br> Email : $email";
			echo "<br> Your Order: $pizzasize $topping";
			echo "<br> Extra Toppings : ";
			foreach ($extra as $item) {
				echo "$item";
			}

			}else{
				echo "Enter Valid Email";
			}
		}		
	}
?>
</body>
</html>