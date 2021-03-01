<?php


session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Shop</title>
  </head>
  <body>
   <?php
    
    include './navbar.php';
/*     if(isset($_SESSION['idUtenteAnnuncioPubblicato'])){
    $idUtenteAnnu=$_SESSION['idUtenteAnnuncioPubblicato'];
    
  } */
  /* qui ho inserito il valore della variabile globale nella varibale locale ho usato if per verificare se la variable session che appena 
  creato nel file precende essiste o no se essite allora lo salvi nella variable chiamata $idUtenteAnnu*/

  $idUtente= $_SESSION['idUtente'];

    if(isset($_GET['inseritoAnnuncioFalito']) && $_GET['inseritoAnnuncioFalito'] == true){
      $alert= '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
      <strong>Messaggio</strong>Annucio del libro non è stato registrato, Fallito!.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    echo $alert;
    if($alert!=""){
      ?>
        <script>
        setTimeout(() => {
            window.location = "./Shop.php";
        }, 2000)
        </script>
        <?php
    }
  }else if(isset($_GET['inseritoAnnuncio']) && $_GET['inseritoAnnuncio'] == true){
    $alert1= '<div class="alert my-0 alert-success alert-dismissible fade show" role="alert">
    <strong>Messaggio</strong>Annuncio del libro è stato registrato!!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo $alert1;
  if($alert1!=""){
    ?>
      <script>
      setTimeout(() => {
          window.location = "./Shop.php";
      }, 2000)
      </script>
      <?php
  }
}

?>
<div class="container">
<div class=" my-2 row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php

        include './db.php';
        $sql="SELECT utenti.Nome,utenti.Email,utenti.Cognome,annunci.nomeLibro,annunci.Foto,annunci.annoAcquisto,annunci.Descrizione FROM annunci,utenti where annunci.KsUtenti=utenti.idUtente";
        $res=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($res)){
          
            $nomeUtente=$row['Nome'];
            $emailUtente=$row['Email'];
            $cognomeUtente=$row['Cognome'];

            $nomeLibro=$row['nomeLibro'];
            $Foto=$row['Foto'];
            $annoAcquisto=$row['annoAcquisto'];
            $Descrizione=$row['Descrizione'];


            
        
            echo '
            <div class="col">
            <div class="card shadow-sm">
            <img src="'.$Foto.'" class="bd-placeholder-img card-img-top" width="100%" height="225"/>
                <div class="card-body">
                <h6 class="text-danger"><span class="text-dark">IL Nome di Libro</span>:<b>'.$nomeLibro.'</b></h6>
                <h6 class="text-danger"><span class="text-dark">Anno di Acquisto del Libro</span>:<b>'.$annoAcquisto.'</b></h6>
                <h6 class="text-danger"><span class="text-dark">Pubblicatore</span>:<b>'.$cognomeUtente.' '.$nomeUtente.'</b></h6>
                <h6 class="text-danger"><span class="text-dark">Email</span>:<b>'.$emailUtente.'</b></h6>
                  <p class="card-text"><b>'.$Descrizione.'</b></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" data-toggle="modal" data-target="#InfoModal" class="btn btn-sm btn-outline-secondary">Info ℹ</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
            </div>
            </div>';
        }
       
        ?>
    </div>
</div>

<!-- Studente who posted the ads Modal -->


<!-- Modal -->
<div class="modal fade" class="InfoModal" tabindex="-1" role="dialog" aria-labelledby="InfoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="InfoModalLabel">Informazione ℹ </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <h6 class="text-damger">Studente Informazione</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>