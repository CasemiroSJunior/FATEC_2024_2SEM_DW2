<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinhando a senha</title>
</head>

<body>
    <?php

if (!isset($_POST["senha"])) {
    ?>

        <img src="https://1.bp.blogspot.com/-FIDSfr184G0/XcNG88SCqzI/AAAAAAABRNU/J2idDJ7TtBUNQagphwjqx_ARfuqvr3dzACNcBGAsYHQ/s1600/gifs%2Banimados%2Bde%2BJohn%2BTravolta.gif" alt="John Travolta confused">
        <h1>Está perdido por aqui?</h1>
    <?php
        die();
    }

    $senha = $_POST["senha"];

    

    if ($senha == "2444666668888888") {
    ?>
        <img src="https://th.bing.com/th/id/R.2df06ad4991861fe5ee6a4f95f3952c1?rik=nr6LOZSBG04Whg&pid=ImgRaw&r=0" alt="not bad">
        <h1>Até que cê sabe de algo...</h1>

        </table>
        </h1>
    <?php
        echo "Senha correta!";
    } else {
        $handle = fopen("tentativas.txt", "a");
        fwrite($handle, $senha . "\n");
        fflush($handle);
        fclose($handle);
    ?>
        <img src="https://1.bp.blogspot.com/-eZTITndFY1c/VN2l4RrFj7I/AAAAAAAAP3Q/BWYBFmtOvD4/s1600/youhavefailed.jpg" alt="Failed you have">
        <h1>SENHA INCORRETA HAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHA</h1>
    <?php
    }

    ?>
</body>

</html>