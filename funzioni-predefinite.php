<!doctype html >
<html>
    <head>
        <meta charset="utf-8">
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
        
        <h1>Funzioni sulle stringhe</h1>
        <?php 
            $messaggio = "Ciao Studenti, vi piace il corso di php?";
            
            echo "La mia frase contiene: ". strlen($messaggio)." lettere ";
            echo " e contiene ". str_word_count($messaggio)." parole."."<br>";
            echo strtoupper($messaggio)."<br>";
            echo strtolower($messaggio)."<br>";
            echo str_replace("Ciao", "Cari", $messaggio);
        ?>
        
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


