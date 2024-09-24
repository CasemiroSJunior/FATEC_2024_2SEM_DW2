<?php

class Pessoa{
    private $nome;
    private $cpf;
    private $data_nasc;
    private $endereco;
    private $telefone;
    private $email;

    public function __construct($nome, $cpf, $data_nasc, $email, $endereco = null, $telefone = null){
        if(is_string($nome)){
            $this->nome = $nome;
        }

        if(is_string($cpf) or is_numeric($cpf)){
            $this->cpf = $cpf;
        }
        
        if(is_string($data_nasc)){
            $this->data_nasc = $data_nasc;
        }

        if(is_string($endereco)){
            $this->endereco = $endereco;
        }

        if(is_string($telefone) or is_numeric($telefone)){
            $this->telefone = $telefone;
        }

        if(is_string($email)){
            $this->email = $email;
        }

    }

    public function mudarNomeRegistro($novoNome){
        $this->nome = $novoNome;
        return $this->nome;
    }

    public function alterarEndereco($novoEndereco){
        $this->endereco = $novoEndereco;
        return $this->endereco;
    }

    public function alterarEmail($novoEmail){
        $this->email = $novoEmail;
        return $this->email;
    }

    public function alterarContato($newPhoneNumber){
        $this->telefone = $newPhoneNumber;
        return $this->telefone;

    }

    public function visualizarNome(){
        return $this->nome;

    }
    public function visualizarCpf(){
        return $this->cpf;

    }
    public function visualizarNascimento(){
        return $this->data_nasc;

    }
    public function visualizarEndereco(){
        return $this->endereco;

    }
    public function visualizarTelefone(){
        return $this->telefone;

    }
    public function visualizarEmail(){
        return $this->email;

    }




}

?>