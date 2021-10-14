<?php
    session_start();
    if( !isset($_SESSION['nome']) ){
    	session_destroy();
        header('location:../../cadas.html');
    } else {
        $nome = $_SESSION['nome'];
    }

?>