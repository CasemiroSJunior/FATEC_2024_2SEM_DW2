<?php 
    require_once 'Pessoa.php';
    require_once 'SalaVirtual.php';

    $pessoa1 = new Pessoa('João', '123.456.789-01', '01/01/2000', "joao@fatec.sp.gov.br");
    $pessoa2 = new Pessoa('Maria', '987.654.321-00', '01/01/2000', "maria@gmail.com", "Rua 1", "123456789");
    $pessoa3 = new Pessoa('Pedro', '123.456.789-02', '01/01/2000', "pedro@fatec.sp.gov.br", null, "987654321");
    $pessoa4 = new Pessoa("Casemiro", "123.456.789-03", "01/01/2000", "casemiro@fatec.sp.gov.br", "Rua 2", "1597453250");
    $pessoa5 = new Pessoa("Orlando", "458885214", "01/01/2000", "orlando@saraiva.com", "Rua 3", "1597453250");

    $sala = new SalaVirtual("Prof. Orlando Saraiva Junior", "POO", "23/09/2024");
    echo "<br>Aluno adicionado à classe: " . $sala->adicionarAlunoJaCadastrado($pessoa1);
    echo "<br>Aluno adicionado à classe: " . $sala->adicionarAlunoJaCadastrado($pessoa2);
    echo "<br>Aluno adicionado à classe: " . $sala->adicionarAlunoJaCadastrado($pessoa3);
    echo "<br>Aluno adicionado à classe: " . $sala->adicionarAlunoJaCadastrado($pessoa4);
    echo "<br>Aluno adicionado à classe: " . $sala->adicionarAlunoJaCadastrado($pessoa5);
    echo "<br>Aluno cadastrado e adicionado à classe: " . $sala->cadastrarNovoAluno("Larissa", "123.456.789-00", "01/01/2000", "larissa@gmail.com");
    echo "<br>Professor: " . $sala->visualizarProfessor();
    echo "<br>Disciplina: " . $sala->visualizarDisciplina();
    echo "<br> Data encontro: " . $sala->visualizarDataEncontro() . "<br>";
    print_r($sala->listarAlunos()); 
    echo "<br>Atividade adicionada: " . $sala->adicionarAtividade(" Atividade 1 ", " Descrição da atividade 1 ", " 01/01/2024 ");
    print_r($sala->listarAtividades());
    echo "<br>Aluno removido: " . $sala->removerAluno("123.456.789-00");
    echo "<br>Nova lista de Alunos : ";
    print_r($sala->listarAlunos());
    

?>