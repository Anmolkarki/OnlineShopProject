
<!DOCTYPE html>
<html>
	<head><title>WAT Week 5 Progress Check</title></head>
	<body>
		<h1>WAT Week 5 Progress Check</h1>

		<h1>Generate Statements</h1>
		<?php
		//produce code that will display your name and ID on separate lines
        $name = "Anmol karki" ;
        echo $name."<br/>".$id;

        echo "<hr/>";

		//produce code to output the string "It's not more than £3" including all
        //speech marks.
        $speech = "It's not more than &pound;3";
        echo $speech;

        echo "<hr/>";
		?>

		<h1>Use Arithmetic Operators </h1>
		<?php
		/*Calculate annual interest paid for a loan.  Decalre two variables to 
		*hold the value of loan and interest rate.  Set therse to 500 and 3.5
		*respectively.  Calculate the annual interest payable based on the formula
		*interest paid = (loan amount / 100) x rate of interest
		*Display the following statement using your variables:
		* Loan: 500
		* Rate: 3.5%
		* Payable: £17.50
        */
        
        $loan = 500 ;
        $rate = 3.5;

        $interest = ($loan / 100) * $rate;

        echo "Loan: ".$loan;
        echo "<br/>Rate: ".$rate."%";
        echo "<br/>Payable: &pound;".number_format($interest,2);

        echo "<hr/>";

		?>
		<h1>Use Conditional Statements</h1>
		<?php
		/*Declare variables to hold username and password, assign the values
		 * "user01" and "pass".  Write code that will test the value
		 * of your two variables and display the word "success" if
		 * user is "user01" and password is "passwd", or "fail" if not.
		 */

        $username = "user01" ; 
        $password = "pass" ;

        if ($username == "user01" && $password == "pass")
            echo "Success";
        else
            echo "Fail";

        echo "<hr/>";
		
		/*Use the same variables but this time write code to first test if
		 * the password is at least 6 characters in length, if not
		 * display a message "Please use at least 6 characters", if this test 
		 * is passed then test as before. 
		 */

        if(strlen($password) == 6)
        {
            if ($username == "user01" && $password == "pass")
                echo "Success";
            else
                echo "Fail";
        }
        else
            echo "Please use at least 6 characters";
		?>
	</body>
</html>
