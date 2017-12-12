<?php

$select = $_POST['cat'];
class calc
{
   public $nr1;
   public $nr2;

  public function dodawanie($n, $n2)
  {
     $this->nr1 = $n;
     $this->nr2 = $n2;
   
   echo $this->nr1 + $this->nr2;
    
  }
  
  public function odejmowanie($n, $n2)
  {
     $this->nr1 = $n;
     $this->nr2 = $n2;
   
   echo $this->nr1 - $this->nr2;
  }  
 
  public function mnozenie($n, $n2)
  {
     $this->nr1 = $n;
     $this->nr2 = $n2;
   
   echo $this->nr1 * $this->nr2;
  }  
  
  public function dzielenie($n, $n2)
  {
     $this->nr1 = $n;
     $this->nr2 = $n2;
   
   echo $this->nr1 / $this->nr2;
  }  
  
  public function potega($n, $n2)
  {
     $this->nr1 = $n;
     $this->nr2 = $n2;
   
   echo pow($this->nr1, $this->nr2);
  }  
  
  public function pierwiastek($n)
  {
     $this->nr1 = $n;
     
   
   echo sqrt ($this->nr1);
  } 
  public function modulo($n, $n2)
  {
     $this->nr1 = $n;
     $this->nr2 = $n2;
   
   echo $this->nr1 % $this->nr2;
  } 
  public function dzielenie_cal($n, $n2)
  {
     $this->nr1 = $n;
     $this->nr2 = $n2;
   
   echo floor($this->nr1 / $this->nr2);
  } 
}



$add = new calc;

if ($select == "dodawanie"){
$add->dodawanie($_POST['nr1'], $_POST['nr2']);  
}

if ($select == "odejmowanie"){
$add->odejmowanie($_POST['nr1'], $_POST['nr2']);    
}

if ($select == "Mnożenie"){
$add->mnozenie($_POST['nr1'], $_POST['nr2']);    
}

if ($select == "Dzielenie"){
$add->dzielenie($_POST['nr1'], $_POST['nr2']);    
}

if ($select == "Potega"){
$add->potega($_POST['nr1'], $_POST['nr2']);    
}

if ($select == "Pierwiastek"){
$add->pierwiastek($_POST['nr1']);    
}

if ($select == "Modulo"){
$add->modulo($_POST['nr1'], $_POST['nr2']);    
}

if ($select == "Dzielenie_cal"){
$add->dzielenie_cal($_POST['nr1'], $_POST['nr2']);    
}


