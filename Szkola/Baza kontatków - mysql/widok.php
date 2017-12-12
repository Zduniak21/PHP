<head>
  <title>Widok</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="widok.css">
</head>
<body>
  <h1>Tabela</h1>
  
  <?php
  include("connect.php");
   
  if($result = $mysqli->query("Select * from Kontakty ORDER BY ID"))
  {
    if($result -> num_rows >0)
    {
      
      echo "<table>";
      
      echo "<tr><th>ID</th><th>Imię</th><th>Nazwisko</th><th>Numer</th><th>Mail</th></tr>";
      while($row = $result->fetch_object()){
      $Id=$row->Id;
      $format = "<tr><th>%d</th><th>%s</th><th>%s</th><th>%d</th><th>%s</th><th><a href='delete.php?Id=$Id'>Usuwanie</a></th><th><a href='edit.php?Id=$Id'>Edycja</a></th></tr>";
      printf ($format, $row->Id, $row->Name, $row ->SName, $row ->Number, $row ->Mail);
        }
    }
    
    
    echo "</table>";
    
  }else
  {
  echo "Błąd" . $mysqli->error;  
  }

  ?>
  
  
  <?php $mysqli->close(); ?>
  
  <a href="edit.php">Dodaj nowego użytkownia</a>
</body>