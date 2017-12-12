<head>
  <title>Kalkulator</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href='style.css' />
</head>
<body>
  <div class="calc">
  <h2>Kalkulator</h2>
  <form method ="POST" action="">
    <input type="number" name="nr1" placeholder="Pierwsza liczba"><br>
    <input type="number" name="nr2" placeholder="Druga liczba"><br>
      <select name="cat">
        <option value="dodawanie">Dodawanie</option>
        <option value="odejmowanie">Odejmowanie</option>
        <option value="Mnożenie">Mnożenie</option>
        <option value="Dzielenie">Dzielenie</option>
        <option value="Potega">Potega</option>
        <option value="Pierwiastek">Pierwiastek</option>
        <option value="Modulo">Modulo</option>
        <option value="Dzielenie_cal">Dzielenie Całkowite</option>
      </select><br>
    <input type="submit" value="Wyslij">
  </form>
    <?php include "calc.php";?>
  </div>
</body>





