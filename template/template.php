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


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName="Libri";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>

<meta name="keywords" content="INTUITIVE, Sample Product">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    <link rel="stylesheet" href="./nicepage.css" media="screen">
    <link rel="stylesheet" href="./Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="./jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="./nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.8.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,990i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">


    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "url": "index.html"
    }
    </script>
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
<body data-home-page="Home.html" data-home-page-title="Home" class="u-body">
    <style>
    .mainDiv {
        padding-top: 8rem;
        padding-left: 5rem;
    }

    /* Large desktops and laptops */
    @media (max-width: 800px) {
        #bg-prova2 {
            padding-top: 2rem;
            padding-right: 3rem;
        }

        .mainDiv {
            padding-left: 0rem;
            margin-top: 2rem;
            margin-bottom: 4rem;

            /* border:2px solid red; */
        }

        .mainDiv h6 {
            font-size: 1.1rem;
        }

        #imagineres {
            width: 30rem;
            height: 30rem;
            padding-left: 2rem;
        }
    }
    </style>
    <?php


echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Marconi Libri Vendita</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Shop.php">Shop</a>
                    </li>';
                    if(!isset($_SESSION['loggedIn'])){
                   echo '<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Accedi/Registrati
                        </a>
                       <ul id="Main" class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#RegistratiModal"
                                   >Registrati</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#LoginModal"
                                    >Accedi</a></li></ul>
                        </li>';
                    }
                   echo '<li class="nav-item">
                        <a class="nav-link" href="./InserimentoLibro.php" tabindex="-1">Inserisci Il Libro</a>
                    </li>';
                    if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true){
                        echo ' <li class="nav-item">
                        <a class="nav-link text-dark"  tabindex="-1"> Benvenuto '.$_SESSION['username'].'</a>
                    </li> <li class="nav-item">
                    <a class="nav-link" href="./TuoiAnnunci.php">I Tuoi Annunci</a>
                </li>';
                    }
                    
                    
              echo '</ul>
                
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>';
                    if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true){
                        
                        echo ' <button class="mx-1 btn btn btn-primary"><a href="./logout.php" class="text-decoration-none text-light">Esci</a></button>';
                    }
                   echo'
                </form>
                 </div>
        </div>
    </nav>';

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


<section class="u-align-center u-clearfix u-section-1" id="carousel_e596">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <!--product-->
            <!--product_options_json-->
            <!--{"source":""}-->
            <!--/product_options_json-->
            <!--product_item-->
            <div class="u-container-style u-expanded-width u-product u-product-1">
                <div
                    class="u-container-layout u-valign-middle-lg u-valign-middle-xl u-valign-top-sm u-valign-top-xs u-container-layout-1">
                    <!--product_image-->
                    <img alt=""
                        class="u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-product-control u-image-1"
                        src="<?php echo $Foto; ?>">
                    <!--/product_image-->
                   
                    <div
                        class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-shape-rectangle u-group-1">
                        <div class="u-container-layout u-container-layout-2">
                            <div class="u-border-3 u-border-palette-4-base u-line u-line-horizontal u-line-1"></div>
                            <!--product_title-->
                            <h2 class="u-custom-font u-font-merriweather u-product-control u-text u-text-1">
                                <a class="u-product-title-link" href="#">
                                    <?php echo $nomeLibro;?>
                                   
                                </a>
                            </h2>
                            <!--/product_title-->
                            <!--product_price-->
                            <div
                                class="u-custom-font u-font-merriweather u-product-control u-product-price u-product-price-1">
                                <div class="u-price-wrapper u-spacing-10">
                                    <!--product_old_price-->
                                    <div class="u-hide-price u-old-price"
                                        style="text-decoration: line-through !important;" wfd-invisible="true">
                                        <!--product_old_price_content-->$12
                                        <!--/product_old_price_content-->
                                    </div>
                                    <!--/product_old_price-->
                                    <!--product_regular_price-->
                                    <div class="u-price u-text-palette-4-base"
                                        style="font-size: 1.5rem; font-weight: 700;">
                                        <!--product_regular_price_content--><?php echo $prezzo;?>
                                        <!--/product_regular_price_content-->
                                    </div>
                                    <!--/product_regular_price-->
                                </div>
                            </div>
                            <!--/product_price-->
                            <!--product_content-->
                            <div class="u-product-control u-product-desc u-text u-text-2">
                                <!--product_content_content-->
                                <p><?php echo $Descrizione;?></p>
                                <!--/product_content_content-->
                            </div>
                            <!--/product_content-->
                        </div>
                    </div>
                </div>
            </div>
            <!--/product_item-->
            <!--/product-->
            <p class="u-custom-font u-text u-text-palette-1-dark-2 u-text-3">Images from <a
                    href="https://www.freepik.com/photos/man"
                    class="u-border-1 u-border-palette-4-base u-btn u-button-style u-none u-text-palette-4-base u-btn-1">Freepik</a>
            </p>
        </div>
    </section>



    <section class="u-backlink u-clearfix u-grey-80">
        <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
            <span>Website Templates</span>
        </a>
        <p class="u-text">
            <span>created with</span>
        </p>
        <a class="u-link" href="https://nicepage.com/" target="_blank">
            <span>Website Builder Software</span>
        </a>.
    </section>























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