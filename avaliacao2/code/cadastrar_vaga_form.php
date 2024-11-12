<?php 
    require_once 'classes/login.php';

    $validador = new Login();
    $validador->verificar_logado();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar vaga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-4">
        <h2>Cadastrar Vaga</h2>
        <form action="cadastrar_vaga.php" method="POST">
            <div class="mb-3">
                <label for="empresa" class="form-label">Nome da Empresa</label>
                <input type="text" class="form-control" id="empresa" name="empresa" required pattern="^[a-zA-Z0-9\s.,!?\-]+$" title="Não use caracteres especiais como < e >.">
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição da vaga</label>
                <input type="text" class="form-control" id="descricao" name="descricao" required pattern="^[a-zA-Z0-9\s.,!?\-]+$" title="Não use caracteres especiais como < e >.">
            </div>
            <div class="mb-3">
                <label for="curso" class="form-label">Curso</label>
                <select class="form-select" id="curso" name="curso" required>
                    <?php
                    require 'config/config.php';
                    for ($i = 1; $i < count($cursos) +1; $i++) {
                        if ($i == 1) {
                            echo '<option selected value="'.$i.'">'. $cursos[$i] .'</option>';
                        } else {
                            echo '<option value="'.$i.'">'.$cursos[$i].'</option>';
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Contato Email</label>
                <input type="email" class="form-control" id="email" name="email" required aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="whatsapp" class="form-label">WhatsApp</label>
                <input type="text" class="form-control" id="whatsapp" name="whatsapp" required pattern="^[0-9]+$" title="Apenas números são permitidos no WhatsApp.">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</body>

</html>
