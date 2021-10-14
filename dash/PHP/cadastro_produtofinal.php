<?php
   session_start();
   include 'conecta.php';
   header('content-type: text/html charset= utf-8');


   $nome=$_POST["nome"];
   $preco=$_POST["preco"];
   $descricao=$_POST["descricao"];
   
   mysqli_select_db($conecta,"dash") or print(mysqli_error());
   $sql = "INSERT INTO cadastro_produtofinal (nome,preco,descricao)
           VALUES ('$nome', '$preco', '$descricao')";


    mysqli_query($conecta, $sql);

    mysqli_close($conecta);
    header('location:../cadastro_produtofinal.php');
?>