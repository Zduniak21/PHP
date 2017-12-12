<!DOCTYPE HTML>
<head>
  <meta charset="utf-8"/>
</head>
<body>
 <?php 
    $tablica = array(3,5,6,7,11,23,41,55,678,991,1024,1111);
 $n = count($tablica);
	for ($i=0;$i<$n; $i++){
		echo $tablica[$i]." ";
  }
  
  echo "<br>";
  foreach($tablica as $lp){
    if(($lp%2 && $lp%3 && $lp%5 && $lp%7 || $lp == 2 || $lp == 3 || $lp == 5 || $lp == 7)){
      print("Liczba pierwsza: ".$lp."<br>" );
    }
  } 
?>

</body>