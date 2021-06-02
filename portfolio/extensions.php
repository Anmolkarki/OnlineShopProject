<?php
 echo "<h2>Some Useful Functions</h2>";
   //$pass = null;
   //$pass = "";
   //$pass = '';
   //$pass = 'pass';
   //$pass = 1234567;
   //$pass = 'passwords';
   //$pass = 'passwd';
   $pass = 'password';
   //$pass = '   password';
   //$pass = '<script>alert("You have been Hacked")</script>';

   $password = htmlentities(trim($pass));
   echo "Password is : $password";

   if(isset($password) && !empty($password)){
      if(strlen($password) >6 && strlen($password) <=8){
         if(!is_numeric($password)){
            echo "<br/> Password OK";
            echo "<br/> encrypted password : ".sha1($password);
         }else{
            echo "<br> Password cannot be numeric";
         }
      }elseif(strpos($password, 'script') !== false){
         echo "<br/> Script does not run";

      }else{
         echo "<br/> Password must be between 6 and 8 characters in length";
      }
      
   }else if(!isset($password) || empty($password)){
      echo "<br/> Please Enter a Password";
   }
?>