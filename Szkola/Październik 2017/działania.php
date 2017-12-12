
<?php 
  
  function dodawanie($a, $b){
      $wynik = $a + $b;
    echo "Wynik dodawania to: ".$wynik."<br>";
  }
  function odejmowanie($a, $b){
    $wynik = $a - $b;
    echo "Wynik odejmowania to: ".$wynik."<br>";
  }
  function mnożenie($a, $b){
    $wynik = $a * $b;
    echo "Wynik mnozenia to: ".$wynik."<br>";
  }
  function dzielenie($a, $b){
    $wynik = $a / $b;
    if ($b != 0){
      echo "Wynik dzielenia to: ".$wynik."<br>";
    }else{
      echo "Nie dziel przez zero";
  }
  }
  

?>

