<!doctype html >
<html>
    <head>
        <meta charset="utf-8">
        <title>Creare le funzioni in PHP</title>
    </head>
    <body>
        
        <?php 
        
         function init(){
             salutare();
             echo "<br>";
             direQualcosa();
         }
         
         function salutare(){
             echo "Ciao a tutti gli studenti di php!";
         }
         
         function direQualcosa(){
             echo "Php è fantastico!";
         }
         
         
         init();
         
        ?>
        
    </body>
</html>
