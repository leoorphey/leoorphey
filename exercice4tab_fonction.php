 <?php

function pwd(string $mdp){



    if (strlen($mdp)>=8 && ctype_alnum($mdp) ){

       echo true;
    }
   


}


pwd("eeeehjggkgkhhjhkh32");


?>