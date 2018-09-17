<!doctype html >
<html>
    <head>
        <meta charset="utf-8">
        <title>Funzioni predefinite</title>
    </head>
    <body>
        
        <h1>Funzioni sugli array</h1>
        
        
        <?php 
            $fiori = array("rosa","ciclamino","gelsomino","orchidea");
            $frutta = array("pesca","mandarino","banana","pesca");
            
            $vegetali = array_merge($fiori,$frutta);
            print_r($vegetali);
            echo "<br>";
            echo count($vegetali);
            echo "<br>";
            print_r(array_count_values($vegetali));
            $contaitem = array_count_values($vegetali);
            echo "<br>";
           echo  $contaitem["rosa"] . " " . $contaitem["mandarino"];
           if(in_array("arancia", $vegetali)){
               echo "I mandarini ci sono";
           } else {
               echo 'Peccato che le mandarine non ci sono';
           }
           echo "<br>";
           array_push($vegetali, "ananas");
           print_r($vegetali);
           echo "<br>";
//           array_splice($vegetali,0,4,array("girasole","tulipano"));
//           echo "<br>";
           print_r($vegetali);
           echo "<br>";
           sort($vegetali);
           print_r($vegetali);
        ?>
    </body>
</html>


