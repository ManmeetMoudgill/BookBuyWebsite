<?php

if(isset($_POST['submit'])){
$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$file=$_FILES['photo'];

$filName=$file['name'];
$type=$file['type'];
$error=$file['error'];
$path=$file['tmp_name'];


if($error==0){
    $changePATH="uploads/".$fileName;
    move_uploaded_file($path,$changePATH);

    $sql="INSERT INTO `imagesprova`(`Nome`, `Cognome`, `Img`) VALUES ('$nome','$cognome','$changePATH')";
    $res=mysqli_query($con,$sql);
    if($res){
        echo 'Data has been submitted succesully';
    }else{
        echo 'some erro occured';
    }

}
}
?>