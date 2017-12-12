<?php
session_name('Zadanie');
session_start();
?>

<?php 
$tablica = $_SESSION["tablica"];
echo '<pre>';
print_r($tablica);
echo '</pre>';

?>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href='form.css' />
</head>
<button> <a href="zapis.php">Zapisz</a> </button>
 <button>
    <a href="usuwanie.php">Usuń</a>
  </button><br>
<body>
  <button>
    
  <a href="index.php">Wróć do strony głównej </a>
    
  </button>
</body>