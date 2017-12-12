
<!DOCTYPE HTML>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href='dziala.css' />
</head>

<body>
<?php
  $art = $_POST['art'];
  $autor = $_POST['autor'];
  $zaw = $_POST['zaw'];


  if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name']; 
      
      if($file_size > 2097152){
         $errors[]='Plik musi być większy niż 2MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"./images/".$file_name);
         
      }else{
         print_r($errors);
      }
   }

    echo '<img src="./images/' . $file_name . '">'.'<br>';
  echo '<h2>' . $art . '</h2>';
  echo '<br>';
  echo '<h5>' . $autor . '</h5>';
  echo '<br>';
  echo '<p>' . $zaw . '</p>';
  echo '<br>';
  echo date('d.m.Y H:i', strtotime('+5 hour'));
?>

</body>
