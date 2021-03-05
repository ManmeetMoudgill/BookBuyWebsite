<?php


session_start();
include './db.php';
if($_SERVER['REQUEST_METHOD']=='POST'){


$nomeLibro=$_POST['NomeLibro'];
$CodiceLibro=$_POST['CodiceLibro'];
$AnnoDiAcquisto=$_POST['AnnoDiAcquisto'];
$file=$_FILES['FotoLibro'];
$Materie=$_POST['Materie'];
$idUtente=$_SESSION['idUtente'];
$descrizione=$_POST['Descrizione'];
$prezzo=$_POST['Prezzo'];

/* $_SESSION['idUtenteAnnuncioPubblicato']=$idUtente; */ /* visto che quando il utente pubblica un annuncio viene mandato su questa pagina e ho fatto 
in modo che posso salvare il suo id usando la variable globale session ma prendo id solo chi pubblica l'annuncio */



$filName=$file['name']; /* restituisce il nome del file con estensione */
$type=$file['type'];/* restituisce il tipo del file */
$error=$file['error'];/* restituisce errore 0 o <1 o qunado tutto andato buon fine diverso da 0 quando c'e stato un errore */
$path=$file['tmp_name'];/* il percorso temporaneo che noi vogliamo cambiare poi dopo qunado andaimo a inserire all'interno del dp */


$file_estensione=explode('.',$filName); /* mi restituisce un array di cui il primo elemento è il nome e il secondo elemetno è formato del file */

$file_estensione_check=strtolower(end($file_estensione));/* converti la estensione se è scritto in maiuscolo */

$img_accettati=array('jpeg','png','svg','jpg'); /* array in cui ho messo i formati accettabili */

if($error==0){
   if(in_array($file_estensione_check,$img_accettati)){
   
        $changePATH="img/".$filName;  /* il percorso nuovo del file in cui sara salvato */
       
        
        move_uploaded_file($path,$changePATH); 
        /* per fare muovere l'immagine nella cartella creata*/
      
        $sql="INSERT INTO `annunci`(`nomeLibro`, `annoAcquisto`, `Foto`, `codiceLibro`, `KsMaterie`, `KsUtenti`, `Descrizione`, `Prezzo`) VALUES ('$nomeLibro','$AnnoDiAcquisto','$changePATH','$CodiceLibro','$Materie','$idUtente','$descrizione','$prezzo')";
        $res=mysqli_query($conn,$sql);
        if($res){
            header("Location:./Shop.php?inseritoAnnuncio=true");
        }else{
            header("Location:./Shop.php?inseritoAnnuncioFalito=true");
        }
    }else{
        ?>
        <script>
        alert('Formato non valido!! Caricare immagine del formato giusto');
        window.location = "./index.php?formatoNonValido=true";
        </script>
        <?php

    }
}else{
?>
<script>
alert('Caricamento del imagine Fallito');
</script>
<?php

}
} 



?>



