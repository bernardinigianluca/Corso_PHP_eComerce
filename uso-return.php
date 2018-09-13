<!doctype html >
<html>
    <head>
        <meta charset="utf-8">
        <title>Passare parametri alle funzioni in PHP</title>
    </head>
    <body>
        
        <?php 
        
         function messaggioAuguri($messaggio){
             echo $messaggio;
         }
         
         
         $messaggio = "Complimenti!";
         messaggioAuguri($messaggio);
         echo "<br>";
         $messaggio = "Doppio complimenti!";
         messaggioAuguri($messaggio);
         
         function sommaNumeri($num1,$num2){
             $somma = $num1 + $num2;
             echo $somma;
         }
         echo "<br>";
         sommaNumeri(12,20);
        ?>
        
    </body>
</html>
