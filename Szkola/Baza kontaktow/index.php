<?php
session_name('Zadanie');
session_start();
?>
<!DOCTYPE HTML>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href='form.css' />
</head>

<body>
  <div class="form">
  <form method="POST" action="skrypt.php" enctype="multipart/form-data" >
    <h2>Otwórz bazę kontaktów</h2><br>
    <input type="file" name="data"><br>
    <input type="submit" value="Wyslij">
  </form>
  </div>
</body>
