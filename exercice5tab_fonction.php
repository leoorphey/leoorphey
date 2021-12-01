<?php


        function capital(string $capital){
                    echo "choisissez un pays pour connaitre la capital :\n
                France\n
                Mali\n
                Maroc\n
                Espagne\n
                Portugal\n
                Angleterre\n
                Senegal\n
                ";
        switch ($capital) {
            case "France":
            echo "Paris";
            break;
            case "Mali":
            echo "Bamako";
            break;
            case "Maroc":
            echo "rabat";

            case "Espagne":
                echo "madrid";
            break;

            case "Portugal":
                echo "lisbone";
            break;

            case "Angleterre":
                echo "Londre";
            break;
            
            case "Senegal":
                echo "Dakar";
            break;
            default:
            echo ""; 



        }








        }

capital("Senegal");


?>