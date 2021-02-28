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
    <?php
 include './db.php';

?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Marconi Libro Vendita</title>
</head>

<body>
  
    <?php
    include './navbar.php';
    
if(isset($_GET['Signup']) && $_GET['Signup'] == true){
  $alert= '<div class="alert my-0 alert-success alert-dismissible fade show" role="alert">
        <strong>Messaggio</strong>Account creato con successo.Puoi Effetuare il login.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      echo $alert;
      if($alert!=""){
        ?>
    <script>
    setTimeout(() => {
        window.location = "./index.php";
    }, 2000)
    </script>
    <?php
    }
}else if(isset($_GET['passwordWrong']) && $_GET['passwordWrong'] == true){
  $alert1= '<div class="alert my-0 alert-success alert-dismissible fade show" role="alert">
  <strong>Messaggio</strong>Account creato con successo.Puoi Effetuare il login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
echo $alert1;
if($alert1!=""){
  ?>
    <script>
    setTimeout(() => {
        window.location = "./index.php";
    }, 2000)
    </script>
    <?php
}

}else if(isset($_GET['loggedIn']) && $_GET['loggedIn'] == true){
    $alert2= '<div class="alert my-0 alert-success alert-dismissible fade show" role="alert">
    <strong>Messaggio</strong>Hai Effetuato il login! 🙂 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo $alert2;
  if($alert2!=""){
    ?>
      <script>
      setTimeout(() => {
          window.location = "./index.php";
      }, 2000)
      </script>
      <?php
  }
}
else if(isset($_GET['passwordErro']) && $_GET['passwordErro'] == true){
    $alert3= '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
    <strong>Messaggio</strong>Password Errato! 🙂 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo $alert3;
  if($alert3!=""){
    ?>
      <script>
      setTimeout(() => {
          window.location = "./index.php";
      }, 2000)
      </script>
      <?php
  }
}
else if(isset($_GET['signUpFirst']) && $_GET['signUpFirst'] == true){
    $alert4= '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
    <strong>Messaggio</strong>Registarti Prima!.Risulta Utente non Registrato 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo $alert4;
  if($alert4!=""){
    ?>
      <script>
      setTimeout(() => {
          window.location = "./index.php";
      }, 2000)
      </script>
      <?php
  }
}
else if(isset($_GET['loggedOut']) && $_GET['loggedOut'] == true){
    $alert5= '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
    <strong>Messaggio</strong>Sei Uscito dal tuo Account!! Accedi Per Tornare
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo $alert5;
  if($alert5!=""){
    ?>
      <script>
      setTimeout(() => {
          window.location = "./index.php";
      }, 2000)
      </script>
      <?php
  }
}
else if(isset($_GET['inseritoAnnuncio']) && $_GET['inseritoAnnuncio'] == true){
    $alert6= '<div class="alert my-0 alert-success alert-dismissible fade show" role="alert">
    <strong>Messaggio</strong>Annuncio del libro è stato registrato!!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo $alert6;
  if($alert6!=""){
    ?>
      <script>
      setTimeout(() => {
          window.location = "./index.php";
      }, 2000)
      </script>
      <?php
  }
}
else if(isset($_GET['inseritoAnnuncioFalito']) && $_GET['inseritoAnnuncioFalito'] == true){
    $alert7= '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
    <strong>Messaggio</strong>Annucio del libro non è stato registrato, Fallito!.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo $alert7;
  if($alert7!=""){
    ?>
      <script>
      setTimeout(() => {
          window.location = "./index.php";
      }, 2000)
      </script>
      <?php
  }
}
else if(isset($_GET['formatoNonValido']) && $_GET['formatoNonValido'] == true){
    $alert8= '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
    <strong>Messaggio</strong>Il formato del imagine risulta non valido!!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo $alert8;
  if($alert8!=""){
    ?>
      <script>
      setTimeout(() => {
          window.location = "./index.php";
      }, 2000)
      </script>
      <?php
  }
}



?>




    <!-- login and edit modals here -->

    <!-- signup modal -->
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