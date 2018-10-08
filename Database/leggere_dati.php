<?php
    global $margin_top;
    
    include './conDB.php';
    include './functions.php';
    $margin_top = "margin-top:80px";
    $title_page = "leggere dati";
    include './Includes/header.php';
    include './Includes/navbar.php';
?>

      <div class="container" style="<?php echo $margin_top; ?>">  
        <div class="shadow-sm">
           <h2 class="border bg-primary p-3 rounded mt-2 mb-2">Leggere dati con PHP</h2> 
        </div>
      
      <div class="col-sm-6">
          <?php
            leggereDati();
            mostraDati()
          ; ?>
      </div>
    </div> 
    
<?php 
    include './Includes/footer.php';
