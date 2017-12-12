<?php 
function ref (&$zmienna)
{
    $zmienna++;
};

$a=5;
ref ($a);
?>