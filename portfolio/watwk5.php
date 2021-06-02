
<!DOCTYPE html>
<html>
<head>
	<title>Web Applications and Technologies</title>
</head>
<body>
	<header>
        <h1>Shivam kumar shah 77190036</h1> 
     </header>
     <h1>Processing Input from HTML Forms</h1>
	 <h2>Login Form using GET</h2>
	<form method="POST" action="">
	<fieldset>
			<legend>
				Login
			</legend>
			<label for="email">Email: </label>
			<input type="text" name="txtEmail"/><br />
			<label for="passwd">Password: </label>
			<input type="password" name="txtPass" /><br />
			<input type="submit" value="Submit" name="loginSubmit"  />
			<input type="reset" value="Clear" />
		</fieldset>
	</form>
	<?php
		if(isset($_POST['loginSubmit'])){
			$email = $_POST['txtEmail'];
			$password = $_POST['txtPass'];

			echo "Email : $email Password: $password";
		}
	
?>
	<form method="POST" action="">
	<fieldset>
		<legend>Comments</legend>
		<label for="">Email: </label>
		<input type="text" name="txtEmail" value="<?php
		if(isset($_POST['txtEmail'])){
			echo $_POST['txtEmail']; 
			}
?>"><br />
		<textarea rows="4" cols="50" name="comment">Comment</textarea><br />
		<label for="">Click to Confirm: </label>
		<input type="checkbox" name="chkConfirm" value="agree"><br />
		<input type="submit" value="Submit" name="Submit"/>
		<input type="reset" value="Clear" />
	</fieldset>
</form>
<?php
if(isset($_POST['Submit'])){
	if(!empty($_POST['txtEmail'])){

		$email = $_POST['txtEmail'];
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			$comment = $_POST['comment'];
			if(isset($_POST['chkConfirm'])){
			$confirm = 'Agreed <br />';
			}else{
				$confirm = 'Not Agreed<br />';
			}
			echo "Email: $email <br />";
			echo "Comments : $comment <br />";
			echo "Confirm : $confirm";
		}else{
			echo "Email is not Valid";
		}
		
	}else{
		echo "Email must not be empty";
	}
	
}
	
?>
<h2>Tax Calculator</h2>

	<form method="POST" action="">
	<fieldset>
		<legend>Without TAX calculator</legend>
			

	
		<label for="taxPrice">After Tax Price :</label><input type="text" name="taxPrice" value="<?php if(isset($_POST['taxPrice'])){echo $_POST['taxPrice'];} ?>"></input>
		<label for="taxRate">Tax Rate :</label><input type= "text" name="taxRate" value="<?php if(isset($_POST['taxRate'])){ echo $_POST['taxRate'];} ?>"></input>
		<input type="submit" name="taxForm" value="Submit"></input>
		<input type="reset" value="Clear" ></input>
	</fieldset>
		
	</form>

	<?php
		if(isset($_POST['taxForm'])){

			
				$taxPrice = $_POST['taxPrice'];
				$taxRate = $_POST['taxRate'];
				if(empty($taxPrice) || empty($taxRate)){
					echo "All Fields Required";
				}else{
					if(!preg_match('^[0-9]+\.[0-9]{2}^', $taxPrice)){
						echo "Please enter the price in the format 9.99";
					}
					if(!ctype_digit($taxRate)){
						echo "<br>Please enter a whole number for tax rate";
					}
					if(preg_match('^[0-9]+\.[0-9]{2}^', $taxPrice) && ctype_digit($taxRate)){
						$beforeTax = (100*$taxPrice)/(100 + $taxRate);
						$result = number_format($beforeTax,2);

					echo "<br><b> Price before Tax = &euro;$result </b>";
					}
				}
		}
	?>
	<h2>Passing Data Appended to an URL</h2>
	<h3>Pick a category</h3>
	<a href="watwk5.php?cat=Films">Films</a>
	<a href="watwk5.php?cat=Books">Books</a>
	<a href="watwk5.php?cat=Music">Music</a>
	<?php
		if(isset($_GET['cat'])){
			echo "<br>You have clicked ".$_GET['cat'];
		}
		   
	?>

</body>
</html>
