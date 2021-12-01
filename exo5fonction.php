<?php

function plusPetit( int $a , int $b , int $c ) {

    $min = $a;
    if ($min > $b){

            $min = $b;
    
    }
    else {

        if ($min>$c){

            $min = $c;
            }

        
        
    }

    echo $min;


}


plusPetit( 5 , 16 , 3 );





?>