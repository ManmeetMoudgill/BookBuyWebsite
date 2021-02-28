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
$Telefono=$_POST['Telefono'];


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
        $sql="INSERT INTO `annunci`(`nomeLibro`, `annoAcquisto`, `Foto`, `codiceLibro`, `KsMaterie`, `KsUtenti`,`Descrizione`,`Telefono`) VALUES ('$nomeLibro','$AnnoDiAcquisto','$changePATH','$CodiceLibro','$Materie','$idUtente','$descrizione','$Telefono')";
        $res=mysqli_query($conn,$sql);
        if($res){
            header('Location:./index.php?inseritoAnnuncio=true');
        }else{
            header('Locatio:./index.php?inseritoAnnuncioFalito=true');
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



