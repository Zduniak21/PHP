<head>
  <title>Widok</title>
  <meta charset="utf-8">
</head>
<body>
  <h1>Widok</h1>
  
  <?php
  
  include("connect.php");
  
  if($result = mysql_query("Select * from nauczyciele"))
  {
    if($result -> num_rows >0)
    {
      $format = "<tr><td>%d</td><td>%s</td></tr>";
      printf ($format, $row->id, $row->name);
    }
  }else
  {
  echo "Błąd " . mysql_error($mysql);  
  }
  
  ?>
  
</body>