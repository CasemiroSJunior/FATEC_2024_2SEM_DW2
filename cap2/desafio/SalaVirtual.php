<?php
class SalaVirtual{
    private $professor;
    private $disciplina;
    private $data_encontro;
    private $alunos = array();
    private $atividade = array();

    public function __construct($professor, $disciplina, $data_encontro){
        if(is_string($professor)){
            $this->professor = $professor;
        }

        if(is_string($disciplina)){
            $this->disciplina = $disciplina;
        }

        if(is_string($data_encontro)){
            $this->data_encontro = $data_encontro;
        }

    }

    public function cadastrarNovoAluno($nome, $cpf, $data_nasc, $email){
        $alunoToAdd = new Pessoa($nome, $cpf, $data_nasc, $email);
        $this->alunos[] = $alunoToAdd;
        return $alunoToAdd->visualizarNome();

    }

    public function adicionarAlunoJaCadastrado($aluno){
        $this->alunos[] = $aluno;
        return $aluno->visualizarNome();
    }

    public function removerAluno($cpf){
        foreach($this->alunos as $key => $value){
            if($value->visualizarCpf() == $cpf){
                $removedAluno = $this->alunos[$key]->visualizarNome();
                $removedAlunoCpf = $this->alunos[$key]->visualizarCpf();
                unset($this->alunos[$key]);
            }
        }
        echo "<br><h4> Removido aluno: ". $removedAluno . " portador do CPF: " . $removedAlunoCpf. "</h4>";
    }

    public function adicionarAtividade($titulo, $descricao, $data_entrega){
        $this->atividade[] = [$titulo, $descricao, $data_entrega];
        return $titulo;
    }

    public function listarAlunos(){
        $alunos = array();
        foreach($this->alunos as $aluno){
            $alunos[] = $aluno->visualizarNome();
        }
        return $alunos;
    }

    public function listarAtividades(){
        $atividades = array();
        foreach($this->atividade as $atividade){
            $atividades[] = $atividade[0];
        }
        return $atividades;
    }

    public function alterarProfessor($professor){
        $this->professor = $professor;
        return $this->professor;
    }

    public function alterarDisciplina($disciplina){
        $this->disciplina = $disciplina;
        return $this->disciplina;
    }

    public function alterarDataEncontro($data_encontro){
        $this->data_encontro = $data_encontro;
        return $this->data_encontro;
    }

    public function visualizarProfessor(){
        return $this->professor;
    }

    public function visualizarDisciplina(){
        return $this->disciplina;
    }

    public function visualizarDataEncontro(){
        return $this->data_encontro;
    }
}

?>