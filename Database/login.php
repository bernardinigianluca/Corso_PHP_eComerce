<?php
    global $margin_top;
    include './conDB.php';
    include './functions.php';
    $margin_top = "80px";
    creaDati();
    include './Includes/header.php';
    include './Includes/navbar.php';
?>

     

      <div class="container" style="margin-top:<?php echo $margin_top ?>">
          <div class="shadow-sm">
           <h2 class="border bg-primary p-3 rounded mt-2 mb-2">La mia pagina di login</h2> 
        </div>
          <div class="container">
              <form action=login.php method="post" >
                  
                  <div class="form-group">
                      <label >Username:</label>
                      <input class="form-control"type="text" name="username" placeholder="Enter username" required>
                  </div>
                  
                  <div class="form-group">
                      <label >Password:</label>
                      <input class="form-control" type="password" name="password" placeholder="Enter password" required>
                  </div>
                  <input class="btn btn-primary" type="submit" name="submit" value="Invia">
              </form>
              
          </div>
      </div> 
    
<?php include './Includes/footer.php'; ?>