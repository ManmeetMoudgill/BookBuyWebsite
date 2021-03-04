



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
                <ul class="navbar-nav me-auto my-0 mb-lg-0">
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
    