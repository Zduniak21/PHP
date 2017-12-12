<?php
  include('connect.php');
  
  function checkname(){
    
    if (isset($_GET['Id'])){
      echo "Edycja";
    }else{
      echo"Nowy uzytkownik";
    }
  }

?>
<head>
  <title><?php checkname(); ?></title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="edit.css">
</head>
<body>

  <h1><?php checkname(); ?></h1>
<?php
include('function.php')
  ?>
  </body>
