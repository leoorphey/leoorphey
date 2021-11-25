<?php
$max = 0;

$x=null;

do {
    $b = (int) readline ("entrez un nombre \n "  );

    if ($x>$max){
        $max=$x;
    }
    else
    {
         $max=$max;
     } 
     
    }
while  ($x!=0);


   
   echo( "la valeur max: ".$max );


?>