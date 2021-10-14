<?php
   session_start();
   include 'conecta.php';
   header('content-type: text/html charset= utf-8');


   $nome=$_POST["nome"];
   $email=$_POST["email"];
   $senha=$_POST["senha"];
   $cep=$_POST["cep"];
   $estado=$_POST["estado"];
   $cidade=$_POST["cidade"];
   $bairro=$_POST["bairro"];
   $rua=$_POST["rua"];
   $complemento=$_POST["complemento"];
   $numero=$_POST["numero"];
   $genero=$_POST["genero"];
   $telefone=$_POST["telefone"];
   $celular=$_POST["celular"];
   $rg=$_POST["rg"];
   $cpf=$_POST["cpf"];
   $cargo=$_POST["cargo"];
   $salario=$_POST["salario"];
   

   mysqli_select_db($conecta,"tcc") or print(mysqli_error());
   $sql = "INSERT INTO cadastro_funcionario (nome,email,senha,cep,estado,cidade,bairro,rua,complemento,numero,genero,telefone,celular,rg,cpf,cargo,salario)
           VALUES ('$nome', '$email', '$senha','$cep','$estado','$cidade','$bairro','$rua','$complemento','$numero','$genero','$telefone','$celular','$rg','$cpf','$cargo','$salario')";


    mysqli_query($conecta, $sql);

    mysqli_close($conecta);
    header('location:../cadastro_funcionario.php');
?>