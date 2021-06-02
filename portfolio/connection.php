
<?php
$host="localhost";
$user="root";
$pass="";
$db="77190036";
$conn=mysqli_connect($host, $user, $pass, $db);
if ($conn){
	echo"Success";

}
else{
	echo"Something wrong";
}
?>