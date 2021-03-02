<?php
session_start();
include './db.php';
if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true){

    $idAnnuncio=$_GET['idAnnuncio'];

    $sql="DELETE FROM `annunci` WHERE `idAnnuncio`=$idAnnuncio";
    $res=mysqli_query($conn,$sql);
    if($res){
        header('Location:./TuoiAnnunci.php?annuncioEliminato=true');
    }else{
        header('Location:./TuoiAnnunci.php?annuncioEliminatoFailed=true');
    }



}else{
    header('Location:./index.php');
}




?>