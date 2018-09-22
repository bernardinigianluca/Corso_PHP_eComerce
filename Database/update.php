<?php 
        //Collegare al DB 
        include 'conDB.php';

        //Selezionari i dati della tabella user
        $sql = "SELECT * FROM users";
        $result_select = mysqli_query($con, $sql);

        if (!$result_select){
            die('Messagio di errore: ' . mysqli_error($con));
        }
        
        if(isset($_POST['submit'])){
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $id =$_POST['id'];
            
            $sql = "UPDATE users SET username = '$user', password = '$pass' WHERE id = $id";
            $result_update = mysqli_query($con, $sql);
            if(!$result_update){
                die('Messagio di errore: ' . mysqli_error($con));
            }
        }
?>

<!DOCTYPE html>
<html lang="en"
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Aggiornare i dati di una tabella</title>
  </head>
  <body>
    <div class="container">
        <div class="shadow-sm">
           <h2 class="border bg-primary p-3 rounded mt-2 mb-2">Aggiornare dati con PHP</h2> 
        </div>
        
        <div class="container">
              <form action=update.php method="post" >
                  
                  <div class="form-group">
                      <label >Username:</label>
                      <input class="form-control"type="text" name="username" placeholder="Enter username" required>
                  </div>
                  
                  <div class="form-group">
                      <label >Password:</label>
                      <input class="form-control" type="password" name="password" placeholder="Enter password" required>
                  </div>
                  
                  <div class="form-group">
                      <select class="" name="id">
                          <?php 
                            while($row = mysqli_fetch_assoc($result_select)){
                                $id = $row['ID'];
                                echo "<option value='$id'>$id</option>";
                            }
                          ?>
                      </select>
                  </div>
                  <input class="btn btn-primary" type="submit" name="submit" value="Aggiorna">
              </form>             
          </div>
    </div> 
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>