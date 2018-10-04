<?php 
    //Collegare al DB 
    include 'collegamentoDB.php'; 
?>

<?php
function creaDati(){
    if(isset($_POST["submit"])){
        
        $username = $_POST["username"];
        $pwd = $_POST["password"];
        
        if(!$username or !$pwd){
            echo 'Oops, manca alcun dato.';
        }else{

            //Inserire dati nella tabella user
            $sql = "Insert into users(id,username,password)value(NULL,'$username','$pwd')";
            $result = mysqli_query($con, $sql);
            
            if (!$result){
                echo 'Messagio di errore: ' . mysqli_error($con);
            } else {
                echo 'Dati inseriti con esito!';
            }
            mysqli_close($con);
        }
    }
}

function leggereDati(){
    //Selezionari i dati della tabella user
    $sql = "SELECT * FROM users";
    $result = mysqli_query($con, $sql);

    if (!$result){
        echo 'Messagio di errore: ' . mysqli_error($con);
    }

    while($row = mysqli_fetch_assoc($result)){

    print_r($row);
    }
}

function aggiornaDati(){
    //Selezionari i dati della tabella user
        $sql = "SELECT * FROM users";
        $result = mysqli_query($con, $sql);

        if (!$result){
            echo 'Messagio di errore: ' . mysqli_error($con);
        }
}
