<?php
include'connessione.php.';
session_start();
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="INTUITIVE, Sample Product">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.8.0, nicepage.com">


    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">


    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "url": "index.html",
        "sameAs": []
    }
    </script>

    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

    <title>Hello, world!</title>
</head>

<body data-home-page="Home.html" data-home-page-title="Home" class="u-body">




    <?php
    //NavBar
    include 'Nav.php';










    //Allert ACCOUNT CREATO CON SUCCESSO
      if(isset($_GET['Signup']) && $_GET['Signup'] == true){
          $alert= '<div class="alert my-0 alert-success alert-dismissible fade show" role="alert">
                <strong>Messaggio</strong> Account creato con successo.Puoi Effetuare il login.
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
      }

     // ALLERT PASSWORD NON CORRISPONDONO
      else if(isset($_GET['passwordWrong']) && $_GET['passwordWrong'] == true){
        $alert1= '<div class="alert my-0 alert-success alert-dismissible fade show" role="alert">
        <strong>Messaggio</strong> Password non corrispondono.
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
      
      }
// ALLERT HAI EFFETTUATO IL LOGIN
 elseif(isset($_GET['loggedIn']) && $_GET['loggedIn'] == true){
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
//ALLERT PASSWORD SBAGLIATA NELLA FASE DI LOGIN
else if(isset($_GET['passwordErro']) && $_GET['passwordErro'] == true){
    $alert3= '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
    <strong>Messaggio</strong>Password Errata! 🙂 
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
//UTENTE NON REGISTRATO.
else if(isset($_GET['signUpFirst']) && $_GET['signUpFirst'] == true){
    $alert4= '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
    <strong>Messaggio</strong>Registarti Prima!
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
//SEI USCITO DAL TUO ACCOUNT
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
    <strong>Messaggio</strong>Annuncio inserito correttamente
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
    <strong>Messaggio</strong>Inserimento annuncio Fallito
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
?>

    <section class="u-clearfix u-white u-section-1" id="carousel_f724">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div style="padding-bottom:100px;" id="carousel-963b" data-interval="2500" data-u-ride="carousel"
                class="u-carousel u-carousel-duration-4500 u-carousel-fade u-expanded-width u-slider u-slider-1"
                data-pause="false">
                <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
                    <li data-u-target="#carousel-963b" class="u-active u-grey-30 u-shape-circle" data-u-slide-to="0"
                        style="height: 10px; width: 10px;"></li>
                    <li data-u-target="#carousel-963b" class="u-grey-30 u-shape-circle" data-u-slide-to="1"
                        style="height: 10px; width: 10px;"></li>
                </ol>
                <div class="u-carousel-inner" role="listbox">
                    <div class="u-active u-carousel-item u-container-style u-slide">
                        <div
                            class="u-container-layout u-valign-bottom-md u-valign-bottom-sm u-valign-top-xs u-container-layout-1">
                            <img style="padding-bottom:100px;"
                                src="images/338839b918498ae3b1e22d1d5d88f1ee2bbd5b16d47ecb4fb8495a75f635305cbc9b0cdc4f616e4cbcd4770262e28de5a1a9209cb314ce0ab5fd5b_12801.jpg"
                                alt="" class="u-image u-image-default u-image-1" data-image-width="1280"
                                data-image-height="960">
                            <div
                                class="u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-palette-3-base u-group-1">
                                <div class="u-container-layout u-container-layout-2">
                                    <h2 class="u-custom-font u-font-oswald u-text u-text-1">NON È MAI STATO COSÌ
                                        FACILE&nbsp;VENDERE IL TUO LIBRO </h2>
                                    <p class="u-text u-text-2">Il portale in cui puoi acquistare e vendere i tuoi libri
                                        in estrama facilità.</p>
                                    <a href="InserimentoLibro.php" class="u-btn u-button-style u-white u-btn-1">vendi il
                                        tuo libro</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-carousel-item u-container-style u-expanded-width u-slide">
                        <div
                            class="u-container-layout u-valign-bottom-md u-valign-bottom-sm u-valign-top-xs u-container-layout-3">
                            <img src="images/4ab2502ff8ed4a438fb241b3cb8de625ed2fc70f90ab2637a1e1dbee0febe8036e0833b4eafe1db4e5c551a2872d8e053128d9bf84fc3a5bdc30f9_1280.jpg"
                                alt="" class="u-image u-image-default u-image-2" data-image-width="150"
                                data-image-height="99">
                            <div
                                class="u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-palette-3-base u-group-2">
                                <div class="u-container-layout u-valign-middle u-container-layout-4">
                                    <p class="u-text u-text-3">Qui puoi vendere ed acquistare libri di tutte le materie
                                        delle scuole superiori .</p>
                                    <p class="u-text u-text-4">Image from </p>
                                    <a href="shop.php" class="u-btn u-button-style u-white u-btn-2">visita lo shop</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-opacity u-opacity-70 u-palette-3-base u-spacing-15 u-text-body-color u-carousel-control-1"
                    href="#carousel-963b" role="button" data-u-slide="prev">
                    <span aria-hidden="true">
                        <svg viewBox="0 0 477.175 477.175">
                            <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path>
                        </svg>
                    </span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-opacity u-opacity-70 u-palette-3-base u-spacing-15 u-text-body-color u-carousel-control-2"
                    href="#carousel-963b" role="button" data-u-slide="next">
                    <span aria-hidden="true">
                        <svg viewBox="0 0 477.175 477.175">
                            <path
                                d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z">
                            </path>
                        </svg>
                    </span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>


    <footer class="u-clearfix u-footer u-grey-80" id="sec-d69e">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
                <a class="u-social-url" title="facebook" target="_blank" href=""><span
                        class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link"
                            preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7ea0"></use>
                        </svg><svg class="u-svg-content" id="svg-7ea0" style="color: rgb(59, 89, 152);">
                            <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                            <path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path>
                        </svg></span>
                </a>
                <a class="u-social-url" title="twitter" target="_blank" href=""><span
                        class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link"
                            preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f44a"></use>
                        </svg><svg class="u-svg-content" id="svg-f44a" style="color: rgb(85, 172, 238);">
                            <circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle>
                            <path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path>
                        </svg></span>
                </a>
                <a class="u-social-url" title="instagram" target="_blank" href=""><span
                        class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link"
                            preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e68b"></use>
                        </svg><svg class="u-svg-content" id="svg-e68b" style="color: rgb(197, 54, 164);">
                            <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                            <path fill="#FFFFFF"
                                d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z">
                            </path>
                            <path fill="#FFFFFF"
                                d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z">
                            </path>
                            <path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path>
                        </svg></span>
                </a>
                <a class="u-social-url" title="linkedin" target="_blank" href=""><span
                        class="u-icon u-icon-circle u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link"
                            preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6c54"></use>
                        </svg><svg class="u-svg-content" id="svg-6c54" style="color: rgb(0, 122, 185);">
                            <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                            <path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path>
                        </svg></span>
                </a>
            </div>
        </div>
    </footer>
    <section class="u-backlink u-clearfix u-grey-80">
        <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">

    </section>








    <!-- fare login -->

    <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="LoginModalLabel">Accedi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="login.php" method="post">

                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="Email" class="form-control" name="Email" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="Password" placeholder="Password">
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




    <!-- fare Registrazione -->


    <div class="modal fade" id="RegistrationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="registrazione.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input type="Text" class="form-control" name="Nome" id="Nome" aria-describedby="emailHelp"
                                required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cognome</label>
                            <input type="Text" class="form-control" name="Cognome" id="Cognome"
                                aria-describedby="emailHelp" required>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="Text" class="form-control" name="Email" id="Telefono"
                                aria-describedby="emailHelp" required>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Telefono</label>
                            <input type="Text" class="form-control" name="Telefono" id="Telefono"
                                aria-describedby="emailHelp" required>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="Password" id="Password" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Conferma Password</label>
                            <input type="password" class="form-control" name="ConfermaPassword" id="ConfermaPassword"
                                required>
                        </div>

                        <label class="form-label">Inserisci la tua città</label>
                        <select class="form-select" name="città" aria-label="Default select example">

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
                        <div class="mb-3">
                            <label class="form-label">Via</label>
                            <input type="Text" class="form-control" name="Via" id="Via" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Telefono</label>
                            <input type="Text" class="form-control" name="Telefono" id="Telefono" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NumeroCivico</label>
                            <input type="Number" class="form-control" name="NumeroCivico" id="CAP" required>
                        </div>

                        <button type="submit" name="create" class="btn btn-primary">Submit</button>
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