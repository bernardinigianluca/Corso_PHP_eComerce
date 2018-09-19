<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gestione dei file</title>
    </head>
    <body>
        <?php 
            $miofile = fopen("mio_testo1.txt","w+");
            fwrite($miofile, "Nuova riga") or die("Non posso scrivere nel file");
            fclose($miofile)
        ?>
        <h1>Fopen / Fclose </h1>
        <?php
        
        if(file_exists("mio_testo1.txt")){
            $miofile = fopen("mio_testo1.txt","w+");
            fclose($miofile);
            echo "File essistente, aperto e chiuso";
        } else {
            echo "File non essiste!";
        }
        ?>
        
        <h1>fread</h1>
        <?php 
            $gestione_file = fopen("mio_testo1.txt","w+") or die(
                    "Impossibile aprire il file");
            $contenuto_file = fread($gestione_file, filesize("mio_testo1.txt"));
            fclose($gestione_file);
            
            echo $contenuto_file;
        ?>
        
        <h1>file_get_contents</h1>
        <?php 
            $contenuto_file = file_get_contents("mio_testo1.txt") or die(
                    "Impossibile accedere al contenuto");
            
            echo $contenuto_file;
        ?>
        
        <h1>fwrite</h1>
        <?php 
            $miofile = fopen("mio_testo1.txt","w+");
            fwrite($miofile, "Nuova riga") or die("Non posso scrivere nel file");
            
            $contenuto_file = file_get_contents("mio_testo1.txt");
            
            echo $contenuto_file;
        ?>
    </body>
</html>
