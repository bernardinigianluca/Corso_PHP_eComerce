<?php
date_default_timezone_set("Europe/Rome");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gestione dei file</title>
    </head>
    <body>
        <?php 
        $filename = ("files/miotesto.txt");
        $use_include_path = true;
        
        echo "<h1>FOpen/FClose</h1>";
        if (is_file($filename)){
            $file = fopen($filename, "r", $use_include_path);
            echo 'Auguri, il file ed stato aperto.';
            echo '<br>Contenuto del file<br>';
            $contenutofile = file_get_contents($filename, $use_include_path);
            echo $contenutofile;
            fclose($file);
            echo '<br>';
            echo 'Il file ed stato chiuso.';
        } else {
            echo "Mi dispiace file non essiste!";
        }
        
        //=================
        echo '<h1>Fwrite</h1>';
        $file = fopen($filename, "w", $use_include_path);
        $data=time();
        $data=date('H:i:s', $data);
        $string = "Questa è una nuova riga " . $data;
        fwrite($file, $string);
        $contenutofile = file_get_contents($filename, $use_include_path);
        echo $contenutofile;
        ?>
        
        
    
    </body>
</html>
