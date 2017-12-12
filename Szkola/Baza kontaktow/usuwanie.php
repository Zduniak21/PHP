 <!doctype HTML>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href='form.css' />
  </head>
  
  <body>
    
   
    <h2>
    	Usuń kontakt
	</h2>
    
    <form method="POST" >
        <input name="del" type="number" min="1"/>
 <button type='send'>Kasuj</button>
</form>
    <button>
      <a href="index.php">Wróć do strony głównej</a>
    </button>
   
    
<?php
 $delete = $_POST['del'];
 //echo $delete;

$dane=file("kontakty/nowa_baza.csv"); //Otwieramy plik jako tablice
unset($dane[$delete--]); //Usuwamy wskazaną linię z tablicy(pliku txt)
$plik=fopen("kontakty/nowa_baza.csv",'w');  //Otwieramy plik
fwrite($plik,join($dane)); //Zapisujemy plik bez lini $ktora
fclose($plik);  //Zamykamy 

$row = 0;
if (($handle = fopen("kontakty/nowa_baza.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 0)) !== FALSE) {
        $num = count($data);
           //echo "<p> Kontakt $row: <br /></p>\n";
           echo "<br />\n";
         echo "Kontakt ".$row.": ";
        for ($c=0; $c < $num; $c++) {
            echo $data[$c].", "."\n";
        }
      $row++;
       
    }
    fclose($handle);
    
}
?>