<!doctype html >
<html>
    <head>
        <meta charset="utf-8">
        <title>Array in PHP</title>
    </head>
    <body>
        <?php 
        // Array semplice
        /*$utente = array("chicco","Mario Rossi",25,"Roma","Uomo");
        
        echo $utente[1] . "<br>";
        echo $utente[3] . "<br>";*/
        
        // Array associativi
        $utente = array(
            "username" => "chicco",
            "nomeCompleto" => "Mario Rossi",
            "anni" => 25,
            "luogo" => "Roma",
            "genere" => "Uomo");
        
        echo $utente["luogo"] . "<br>";
        echo $utente["nomeCompleto"] . "<br>";
        
//        print_r($utente);
//        var_dump($utente);
        
        //Array multidimensionale
        
        $studenti = array(
            
            array(
            "username" => "chicco",
            "nomeCompleto" => "Mario Rossi",
            "anni" => 25,
            "luogo" => "Roma",
            "genere" => "Uomo"),
            
            array(
            "username" => "chicca",
            "nomeCompleto" => "Carla Rossi",
            "anni" => 30,
            "luogo" => "Urbino",
            "genere" => "donna")
        );
        
        echo "Nome utente: " . $studenti[1]["username"] . "<br>";
        echo "Nome completo: " . $studenti[1]["nomeCompleto"] . "<br>";
        
        ?>
    </body>
</html>




