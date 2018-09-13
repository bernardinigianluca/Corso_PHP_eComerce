<!doctype html >
<html>
    <head>
        <meta charset="utf-8">
        <title>Uso di return</title>
    </head>
    <body>
        
        <?php 
        
        function sommaNumeri($num1,$num2){
            $somma = $num1 + $num2;
            
            return $somma;
        } 
        
        echo $risultato = sommaNumeri(15, 20);
        echo "<br>";
        echo $risultato2 = sommaNumeri($risultato, 50);
        
        ?>
        
    </body>
</html>
