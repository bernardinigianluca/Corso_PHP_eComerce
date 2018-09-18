<?php 
date_default_timezone_set("Europe/Rome");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gestire data e orario con php</title>
    </head>
    <body>
        <?php
            echo "Oggi è " . date("l") . ". Sono le ore: ". date("H:i:s")." del giorno: ". date("d/m/Y");
            $mesi = array(1 => "Gennaio","Febbraio","Marzo","Aprile","Maggio",
                "Giugno","Luglio","Agosto","Settembre","Ottobre","Novembre","Dicembre");
            $settimana = array("Domenica","Lunedì","Martedì","Mercoledì","Giovedì","Venerdì","Sabato");
            echo '<br>';
            echo '<br>';
            echo "Oggi è " . $settimana[date("w")].". Sono le ore: ". 
                    date("H:i:s") . " del giorno: " . date("d") . " " . $mesi[date("n")] . " " . date("Y");
        ?>
    </body>
</html>
