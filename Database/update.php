<?php
    global $margin_top;
    $margin_top = "80px";
    include './conDB.php';
    include './functions.php';
    aggiornaDati();
    $title_page = "aggiorna dati";
    include './Includes/header.php';
    include './Includes/navbar.php';
?>

    <div class="container" style="margin-top:<?php echo $margin_top ?>">
        <div class="shadow-sm">
           <h2 class="border bg-primary p-3 rounded mt-2 mb-2">Aggiorna dati con PHP</h2> 
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
                          <?php riempiElenco(); ?>
                      </select>
                  </div>
                  <input class="btn btn-success" type="submit" name="submit" value="Aggiorna">
              </form>             
          </div>
    </div> 
    
<?php 
    include './Includes/footer.php';