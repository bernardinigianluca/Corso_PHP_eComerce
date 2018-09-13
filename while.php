<!doctype html >
<html>
    <head>
        <meta charset="utf-8">
        <title>Esercizio con while</title>
    </head>
    <body>
        <?php 
        
        $spesa = 2;
        $budget = 20;
        
        while($spesa<=$budget){
            echo "Ho speso $spesa €, posso spender ancora " . ($budget-$spesa)."€ <br>";
            $spesa++;
        }
            
        ?>
    </body>
</html>

