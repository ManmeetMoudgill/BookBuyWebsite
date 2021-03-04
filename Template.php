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
                                  
                            
                                    <!--/product_old_price-->
                                    <!--product_regular_price-->
                                    <div class="u-price u-text-palette-4-base"
                                        style="font-size: 1.5rem; font-weight: 700;">
                                        <h4 class="text-primary my-0"><?php echo $prezzo."£";?></h4>
                                        <h4 class="text-primary my-0"><?php echo $annoAcquisto;?></h4>
                                        <h4  class="text-primary my-0"><?php echo $cognomeUtente." ".$nomeUtente;?></h4>
                                        <h4 class="text-primary my-0"><?php echo $emailUtente;?></h4>
                                        <h4 class="text-primary my-0"><?php echo $Materie;?></h4>
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
        </div>
    </section>           
        <!-- footer -->
        <footer class="footer">
      <div class="bg-dark container-fluid my-3">
        <span class="text-light">@copyright.All Rights Reserved</span>
      </div>
    </footer>
  
 


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