<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Le funzioni predefinite di PHP</title>
    </head>
    <body>
        <h1>Funzioni math</h1>
        <?php
            echo sqrt(100);
            echo "<br>";
            echo max(34,78,65,66,98,201);
            echo "<br>";
            echo min(34,78,65,66,98,201);
            echo "<br>";
            echo ceil(3.2);
            echo "<br>";
            echo floor(3.8);
            echo "<br>";
            echo round(3.2);
            echo "<br>";
            echo round(3.8);
            echo "<br>";
            echo round(3.4);
            echo "<br>";
            echo rand(1,100);
        ?>
        
        <h1>Funcioni sulle stringhe</h1>
        <?php 
            $messaggio = "Ciao Studenti, vi piace il corso di php?";
            
            echo "La mia frase contiene: ". strlen($messaggio)." lettere ";
            echo " e contiene ". str_word_count($messaggio)." parole."."<br>";
            echo strtoupper($messaggio)."<br>";
            echo strtolower($messaggio)."<br>";
            echo str_replace("Ciao", "Cari", $messaggio);
        ?>
    </body>
</html>
