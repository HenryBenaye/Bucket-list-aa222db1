<?php
   echo("Hoeveel activiteiten wil je toevoegen").PHP_EOL;
    
   $keuze1 = readline("");
   $lijst = array ();
   if(is_numeric($keuze1)){
       
       for($i = 1; $i <= $keuze1; $i++){
            echo("Wat wil je toevoegen aan jouw bucket list?").PHP_EOL;
            array_push($lijst, readline(""));
        }
        echo("Op jou bucket list staat: ").PHP_EOL;
        echo implode("".PHP_EOL, $lijst);
   }
   else{
       echo("$keuze1 is geen getal!!");
   }
    

    
   


?>