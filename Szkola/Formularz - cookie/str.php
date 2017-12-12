<!DOCTYPE HTML>

<head>
  <meta charset="utf-8"/>
</head>
<body>
<?php
  $login = "Test";
  $password = "Haslo";
  $check = $_POST["check"];
  $form = '<form method="POST" action="str.php">
   <label>Login:  <input type="text" name="login"></label><br>
    <label>Hasło: <input type="password" name="haslo"></label><br>
  
     <input type="submit" value="Zaloguj się"><br>
    <label>Pamiętaj mnie: <input type="checkbox" name="check"></label> 
      
  </form>
  
  <p> Poprawny login: Test <br>
      Poprawne haslo: Haslo
  </p>';
     
   if($login == $_POST['login'] && $password == $_POST['haslo']){
     echo "Zalogowałeś się poprawnie!!";
   }else if ($login != $_POST['login']){
     echo $form."<br>";
     echo "<h2>Niepoprawny Login</h2>";
   }else if ($password != $_POST['haslo']){
     echo $form."<br>";
     echo "<h2>Niepoprawne Hasło</h2>";
   }
  
  if(isset($check) == 1){
    setcookie("login", $_POST['login'], time() + 60*60*24);
    setcookie("haslo", $_POST['haslo'], time() + 60*60*24);
  }
     
     ?>
</body>