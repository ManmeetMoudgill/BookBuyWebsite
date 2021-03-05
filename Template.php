<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Informazione Libro 📚 </title>
  
</head>

<body>

<?php
include './navbar.php';
include './db.php';
?>
    <?php
    
$idAnnuncio=$_GET['idAnnuncio'];

$sql="SELECT utenti.Nome,utenti.Email,utenti.Cognome,annunci.idAnnuncio,annunci.nomeLibro,annunci.Foto,annunci.annoAcquisto,annunci.Prezzo,annunci.Descrizione,materie.Materia FROM annunci,utenti,materie where annunci.KsUtenti=utenti.idUtente AND annunci.KsMaterie=materie.idMaterie and annunci.idAnnuncio=$idAnnuncio";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
  
    $nomeUtente=$row['Nome'];
    $emailUtente=$row['Email'];
    $cognomeUtente=$row['Cognome'];

    $nomeLibro=$row['nomeLibro'];
    $Foto=$row['Foto'];
    $annoAcquisto=$row['annoAcquisto'];
    $Descrizione=$row['Descrizione'];
    $Materie=$row['Materia'];
    $prezzo=$row['Prezzo'];
    $idAnnuncio=$row['idAnnuncio'];

?>


<!-- template code here -->


<div class="row featurette my-4">
      <div class="col-md-7 d-flex justify-content-center align-items-center flex-column">
        <h4 class="featurette-heading text-dark"><?php echo $nomeLibro; ?>
        <span class="text-dark"><?php  echo $annoAcquisto;  ?></span></h4>
        <h4 class="text-dark"><?php  echo $cognomeUtente." ".$nomeUtente; ?></h4>
        <h4 class="text-dark"><?php  echo $emailUtente ?></h4>
        <h4 class="text-dark"><?php  echo $prezzo ?></h4>
        <h4 class="text-dark"><?php  echo $Materie ?></h4>
        <p class="lead"><?php echo $Descrizione;  ?></p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="350" height="350" src="<?php echo $Foto;?>"></img>

      </div>
</div>         
        <!-- footer -->
     <!-- <footer class="footer">
      <div class="bg-dark container-fluid my-3">
        <span class="text-light">@copyright.All Rights Reserved</span>
      </div>
    </footer>
   -->
 


  <!-- Studente who posted the ads Modal -->
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


    <!-- login modal here -->
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

    























  
   


    <!-- /END THE FEATURETTES -->







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>