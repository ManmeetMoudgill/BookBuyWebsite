<?php
include './db.php';
session_start();

$idUtentePubblicatoA=$_SESSION['idUtente'];





?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
    #anchorDiv{
        cursor:pointer;
    }
    </style>
    <title>Marconi Libri Usati 📚 </title>
  </head>
  <body>
    <?php
    include './links.php';
include './navbar.php';
  if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true){

echo '<div class="container w-75">
<form  action="./InserimentoAnnuncio.php"  enctype="multipart/form-data" method="post" class="row align-items-center">
  <div class="mb-3">
    <label for="NomeLibroEmail1" class="form-label">Nome Libro</label>
    <input type="text" class="form-control" name="NomeLibro" id="NomeLibro" aria-describedby="NomeLibroHelp">
   
  </div>
  <div class="mb-3">
  <label for="NomeLibroEmail1" class="form-label">Scegli la Materia</label>
  <select class="form-select" name="Materie" aria-label="Default select example">
  <option selected>Inserisci La Materia</option>';
  $sql="SELECT * FROM `Materie`";
$res=mysqli_query($conn,$sql);


while($dataFetched=mysqli_fetch_assoc($res)){
 $idMaterie=$dataFetched['idMaterie'];
 $Materia=$dataFetched['Materia'];
 echo '<option value="'.$idMaterie.'">'.$Materia.'</option>';

  }
  echo '</select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Codice Del Libro</label>
    <input type="text" class="form-control" name="CodiceLibro" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Anno di Acquisto</label>
    <input type="date" class="form-control" name="AnnoDiAcquisto" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Foto del Libro</label>
    <input type="file" class="form-control" name="FotoLibro" >
  </div>
  <div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Descrizione</label>
  <input type="text" class="form-control" name="Descrizione" >
</div>

  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>';
  }else{
      echo '<div class="container my-5">
      <div class="jumbotron">
        <h1 class="display-4">Attenzione</h1>
        <p class="lead">Devi Registrati pima di inserire Annuncio</p>
        <a id="anchorDiv" class="text-primary text-decoration-none" data-bs-target="#RegistratiModal" data-bs-toggle="modal" >Registrati qui</a>  <a id="anchorDiv" class=" mx-2 text-danger text-decoration-none" data-bs-target="#LoginModal" data-bs-toggle="modal" >Accedi  qui</a>
      
      </div>
      </div>';
  }
  
?>
    

<!-- registrati modal -->
<div class="modal fade" id="RegistratiModal" tabindex="-1" aria-labelledby="RegistratiModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="RegistratiModalLabel">Registrati </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./registrazione.php" method="post">
                        <div class="mb-3">
                            <label for="nomeInput" class="form-label">Nome</label>
                            <input type="text" class="form-control" name="Nome" id="Nome" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="cognomeInput" class="form-label">Cognome</label>
                            <input type="text" class="form-control" name="Cognome" id="Cognome"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="Email" id="Email"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="Password" id="Password">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Conferma Password</label>
                            <input type="password" class="form-control" name="CPassword" id="CPassword">
                        </div>
                        <label for="exampleInputPassword1" class="my-1form-label">Città</label>
                        <select class="form-select" name="cittaSelect" aria-label="Default select example">

                            <?php

                           
                            $sql="SELECT * FROM `citta`";
                            $res=mysqli_query($conn,$sql);

                           
                           while($dataFetched=mysqli_fetch_assoc($res)){
                             $idCitta=$dataFetched['idCitta'];
                             $cittaAll=$dataFetched['nomeCitta'];
                             echo '<option value="'.$idCitta.'">'.$cittaAll.'</option>';
                           }


                         ?>
                        </select>
                        <div class="mb-2">
                            <label for="viaInput" class="form-label">Via</label>
                            <input type="text" class="form-control" name="Via" id="Via">
                        </div>
                        <div class="mb-2">
                            <label for="NumeroCivicoInput" class="form-label">Numero Civico</label>
                            <input type="number" class="form-control" name="NumeroCivico" id="NumeroCivico">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



<!-- login modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="LoginModalLabel">Accedi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./loginHandler.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="Email" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="Password" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
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