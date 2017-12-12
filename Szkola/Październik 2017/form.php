<?php
  $name = $_POST['login'];
  $lname = $_POST['haslo'];
  
  $user1 = 'test';
  $haslo = "haslo";
    
   if($name != $user1 || $lname != $haslo ){
     echo 'Zla nazwa uzytkownika lub haslo ';
     
   }
  else{
     header('Location: http://www.google.com/');
   }
 
  ?>