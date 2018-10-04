<?php
    include './conDB.php';
    include './functions.php';
    $margin_top = "80px";
    creaDati();
?>

<!DOCTYPE html>
<html lang="en"
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
          crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
     <!-- Nav bar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
     <a class="navbar-brand" href="#">Navbar</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" 
             data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
             aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
             <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="leggere_dati.php">Leggere dati</a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="update.php">Aggiorna</a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="cancellare_dati.php">Cancellare</a>
         </li>
       </ul>
       <form class="form-inline my-2 my-lg-0">
         <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
       </form>
     </div>
    </nav>
<!------------->

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
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
    crossorigin="anonymous"></script>
  </body>
</html>