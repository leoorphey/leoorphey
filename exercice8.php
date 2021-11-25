<?php
$max = 0;
$x=0;

for($x=0; $i < 2 ; $x++)
{
    
    $b = (int) readline("entrez un nombre   \n ".($x+1));

if ($b>$max){
 $max=$b;
 $b=$b+1;
   
}
else 
{
    $max=$max;
}

}

echo( "la valeur max: ".$max );
echo ( " la position est : $x ")

?>