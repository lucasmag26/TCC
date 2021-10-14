<?php
    
    include 'conecta.php';
    
    header('Content-Type: text/html; charset=utf-8');
    //Meta Charset no Arquivo (UFT-8)
    
    mysqli_select_db($conecta,"banco3") or
    print(mysqli_error());
    
    $sql = "SELECT id_usuario, nome, email FROM `tb_usuario`";    
    
    $result=mysqli_query($conecta,$sql);
    
    while($consulta=mysqli_fetch_array($result))
    {
      print "Nome:$consulta[nome]-Email:$consulta[email] |||||| :: ";
      print "<a href='edit_registro.php?id=$consulta[id_usuario]'>Editar</a><br>";
    }
    mysqli_free_result($result);
    
    mysqli_query($conecta,$sql); 
    
    //encerra a conex‹o.
    mysqli_close($conecta); 
?>

