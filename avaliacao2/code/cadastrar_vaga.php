<?php 
    require_once 'classes/vagas.php';
    require_once 'classes/login.php';
    
    $validador = new Login();
    $validador->verificar_logado();

    var_dump($_POST);
    
    function validar_vaga($whatsapp, $email, $descricao, $curso, $empresa) {
        // Verificar se algum campo está vazio
        if ($whatsapp == '') {
            return "Erro: O campo WhatsApp está vazio.";
        }
        if ($email == '') {
            return "Erro: O campo Email está vazio.";
        }
        if ($descricao == '') {
            return "Erro: O campo Descrição está vazio.";
        }
        if ($curso == '') {
            return "Erro: O campo Curso está vazio.";
        }
        if ($empresa == '') {
            return "Erro: O campo Empresa está vazio.";
        }
    
        // Validar cada campo para caracteres não permitidos
        if (!validar_entrada($whatsapp)) {
            return "Erro: O campo WhatsApp contém caracteres inválidos.";
        }
        if (!validar_entrada($email)) {
            return "Erro: O campo Email contém caracteres inválidos.";
        }
        if (!validar_entrada($descricao)) {
            return "Erro: O campo Descrição contém caracteres inválidos.";
        }
        if (!validar_entrada($curso)) {
            return "Erro: O campo Curso contém caracteres inválidos.";
        }
        if (!validar_entrada($empresa)) {
            return "Erro: O campo Empresa contém caracteres inválidos.";
        }
    
        // Se todos os campos passarem nas validações, retorna verdadeiro
        return true;
    }
    
    // Função para validar entradas usando uma expressão regular
    function validar_entrada($campo) {
        $regex = "/^[a-zA-Z0-9\s.,!?\-@]+$/"; // Permitir letras, números, espaços e pontuação básica
        return preg_match($regex, $campo);
    }

    $whatsapp = htmlspecialchars($_POST['whatsapp']);
    $email = htmlspecialchars($_POST['email']);
    $descricao = htmlspecialchars($_POST['descricao']);
    $curso = htmlspecialchars($_POST['curso']);
    $empresa = htmlspecialchars($_POST['empresa']);

    if($validador->verificar_logado()) {
        if(validar_vaga($whatsapp, $email, $descricao, $curso, $empresa)) {
            $vagas = new Vagas();
            $vagas-> adicionar_vaga($empresa, $descricao, $curso, $empresa, $email, $whatsapp);
            header('Location: home.php');
        } else {
            echo "Erro: Por favor, verifique os dados inseridos. Caracteres especiais não são permitidos.";
        }
    }
?>
