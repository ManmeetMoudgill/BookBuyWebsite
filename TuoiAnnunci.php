<?php


session_start();
$idUtente= $_SESSION['idUtente'];

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
    include './links.php';
    include './navbar.php';
    if(isset($_GET['annuncioEliminato']) && $_GET['annuncioEliminato'] == true){
      $alert= '<div class="alert my-0 alert-success alert-dismissible fade show" role="alert">
      <strong>Messaggio</strong>Annucio è stato Eliminato!.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    echo $alert;
    if($alert!=""){
      ?>
        <script>
        setTimeout(() => {
            window.location = "./TuoiAnnunci.php";
        }, 2000)
        </script>
        <?php
    }
  }else  if(isset($_GET['annuncioEliminatoFailed']) && $_GET['annuncioEliminatoFailed'] == true){
    $alert1= '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
    <strong>Messaggio</strong>Annucio Non è stato Eliminato!.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo $alert1;
  if($alert1!=""){
    ?>
      <script>
      setTimeout(() => {
          window.location = "./TuoiAnnunci.php";
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
        $sql="SELECT utenti.Nome,utenti.Email,utenti.Cognome,annunci.nomeLibro,annunci.Foto,annunci.idAnnuncio,annunci.annoAcquisto,annunci.Descrizione FROM annunci,utenti where annunci.KsUtenti=utenti.idUtente and utenti.idUtente=$idUtente";
        


        $res=mysqli_query($conn,$sql);
        $ris=mysqli_num_rows($res);
        if($ris==0){
          echo '<div class="container my-5">
          <div class="jumbotron">
            <h1 class="display-4">Attenzione</h1>
            <p class="lead">Devi Inserire prima un articolo</p>
           
          
          </div>
          </div>';
        }
        else{
        while($row=mysqli_fetch_assoc($res)){
          
            $nomeUtente=$row['Nome'];
            $emailUtente=$row['Email'];
            $cognomeUtente=$row['Cognome'];

            $nomeLibro=$row['nomeLibro'];
            $Foto=$row['Foto'];
            $annoAcquisto=$row['annoAcquisto'];
            $Descrizione=$row['Descrizione'];
            $idAnnuncio=$row['idAnnuncio'];

            
        
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
                      <button type="button"  class="btn btn-sm btn-danger"><a class="text-decoration-none text-light" href="./DeleteAnnuncio.php?idAnnuncio='.$idAnnuncio.'">Delete</a></button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
            </div>
            </div>';
        }
      }
        ?>
    </div>
</div>

<!-- Studente who posted the ads Modal -->



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