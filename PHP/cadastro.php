<?php
   session_start();
   include 'conecta.php';
   header('content-type: text/html charset= utf-8');


   $nome=$_POST["nome"];
   $sobrenome=$_POST["sobrenome"];
   $email=$_POST["email"];
   $senha=$_POST["senha"];
   

   mysqli_select_db($conecta,"tcc") or print(mysqli_error());
   $sql = "INSERT INTO registro_cliente (nome,sobrenome,email,senha)
           VALUES ('$nome', '$sobrenome', '$email','$senha')";

    echo "Cadastrado com Sucesso";

    mysqli_query($conecta, $sql);

    mysqli_close($conecta);
?>