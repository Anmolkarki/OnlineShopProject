<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Web Applications and Technologies</title>
      <link type="text/css" rel="stylesheet" href="main.css" />
   </head>
   <body>
      <header>
         <h1>Anmol karki</h1> 
      </header>
      
      <section id="container">
         <h1>Further Fundamentals of PHP</h1>
         <?php
         echo "<h1>Array</h1>";
          echo "<h2>Simple Arrays</h2> ";
          echo '</br >';
           echo '</br >';
           $products = array('t-shirt', 'cap', 'mug');
            print_r ($products);
             echo '</br >';
             $products[]='skirt';
             print_r ($products);
              echo '</br >';
             echo 'Items in my products array';
            echo '</br >';
            echo 'The item at index [2] is:' .$products[2];
            echo '</br >';
            echo 'The item at index [3] is:' .$products[3];
            echo '</br >';
            echo '</br >';

  echo '<h1>Associative Arrays</h1> ';
$customer=array('CustID'=>12, 'CustName'=>'Sarah', 'CustAge'=>23, 'CustGender'=>'F');
 echo '</br >';
  print_r ($customer);
   echo '</br >';
   $customer['CustAge']='32';
    $customer['CustEmail']='sarah@gamil.com';

 print_r ($customer);
 echo '</br >';
  echo 'Items in my customer array';
 echo '</br >';
echo 'The item at index[CustName] is:' .$customer['CustName'];
  echo '</br >';
  echo 'The item at index [CustEmail] is:' .$customer['CustEmail'];
  echo '</br >';
  echo '</br >';
  echo '<h1>Multi-Dimensional Arrays</h1>';
  echo '</br >';
  $stock = array
  (
  array('description'=>'t-shirt','price'=>9.99,'stock'=>100,'colour'=>'blue green red'),
  array('description'=>'cap','price'=>4.99,'stock'=>50,'colour'=>'blue black grey'),
  array('description'=>'mug','price'=>6.99,'stock'=>30,'colour'=>'yellow green pink'),
 
  );
   print_r ($stock);

    echo '</br >';
     echo '</br >';
     echo '<h1>Multi-Dimensional Associative Arrays</h1>';
      echo '</br >';
      echo '</br >';
      echo 'This is my order';
      echo '</br >';
      echo 'green t-shirt'; 
      echo '</br >';
     echo 'Price: £'.$stock[0]['price'];
     echo '</br >';

     echo 'grey cap'; 
     echo '</br >';

echo 'Price: £'.$stock[1]['price'];
 echo '</br >';

 echo '</br >';

echo '<h1>Loops</h1>';
echo '<h2>While Loop</h2>';
 echo '</br >';
 $counter=1;

 while($counter < 6) {
    echo 'Count: '.$counter.'<br />';
$counter++; 

}
 echo '</br >';
 $shirt_price=9.99;
 $counter=1;
  
 while($counter <= 10) {
   $total=$counter*$shirt_price;
    echo '<tr>';
   echo  $counter. "- £" .$total;
   echo '</br>';
   $counter++;
    echo '</tr>';
  
} 
echo '</br >';
echo '</br >';
echo '<h1>For Loops</h1>';
$names=array('Amit','bishal','satish','arun','manjil');
  echo '</br >';
for ($i = 0; $i < 5; $i++) {
    echo $names[$i];
      echo '</br >';
} 
  echo '</br >';
    echo '</br >';
    echo '<h1>Foreach Loops</h1>';
    echo '</br >';
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    $names=array("Peter"=>"c123456","kat"=>"c654321","Laura"=>"c987654","Ali"=>"c654987","Ali"=>"c654987","popacatapetal"=>"c765984");
   

  foreach ($names as $value) {
    echo "$value <br>";
}
echo '</br >';
echo '</br >';


$city=array('Peter'=>'LEEDS','Kat'=>'bradford','Laura'=>'wakeFIeld');
foreach ($city as $value) {
    echo "$value <br>";
}
echo '</br >';
echo '</br >';
foreach ($city as $value) {
    echo strtolower("$value <br>");
}
echo '</br >';
echo '</br >';
foreach ($city as $value) {
    echo ucfirst("$value <br>");
}
        ?>
      </section>
      <footer>   
         <small> <a href="watwk4.php">Home</a></small>
      </footer>
   </body>
</html>



