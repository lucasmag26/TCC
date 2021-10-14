<?php
   session_start();
   include 'conecta.php';
   header('content-type: text/html charset= utf-8');


   $produto=$_POST["produto"];
   $quantidade=$_POST["quantidade"];
   $fornecedor=$_POST["fornecedor"];
   
   mysqli_select_db($conecta,"dash") or print(mysqli_error());
   $sql = "INSERT INTO cadastro_estoque (produto,quantidade,fornecedor)
           VALUES ('$produto', '$quantidade', '$fornecedor')";


    mysqli_query($conecta, $sql);

    mysqli_close($conecta);
    header('location:../cadastro_estoque.php');
?>