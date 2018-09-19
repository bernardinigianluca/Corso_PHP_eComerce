<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>funzioni file</title>
    </head>
    <body>
        <h1>file_put_contents</h1>
        <?php
        $filename = "files/miotesto.txt";
        $use_include_path = true;
        
         file_put_contents($filename, " Questo è un altro contenuto",FILE_APPEND)
                 or die("Mi dispiace, non è possibile scrivere nel file");
         
         $contenutofile = file_get_contents($filename, $use_include_path);
         
         echo $contenutofile;
        ?>
    </body>
</html>
