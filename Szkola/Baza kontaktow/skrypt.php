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
<form method="POST" action="skrypt.php" enctype="multipart/form-data" >
    <h2>Zmień baze kontaków</h2><br>
    <input type="file" name="data"><br>
    <input type="submit" value="Wyslij">
  </form>
  
  <?php //przesyłanie pliku
   if(isset($_FILES['data'])){
      $errors= array();
      $file_name = $_FILES['data']['name'];
      $file_size =$_FILES['data']['size'];
      $file_tmp =$_FILES['data']['tmp_name']; 
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"./kontakty/".$file_name);
         
      }else{
         print_r($errors);
      }
   }


?>
  
  
  <form  method="POST" action="dodawanie.php">
    <h2>Dodaj kontakt</h2>
    <input type="text" name="imie" placeholder="Imie"><br>
    <input type="text" name="naz" placeholder="Nazwisko"><br>
    <input type="text" name="nr" placeholder="Numer"><br>
    <input type="text" name="mail" placeholder="Mail"><br>
    <input type="submit" value="Dodaj">
  </form> <br>
  
  <?php // otwieranie pliku
  $csv = array();
 $open = fopen("kontakty/$file_name","a+" );
 if ($open){
   while (($line = fgetcsv($open)) !==false){
     $newRow = array_combine(array("imie", "nazwisko", "numer","mail"), $line);
     array_push($csv, $newRow);
   }
 }
  
  /* $plik = fgets($open);
  $csv = array();
  $data = explode (',' , $plik );
  $nowy = array(
  'imie' => $data[0],
  'nazwisko' =>$data[1],
  'numer' => $data[2]);
  array_push($csv, $nowy); */
  
  
  
  //$csv = array('imie' =>, 'nazwisko' =>, 'numer' =>);
 //$csv = array_map('str_getcsv', file("kontakty/$file_name")); //stworzenie tablicy
/* $keys=array('imie', 'nazwisko', 'numer', 'email', 'miasto','adres' );
$plik = fgetcsv($open);
$csv = array_fill_keys($keys, $plik ); */
 foreach($csv as $name) {
    echo $name['imie'] . ' ' . $name['nazwisko'] .'<br>';
} 
echo '<br>' ;
$_SESSION["tablica"] = $csv;
$_SESSION['plik'] = $open;

?>
 <button>
   <a href="wyswietlanie.php">Szczegóły</a>
  </button><br>
  <button> <a href="zapis.php">Zapisz</a> </button>

</body>




