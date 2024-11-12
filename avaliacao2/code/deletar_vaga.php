<?php 
    require_once 'classes/vagas.php';
    require_once 'classes/login.php';
    
    $validador = new Login();
    $validador->verificar_logado();

    if($validador->verificar_logado()) {
        if(isset($_POST['id'])) {
            $vagas = new Vagas();
            $vagas->excluir_vaga($_POST['id']);
            header('Location: home.php');
        }
    }
    
?>