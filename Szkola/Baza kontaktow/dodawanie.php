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
  <form  method="POST" action="dodawanie.php">
    <h2>Dodaj kontakt</h2>
    <input type="text" name="imie" placeholder="Imie"><br>
    <input type="text" name="naz" placeholder="Nazwisko"><br>
    <input type="text" name="nr" placeholder="Numer"><br>
    <input type="text" name="mail" placeholder="Mail"><br>
    <input type="submit" value="Dodaj">
  </form>
<button> <a href="zapis.php">Zapisz</a> </button><br>
    <button>
    <a href="usuwanie.php">Usuń</a>
  </button><br>
  <?php //walidacja formularza
  $imie = $_POST['imie'];
  $naz = $_POST['naz'];
  $number = $_POST['nr'];
  $mail = $_POST['mail'];
  $error ='';
   if (empty($imie))
        { $error = "Nie wypełniłeś pola <strong>Imie</strong><br/>"; }
    elseif (strlen($imie) > 20)
        { $error .="Za długi nick - max. 20 znaków <br/>";}
  
     if (empty($naz))
        { $error = "Nie wypełniłeś pola <strong>Nazwisko</strong><br/>"; }
    elseif (strlen($imie) > 20)
        { $error .="Za długi nick - max. 20 znaków <br/>";}
   if (empty($mail))
        { $error .= "Nie wypełniłeś pola <strong>E-mail !</strong><br/>"; }
    elseif (strlen($mail) > 30)
        { $error .="Za długi e-mail - max. 30 znaków <br/>";}
    elseif (preg_match('/^[a-zA-ZąćęłńóśźżĄĆĘŁŃÓŚŹŻ0-9\-\_\.]+\@[a-zA-ZąćęłńóśźżĄĆĘŁŃÓŚŹŻ0-9\-\_\.]+\.[a-z]{2,4}$/',$mail) == false)
        { $error .= "Niepoprawny adres E-mail! <br/>"; }
   if (empty($number))
        { $error .= "Nie wypełniłeś pola <strong>Numer</strong><br/>"; }
    elseif(preg_match('/^[0-9]$/',$number))
       {}
           else{
             $error .="Niepoprawny numer<br/>";
           }
     if(empty($error)){}
  else{
    echo $error;
  }
  ?>
  <?php //dodawnaie użytkownika
  
  $kontakt = array( 'imie' => $imie, 'nazwisko' => $naz, 'numer' => $number, 'mail' =>$mail );
  array_push($_SESSION["tablica"],$kontakt);
  $tablica = $_SESSION["tablica"];  
 foreach($tablica as $name) {
    echo $name['imie'] . ' ' . $name['nazwisko'] .'<br>';
}
echo '<br>';
  

  
?>
 <button>
   <a href="wyswietlanie.php">Szczegóły</a>
  </button><br>

</body>


