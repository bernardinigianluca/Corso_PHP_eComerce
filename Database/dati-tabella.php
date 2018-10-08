<?php
    include './conDB.php'; 
    include './functions.php';
    $margin_top = "margin-top:80px";
    $title_page = "Dati in tabella";
    include './Includes/header.php';
    include './Includes/navbar.php';
    ?>
    
    <div class="container container-fluid" style="<?php echo $margin_top; ?>">
                <div class="shadow-sm">
                <h2 class="border bg-primary p-3 rounded mt-2 mb-2">Mostra i dati in tabella</h2> 
                </div>
                <?php
                    leggereDati();
                    mostraDatiTabella();
                ?>
        </div>
    </div>
 <?php 
    include './Includes/footer.php';