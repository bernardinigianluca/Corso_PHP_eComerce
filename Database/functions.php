<?php 
       
function creaDati(){
    global $result;
    global $con;
    global $margin_top;
    
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
                $margin_top = "0px";
                msgbox_Login();
            }
            mysqli_close($con);
        }
    }
}

function msgbox_Login(){
    echo    '<div class="container" style="margin-top:80px">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Congratulazioni!</strong> I dati sono stati inseriti.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            </div>';
   }
   
function aggiornaDati(){
    global $con;
    global $result;
    global $margin_top;
    
    //Selezionari i dati della tabella user
    $sql = "SELECT * FROM users ORDER BY id";
    $result = mysqli_query($con, $sql);

    if (!$result){
        echo 'Messagio di errore: ' . mysqli_error($con);
    }
    
    if (isset($_POST["submit"])){
    
        $user = $_POST["username"];
        $pass = $_POST["password"];
        $id = $_POST["id"];

        $sql = "UPDATE users SET username = '$user', password = '$pass' WHERE id='$id'";

        if(mysqli_query($con, $sql)){
            $margin_top = "0px";
            msgbox_update();
        } else {
            echo "Imposibile esseguire $sql mysqli_error($con)";
        }
    }
}

function riempiElenco(){ 
    global $result;
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['ID'];
        echo "<option value='$id'>$id</option>";
    }
}

function msgbox_update(){
    echo    '<div class="container" style="margin-top:80px">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Congratulazioni!</strong> I dati sono stati aggiornati.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            </div>';
   }
 
function leggereDati(){
    global $con;
    global $result;
     //Selezionari i dati della tabella user
     $sql = "SELECT * FROM users ORDER BY id";
     $result = mysqli_query($con, $sql);

     if (!$result){
         echo 'Messagio di errore: ' . mysqli_error($con);
     }
}

function mostraDati(){
    global $result;
    while($row = mysqli_fetch_assoc($result)){
    echo '<pre class="border bg-light p-3 rounded shadow mb-2">';
    print_r($row);
    echo '</pre>';
    }
}

function cancellaDati(){
   global $result;
   global $con;
   global $margin_top;
   
    //Cancella dati
     if (isset($_POST["delete"])){

        $id = $_POST["id"];

        $sql = "DELETE FROM users WHERE id='$id'";

        if(mysqli_query($con, $sql)){
            $margin_top = "0px";
            func_messagio();
        } else {
            echo "Imposibile esseguire $sql mysqli_error($con)";
        }
    }  

    //Selezionari i dati della tabella user
    $sql = "SELECT * FROM users ORDER BY id";
    $result = mysqli_query($con, $sql);

    if (!$result){
        echo 'Messagio di errore: ' . mysqli_error($con);
    }
   
}

function func_messagio(){
    echo    '<div class="container" style="margin-top:80px">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Congratulazioni!</strong> I dati sono stati cancellati.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            </div>';
   }

   
function mostraDatiTabella(){
    global $result;
    if($result){
        if(mysqli_num_rows($result)>0){
            echo "<table class='table table-striped table-hover table-condensed table-bordered'>
                      <thead>
                          <tr> <th>ID</th> <th>username</th> <th>password</th>
                          </tr>
                      </thead>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>" . $row["ID"] . "</td>";
                        echo "<td>" . $row["username"] . "</td>";
                        echo "<td>" . $row["password"] . "</td>";
                    echo "</tr>";    
                }
            echo "</table>";
        }
    }
}
