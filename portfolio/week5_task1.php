<!DOCTYPE html>
<html>
	<head><title>WAT Week 5 Progress Check</title></head>
	<body>
		<h1>WAT Week 5 Progress Check</h1>
		<h1>Generate Statements</h1>
		<?php
		echo "Student name: Amit Raut";
		echo "</br>";
		echo "ID:77190013";
		echo "</br>";
		echo "</br>";
		
		echo "It's not more than £3";
		
		
		?>
		<h1>Use Arithmetic Operators </h1>
		<?php

		$loan=500;
		$rate=3.5;
		$interest=($loan/100)*$rate;
		echo "</br>";
		echo 'Loan: '.$loan;
		echo "</br>";
		echo 'Rate'.$rate.'%';
		echo "</br>";
		echo 'Payable: £'.$interest;
		
		
		?>
		<h1>Use Conditional Statements</h1>
		<?php
		$username="user01";
		$password="pass";
		if($username=="user01" && $password=="passwd")
		{
			echo "sucess";
		}
		else
		{
			echo "fail";	
			}

echo "</br>";
echo "</br>";
			if(strlen($password)>=6)
			{
if($username=="user01" && $password=="passwd")
		{
			echo "sucess";
		}
		else
		{
			echo "fail";	
			}
			}	
			else
			{
				echo "Please use at least 6 characters";
			}
		
		
		/*Use the same variables but this time write code to first test if
		 * the password is at least 6 characters in length, if not
		 * display a message "Please use at least 6 characters", if this test 
		 * is passed then test as before. 
		 */
       
		?>
	</body>
</html>
