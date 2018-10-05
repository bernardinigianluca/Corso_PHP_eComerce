<?php
    $margin_top = "80px";
    include './conDB.php';
    include './functions.php';
    leggereDati();
    include './Includes/header.php';
    include './Includes/navbar.php';
?>

      <div class="container" style="margin-top: 80px">  
        <div class="shadow-sm">
           <h2 class="border bg-primary p-3 rounded mt-2 mb-2">Leggere dati con PHP</h2> 
        </div>
      
      <div class="col-sm-6">
          <?php mostraDati(); ?>
      </div>
    </div> 
    
<?php 
    include './Includes/footer.php';
