<?php
require_once 'classes/vagas.php';
require_once 'classes/login.php';

$validador = new Login();
$validador->verificar_logado();

$id = isset($_GET['id']) ? $_GET['id'] : '';

$vagas = new Vagas();
$vaga = $vagas->buscar_vaga($id)[0];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Vaga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-4">
        <h2>Detalhes da Vaga</h2>
        
        <?php 
        if ($vaga): ?>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">Empresa: <?php echo ($vaga['nome_empresa']); ?></h5>
                            <p class="card-text">
                                Descrição: <?php echo ($vaga['descritivo_vaga']); ?><br>
                                Curso: <?php echo $vaga['curso'] == 1 ? 'DSM' : 'GE'; ?><br>
                                Contato: <?php echo ($vaga['email_contato']); ?><br>
                                WhatsApp: <?php echo ($vaga['numero_whatsapp']); ?><br>
                            </p>
                            <div class="d-flex justify-content-between">
                                <form action="deletar_vaga.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo ($vaga['id']); ?>">
                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                </form>
                                <h5>ID: <?php echo ($vaga['id']); ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="alert alert-warning" role="alert">
                Vaga não encontrada para o ID informado.
            </div>
        <?php endif; ?> 

        <div class="text-center mt-4">
            <a href="home.php" class="btn btn-primary">Voltar ao Menu</a>
        </div>

    </div>

</body>

</html>
