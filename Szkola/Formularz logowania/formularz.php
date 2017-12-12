<!DOCTYPE HTML>
<?php
session_name("TEST");
session_start();
?>
<head>
  <meta charset="utf-8" />
</head>

<body>
  <form method="POST" action="log.php">
    <h2>Napisz do nas</h2><br>
    <label>Login:<input type="text" name="login"></label><br>
    <label>Hasło:<input type="text" name="haslo"></label><br>
    <input type="submit" value="Wyslij">
  </form>

</body>
