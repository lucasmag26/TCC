<?php
   session_start();
   include 'conecta.php';
   header('content-type: text/html charset= utf-8');


   $cliente=$_POST["cliente"];
   $valor=$_POST["valor"];
   $data=$_POST["data"];
   $hora=$_POST["hora"];
   
   mysqli_select_db($conecta,"dash") or print(mysqli_error());
   $sql = "INSERT INTO cadastro_venda (cliente,valor,data,hora)
           VALUES ('$cliente', '$valor', '$data','$hora')";


    mysqli_query($conecta, $sql);

    mysqli_close($conecta);
    header('location:../cadastro_venda.php');
?>