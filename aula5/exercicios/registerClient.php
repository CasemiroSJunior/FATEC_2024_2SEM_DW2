<?php
    require 'requireAuth.php';

    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("location: index.php");
        exit;
    } else {
    ?>
        <h1> Olá, <?php echo ($_SESSION["username"]); ?></h1>
        <br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="username" id="username" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>CPF</label>
                <input type="cpf" name="cpf" id="cpf" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
        </form>
        <?php
    }

    if(isset($_POST['username']) && isset($_POST['cpf']) && $_POST['username'] != "" && $_POST['cpf'] != ""){
        $username = $_POST['username'];
        $cpf = $_POST['cpf'];
    
        $filename = "registeredClients.txt";
        $file = fopen($filename, "a");
        fwrite($file, "Nome: ". $username . " CPF: " . $cpf . "\n");
        fflush($file);
        fclose($file);
    }

    if(file_exists("registeredClients.txt")){
        $readFile = fopen("registeredClients.txt", "r");
    ?>
    <div style="background-color: #f8f8f8; border-radius: round; border-width: 4px;">
        <h2>Clientes cadastrados</h2>
        <p>
            <?php
            while (!feof($readFile)) {
                $username = fgets($readFile);
                $cpf = fgets($readFile);
                echo  $username . "<br>";
                echo  $cpf .  "<br>";
            }
            ?>
        </p>
    </div>
    <?php
    fclose($readFile);
    }
    
    ?>
    <div>
        <button onclick="window.location.href='logout.php'">Sair</button>
        <button onclick="window.location.href='menu.php'">Voltar</button>
    </div>