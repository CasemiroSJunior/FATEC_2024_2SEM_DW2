<?php
require('header.php');


# print_r($_SESSION);
# print_r($_POST);
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
# print($nome);
# print($cpf);

$fp = fopen('data.txt', 'a');
fwrite($fp, $nome);
fwrite($fp, "|");
fwrite($fp, $cpf);
fwrite($fp, "\n");
fclose($fp);

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <a href="welcome.php" class="btn btn-primary">Voltar</a>
</body>
</html>