<?php
session_start();
/* unset($_SESSION['idUtente']); */
unset($_SESSION['username']);
unset($_SESSION['loggedIn']);

header('Location:./index.php?loggedOut=true');

/* qui prima avevo distrutto tutte le variable del session,adesso ne ho destrutto alcune,non ho disturtto 
la una variable session che mi serviava per vedere id del utente che pubblica un annuncio */


?>