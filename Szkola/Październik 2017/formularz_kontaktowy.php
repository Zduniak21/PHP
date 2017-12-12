<!DOCTYPE HTML>

<head>
  <meta charset="utf-8" />
</head>

<body>
  <form method="POST">
    <h2>Napisz do nas</h2><br>
    <label>Login:<input type="text" name="login"></label><br>
    <label>Hasło:<input type="text" name="haslo"></label><br>
    <input type="submit" value="Wyslij">
  </form>
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
</body>
