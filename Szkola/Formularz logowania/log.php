  <?php
  $name = $_POST['login'];
  $lname = $_POST['haslo'];
  
  $user1 = 'test';
  $haslo = "haslo";
    
     if($name != $user1){
     
     echo 'Zla nazwa uzytkownika';
     
   }
    elseif($lname != $haslo){
      
      echo 'Zle haslo';
   }
  else{
  header('Location: http://www.google.com/');
    }
  ?>