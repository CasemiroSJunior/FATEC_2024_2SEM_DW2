<?php
    require_once('sessions.php'); 
    $objeto_sessao = new Sessao;
    $objeto_sessao->logout();
    header("location: index.php");
exit;
?>