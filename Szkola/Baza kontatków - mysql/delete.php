<head>
  <title>Widok</title>
  <meta charset="utf-8">
 <!-- <link rel="stylesheet" type="text/css" href="widok.css"> -->
</head>
<body>
  <h1>Widok</h1>
  
  <?php
  include('connect.php');
  $id = $_GET['Id'];
  if(isset($id) && is_numeric($id)){
  
    if($stmt=$mysqli->prepare("Delete from Kontakty where Id=? LIMIT 1"))
  {
    $stmt ->bind_param("i", $id);
    $stmt ->execute();
    $stmt ->close();
  }else{
    echo "Błąd zapytania";
  }
  
  header("Location: widok.php");
    }else{
    
    header("Location: widok.php");
  }
  ?>
  <?php $mysqli->close(); ?>
</body>