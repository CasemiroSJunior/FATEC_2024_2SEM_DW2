<?php
require('classes/login.php');
$validador = new Login();
$validador->verificar_logado();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Vagas de Estágio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <center>
        <h2>Vagas de Estágio</h2>
    </center>

    <br>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <a href="login.php" class="btn btn-danger me-2">Logout</a>
                <a href="cadastrar_vaga_form.php" class="btn btn-primary">Cadastrar Vaga</a>
            </div>
            <form action="buscar_vaga.php" method="GET" class="d-flex">
                <input type="text" name="id" placeholder="Digite o ID da vaga" class="form-control me-2" required>
                <button type="submit" class="btn btn-info">Buscar</button>
            </form>
        </div>
    </div>
    <br>
    <?php
        require_once 'classes/vagas.php';
        $vagas = new Vagas();
        $listaVagas = $vagas->listar_vagas();

        echo '<div class="container">';
        echo '<div class="row">';

        for($i = 0; $i < count($listaVagas); $i++) {
            echo '
                <div class="col-md-4 mb-4"> 
                    <div class="card" style="width: 100%;"> 
                        <div class="card-body">
                            <h5 class="card-title">Empresa: '. $listaVagas[$i]['nome_empresa'] .'</h5>
                            <p class="card-text">
                                Descrição: '. $listaVagas[$i]['descritivo_vaga'] .'<br>
                                Curso: ' . ($listaVagas[$i]['curso'] == 1 ? 'DSM' : 'GE') .'<br>
                                Contato: '. $listaVagas[$i]['email_contato'] .'<br>
                                WhatsApp: '. $listaVagas[$i]['numero_whatsapp'] .'<br>
                            </p>
                            <div class="d-flex justify-content-between">
                                <form action="deletar_vaga.php" method="POST">
                                    <input type="hidden" name="id" value="'. $listaVagas[$i]['id'] .'">
                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                </form>
                                <h5>ID: '. $listaVagas[$i]['id'] .'</h5>
                            </div>
                        </div>
                    </div>
                </div>';
        }

        echo '</div>';
        echo '</div>'; 
    ?>
</body>

</html>