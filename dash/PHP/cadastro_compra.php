<?php
   session_start();
   include 'conecta.php';
   header('content-type: text/html charset= utf-8');


   $data=$_POST["data"];
   $empresa=$_POST["empresa"];
   $hora=$_POST["hora"];
   $valor=$_POST["valor"];

   

   mysqli_select_db($conecta,"dash") or print(mysqli_error());
   $sql = "INSERT INTO cadastro_compra (data,empresa,hora,valor)
           VALUES ('$data','$empresa', '$hora', '$valor')";


    mysqli_query($conecta, $sql);

    mysqli_close($conecta);
    header('location:../cadastro_compra.php');
?>