<?php

$c = 0 ;
    do{

        $c = intval(readline("donner une valeur entre 10 et 20:"));
        if($c < 10 )
        {
            echo "plus grand \n" ;
        }

        if($c>20)
        {
            echo "plus petit \n " ;
        }

        
           

    }
    while ($c < 10 || $c > 20)


?>