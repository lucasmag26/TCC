<?php
   session_start();
   include 'conecta.php';
   header('content-type: text/html charset= utf-8');


   $nome=$_POST["nome"];
   $email=$_POST["email"];
   $telefone=$_POST["telefone"];
   $mensagem=$_POST["mensagem"];
   

   mysqli_select_db($conecta,"tcc") or print(mysqli_error());
   $sql = "INSERT INTO contato (nome,email,telefone,mensagem)
           VALUES ('$nome', '$email', '$telefone','$mensagem')";

    echo "Mensagem Enviada com Sucesso";

    mysqli_query($conecta, $sql);

    mysqli_close($conecta);
      header('location:/TCC/contact.html');
?>