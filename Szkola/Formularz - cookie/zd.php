<?php
session_name("Test");
session_start();

?>

<!DOCTYPE HTML>

<head>
  <meta charset="utf-8"/>
</head>
<body>
  
   <form method="POST" action="str.php">
    <label>Login:  <input type="text" name="login"></label><br>
    <label>Hasło: <input type="password" name="haslo"></label><br>
    <label>Pamiętaj mnie: <input type="checkbox" name="check"></label><br>
    <input type="submit" value="Zaloguj się"><br>  
  </form>
  
  <p> Poprawny login: Test <br>
      Poprawne haslo: Haslo
  </p>
  
  <?php
  echo session_id()."<br>";
  echo session_name();
  ?>

</body>