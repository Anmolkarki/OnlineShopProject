<?php
    //create
    $stmt = "CREATE TABLE Customer
            (
                CustomerID INT AUTO_INCREMENT PRIMARY KEY,
                FirstName VARCHAR(20),
                LastName VARCHAR(20),
                Email VARCHAR(50),
                Password VARCHAR(256),
                Gender VARCHAR(1),
                Age INT(3)
            )" ;

    include('connection.php');

    $qry = mysqli_query($conn, $stmt);

    if($qry)
        echo "<br/>Table Customer created successfully";
    else
        echo "<br/>";

    //insert
  $stmt = "INSERT INTO Customer VALUES(6, 'Rehana', 'Hashmi', 'a.park@leedsbeckett.ac.uk', 'r.hashmi@leedsbeckett.ac.uk', 'F', '22')";
    $adddata = mysqli_query($conn, $stmt);
    if($adddata)
        echo "<br/>Sample data added";
    else 
        echo "<br/>Data not inserted"; 

?>