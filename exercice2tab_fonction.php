<?php


function plusGrand( array $tab  ) {

    $max=0;
    
    $taille= count($tab);

    for ($i=0; $i< count($tab); $i++){

      

        if ($max<$tab[$i]){

            $max=$tab[$i];
            
        }


    }


    echo "$max";



}


plusGrand( array(400,55,455,6645,8,9,7,87,76 ));


?>