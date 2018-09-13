<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Scope delle variabili in Php</title>
    </head>
    <body>
        <?php
        $globale = "Io sono fuori";
        
        function trovaVariabile(){
            global $locale;
            $locale = "io sono dentro";
            echo $locale;
        }
        
        trovaVariabile();
        echo "<br>";
        echo $globale . " " . $locale;
        ?>
    </body>
</html>
