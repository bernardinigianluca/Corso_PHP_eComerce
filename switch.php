<!doctype html >
<html>
    <head>
        <meta charset="utf-8">
        <title>Esercizi con Switch</title>
    </head>
    <body>
        <?php 
            $numero = 45;
            switch ($numero){
                case 20;
                    echo "bel numero ma non sono io";
                    break;
                case 48;
                    echo "bel numero ma non sono io";
                    break;
                case 45;
                    echo "Sono io";
                    break;
                case 52;
                    echo "bel numero ma non sono io";
                    break;
                default;
                    echo "non ho trovato nulla!";
            }
        ?>
    </body>
</html>
