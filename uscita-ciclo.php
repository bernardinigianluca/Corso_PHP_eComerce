<!doctype html >
<html>
    <head>
        <meta charset="utf-8">
        <title>Esercizio con for loop</title>
    </head>
    <body>
        <?php 
            for($contatore=0;$contatore<=10;$contatore++){
                echo $contatore . "<br>";
            }
        
            $fiori = array("rosa","ciclamino","gardenia","azalea","orquidea");
            
            foreach($fiori as $fiore){
                echo $fiore . "<br>";
            }
            
            $libro = array("Titolo: "=>"Il nome della rosa",
                            "Pubblicato nel: "=>1980,
                            "Autore:"=>"Umberto Eco");
            foreach($libro as $chiavi => $dati){
                echo $chiavi . $dati . "<br>";
            }
            ?>
    </body>
</html>


