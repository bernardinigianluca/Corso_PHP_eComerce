<!doctype html >
<html>
    <head>
        <meta charset="utf-8">
        <title>Esercizio con if</title>
    </head>
    <body>
        <?php 
            $anni = 15;
            if($anni >= 18){
                echo("Puoi entrare");
            } elseif($anni >= 15 && $anni < 18) {
                echo("Puoi avere un accesso limitato");
            } else {
                echo("Mi dispiace non puoi entrare!");
            }
            echo "<br>";
            //operatore ternario
            $fiori = "tulipani";
            $alberi = "quercia";
            echo ($fiori == $alberi ?'uguali' :'diversi');
        ?>
    </body>
</html>
