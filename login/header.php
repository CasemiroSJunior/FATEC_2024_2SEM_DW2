<?php
    require_once('sessions.php'); 
    $objeto_sessao = new Sessao;
    if (!$objeto_sessao->autenticado()) {
        header("location: index.php");
        exit;
    };
?>