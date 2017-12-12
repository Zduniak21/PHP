<?php 
include("connect.php");
function createForm($f_name="", $f_Sname="", $f_number="", $f_mail="", $error="", $id=""){
  
?>

<body>
 <?php 
    if($error != ''){
      echo "<div>" . $error . "</div>";
    }
  
  
  ?>
   <form method="POST" action="">
      <div>
        <?php if($id !=""){ ?>
            <input type='hidden' name="id" value="<?php echo $id; ?>" />
            <label>ID: <?php echo $id; ?></label> <br>
        <?php } ?>
        
            <input type="text" name="name" value="<?php echo $f_name ?>" placeholder="Imie"/><br>
            <input type="text" name="Sname" value="<?php echo $f_Sname?>"  placeholder="Nazwisko"/><br>
            <input type="number" name="number" value="<?php echo $f_number ?>"  placeholder="Numer"/><br>
            <input type="email" name="mail" value="<?php echo $f_mail ?>" placeholder="Mail" /><br>
            <input type="submit" name="submit" value="Wyslij">
     </div>
</body>










<?php   }
 if(isset($_GET['Id'])){
     /* edycja */ 
    if(isset($_POST['submit'])){
      if(is_numeric($_POST["id"])){
        $id = $_POST['id'];
        $name = htmlentities($_POST['name'], ENT_QUOTES);
        $Sname = htmlentities($_POST['Sname'], ENT_QUOTES);
        $number = htmlentities($_POST['number'], ENT_QUOTES);
        $mail = htmlentities($_POST['mail'], ENT_QUOTES);
        
     if( $name == "" || $Sname == "" || $number == "" || $mail == ""){
      $error ="Wypełnij wszystkie pola";
      createForm($name, $Sname, $number, $mail, $error);
          }else{
            if($stmt = $mysqli->prepare("UPDATE Kontakty SET Name = ?, SName = ?, Number = ?, Mail = ? WHERE Id = ? ")){
               $stmt->bind_param("ssisi", $name, $Sname, $number, $mail, $id);
               $stmt->execute();
               $stmt->close();
            }else{
              echo "Błąd zapytania";
            }
        header("Location: widok.php");
     }
        
        
      }
    } else{
           if(is_numeric($_GET['Id']) && $_GET['Id'] > 0){

             $id= $_GET['Id'];

             if($stmt = $mysqli->prepare("SELECT * from Kontakty WHERE id = ?")){
                $stmt->bind_param("i",$id);
                $stmt->execute();
                $stmt->bind_result($id,$name,$Sname,$number,$mail);
                $stmt->fetch();
                createForm($name,$Sname,$number,$mail,NULL,$id);
                $stmt->close();
             }else{
               echo "Błąd zapytania";
             }

           }else{
            header("location: widok.php");
           }
        }
   }
else{
  /* nowy uzytkownik */
  if(isset($_POST['submit'])){
    
    $name = htmlentities($_POST['name'], ENT_QUOTES);
    $Sname = htmlentities($_POST['Sname'], ENT_QUOTES);
    $number = htmlentities($_POST['number'], ENT_QUOTES);
    $mail = htmlentities($_POST['mail'], ENT_QUOTES);
    
    if( $name == "" || $Sname == "" || $number == "" || $mail == ""){
      $error ="Wypełnij wszystkie pola";
      createForm($name, $Sname, $number, $mail, $error);
    }else{
      if($stmt = $mysqli -> prepare("INSERT Kontakty (Name, SName, Number, Mail) VALUES (?,?,?,?)")){
          $stmt->bind_param("ssis", $name, $Sname, $number, $mail);
          $stmt->execute();
          $stmt->close();
      }else{
        echo "Błąd zapytania";
      }
       header("location: widok.php");
    }
    
  }else{
    createForm();
  }
}
  ?>


  
  
  
  
  
  <?php $mysqli->close(); ?>
  