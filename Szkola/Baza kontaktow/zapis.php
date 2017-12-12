<?php
session_name('Zadanie');
session_start();
?>
<?php
 
$contacts = $_SESSION["tablica"];

 $open = fopen("kontakty/nowa_baza.csv","w+" );
 foreach ($contacts as $fields) {
    fputcsv($open, $fields);
}
fclose($open);
 
header('Location: index.php');