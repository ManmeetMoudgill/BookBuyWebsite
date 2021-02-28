<?php

include './db.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
$Nome=$_POST['Nome'];
$Cognome=$_POST['Cognome'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$ConfermaPassword=$_POST['CPassword'];
$Citta=$_POST['cittaSelect'];
$Via=$_POST['Via'];
$NumeroCivico=$_POST['NumeroCivico'];

/* prima dobbiamo inserire i dati nella tabella indrizzi */
/* tra citta e indrizzi abbimao una associazione 1:N quindi una citta può essere associato a tanti indrizzi 
invece un indrzzio particolare deve essere associato ad un solo citta */

/* nella tabella indrizzio cio una chiave esterna che viene dalla tabella citta */
$newSql="INSERT INTO `indrizzi`(`via`, `idCitta`, `numeroCivico`) VALUES ('$Via','$Citta','$NumeroCivico')";
$result=mysqli_query($conn,$newSql);


/* qui ho scritto dei script per prendere idindrizzio (che è la chiave primaria della tabella indrizzio) del citta selezionato */
$sqlFetch="SELECT * FROM `indrizzi` WHERE `idCitta`='$Citta'";
$resultNew=mysqli_query($conn,$sqlFetch);
if(!$resultNew){
    echo 'something went wrong';
}
$data=mysqli_fetch_assoc($resultNew);
$idIndrizzio=$data['idIndrizzio'];/* per prendere id */




$sql="SELECT * FROM `utenti` WHERE `Email`='$Email'";
$result=mysqli_query($conn,$sql);

/* find the number of row of that particular email */
$row=mysqli_num_rows($result);
if($row>=1){
    header('Location:./index.php?failedSignup=true');
}else if($Password===$ConfermaPassword){
    $newEncryptedPassword=password_hash($Password,PASSWORD_BCRYPT);
    $confirmEncryptedPassword=password_hash($ConfermaPassword,PASSWORD_BCRYPT);
    $sqlInsert="INSERT INTO `utenti`(`Nome`, `Cognome`, `Email`, `PasswordUtente`, `ConfermaPassword`, `IdIndrizzio`) VALUES ('$Nome','$Cognome','$Email','$newEncryptedPassword','$confirmEncryptedPassword','$idIndrizzio')";
    $RESULT=mysqli_query($conn,$sqlInsert);
    if($RESULT){
        header('Location:./index.php?Signup=true');
        exit();
    }else{
        ?>
        <script>
            alert('Alert something went wrong');
        </script> 
    <?php 
        header('Location:./index.php');
    } 
}else{
        header('Location:./index.php?passwordWrong=true');
    }
}




?>