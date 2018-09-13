<!doctype html >
<html>
    <head>
        <meta charset="utf-8">
        <title>Esercizi con break, continue, exit, die</title>
    </head>
    <body>
        <?php 
            $utente=1;
            $numeroUtenti=20;
            
            while($utente<=$numeroUtenti){
                echo "Stampa l'utente numero $utente, ";
                echo "devono essere stampati ancora altri " . 
                        ($numeroUtenti-$utente) . " utenti <br>";
                
                if($utente >= 5)
                    break;
                
                $utente++;
            }
            echo "<hr>";
            
            for($cifra=1;$cifra<50;$cifra++){
                if ($cifra == 10) {
                continue;
                }

            echo "Stampa il numero $cifra<br>";
            }
            
            $dividi = 5;
            for($numero=$dividi;$numero>=0;$numero--){
                if ($numero == 0) {
                die("Inutile stampare una divisione che non produce risultato!");
                }
            echo "$dividi/$numero = ".($dividi/$numero)."<br>";   
            }
            
            ?>
    </body>
</html>


