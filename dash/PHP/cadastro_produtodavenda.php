<?php
   session_start();
   include 'conecta.php';
   header('content-type: text/html charset= utf-8');


   $produtofinal=$_POST["produtofinal"];
   $quantidade=$_POST["quantidade"];

   mysqli_select_db($conecta,"dash") or print(mysqli_error());
   $sql = "INSERT INTO cadastro_produtodavenda (produtofinal,quantidade)
           VALUES ('$produtofinal', '$quantidade')";


    mysqli_query($conecta, $sql);

    mysqli_close($conecta);
    header('location:../cadastro_produtodavenda.php');
?>