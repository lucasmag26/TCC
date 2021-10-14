<?php
   session_start();
   include 'conecta.php';
   header('content-type: text/html charset= utf-8');


   $compra=$_POST["compra"];
   $produto=$_POST["produto"];
   $quantidade=$_POST["quantidade"];
  $validade=$_POST["validade"];
   $valor=$_POST["valor"];

   

   mysqli_select_db($conecta,"dash") or print(mysqli_error());
   $sql = "INSERT INTO cadastro_compra_produto (compra,produto,quantidade,validade,valor)
           VALUES ('$compra','$produto', '$quantidade','$validade', '$valor')";


    mysqli_query($conecta, $sql);

    mysqli_close($conecta);
    header('location:../cadastro_compra_produto.php');
?>