<?php
   session_start();
   include 'conecta.php';
   header('content-type: text/html charset= utf-8');


   $nome_fantasia=$_POST["nome_fantasia"];
   $razao_social=$_POST["razao_social"];
   $email=$_POST["email"];
   $cnpj=$_POST["cnpj"];
   $telefone=$_POST["telefone"];
   $cep=$_POST["cep"];
   $estado=$_POST["estado"];
   $cidade=$_POST["cidade"];
   $bairro=$_POST["bairro"];
   $rua=$_POST["rua"];
   $complemento=$_POST["complemento"];
   $numero=$_POST["numero"];

   

   mysqli_select_db($conecta,"tcc") or print(mysqli_error());
   $sql = "INSERT INTO cadastro_fornecedor (nome_fantasia,razao_social,email,cnpj,telefone,cep,estado,cidade,bairro,rua,complemento,numero)
           VALUES ('$nome_fantasia','$razao_social', '$email', '$cnpj','$telefone','$cep','$estado','$cidade','$bairro','$rua','$complemento','$numero')";


    mysqli_query($conecta, $sql);

    mysqli_close($conecta);
    header('location:../cadastro_fornecedor.php');
?>