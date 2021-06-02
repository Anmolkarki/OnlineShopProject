<?php
//My first PHP.
echo "<h1>Student name:Shivam kumar shah</h1>";
echo "<h1> Using Escape Characters </h1>";
echo "\"most programmers say it's better to use ''echo' rather than 'print'\" says who?";
echo "<br/>";
echo "</br>";
echo "<h1>Variables</h1>";
$name="David ";
$age="12";

echo 'Hi my name is '  .$name.' and I am '.$age. ' years old';
echo "<br/>";
echo "Mi nombre es ".$name;
echo "y tengo ".$age;
echo " anos de edad";
echo "<br/>";
echo "<br/>";
echo "<h1>Functions</h1>";
//gettype()returns thw type of variable used.
echo gettype($name);
echo '<br />';
//strlen() returns lefth of the string.
echo strlen($name);
echo '<br />';
//strtoUpper()returns the string to upper case letters.
echo strtoUpper($name);
echo '<br />';
echo '<br />';
echo "<h1>Arithmetic</h1>";
$num1 = 9;
echo '<br />';
	$num2 = 12;
	echo 'num1 = ' .$num1;
	echo '<br />';
	echo 'num2 = ' .$num2;
	echo '<br />';
	echo 'num1xnum2  ='.$num1*$num2;
	echo "<br> num1 as a percentage of num2 = ".(($num1/$num2)*100)."%";
	echo "<br> num2 divided by num1 = ".number_format($num2/$num1)." remainder ".$num2%$num1;
	echo '<br />';
	echo '<br />';
	echo 'Name: ' .$name;
	echo '<br />';
	echo 'Age: ' .$age;
	echo '<br />';
	$heightinmeter="1.8";
	echo 'Height in Meters:  ' .number_format($heightinmeter,1);
	echo '<br />';
     $heightininches=($heightinmeter*100)/2.4;
     $heightinfeet=($heightininches)/12;
	echo 'Height in Feet and inches:   ' .$heightinfeet. 'ft' .$heightininches. 'ins';

	echo '<br />';
	echo '<br />';
	echo "<h1>Selection</h1>";
	$day = date('l'); //that is a lower case L
		echo 'it\'s '.$day;
		echo '<br />';
		echo '<br />';
		$day = date('w'); //that is a lower case L
		echo 'it\'s '.$day;
		echo '<br />';
		echo '<br />';
		echo "UTC:".time(); //default time xone
		echo '<br />';
		echo '<br />';

		$day=date('l');
		if($day=='Wednesday')
		{
			echo 'midweek';
		}
		else
		{
			echo 'not midweek';
		}
		echo '<br />';
		echo '<br />';

		$current_hour=date('H');
		if($current_hour<12)
		{
			echo 'Good Morning ';
		}
		elseif(($current_hour>=12)&&($current_hour<=18))
           {
			echo 'Good Afternoon';
		}
		else
			{
			echo 'Good Evening';
		}
echo '<br />';
echo '<br />';
echo "<h1>Arithmetic</h1>";
$tic_price='25';
$tic_age='15';
$membership=true;
echo 'Initial Ticket Price: £' .$tic_price;
echo '<br />';
echo 'Age: ' .$tic_age; 
echo '<br />';
echo 'Member: Yes' ;
echo '<br />';
$final=$tic_price -((25.0/100)*$tic_price);
echo 'Final Ticket Price: £' .number_format($final,2);
echo '<br />';
?>