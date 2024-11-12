<?php
if (!isset($_SESSION))
    session_start();
require_once 'dbconnector.php';
require_once 'login.php';

class Vagas
{
    private $db;

    public function __construct()
    {

        $this->db = new Database();
    }

    public function listar_vagas()
    {
        $sql = "SELECT * FROM vagas";
        return $this->db->query($sql);
    }

    public function buscar_vaga($id)
    {
        $sql = "SELECT * FROM vagas WHERE id = $id";
        return $this->db->query($sql);
    }

    public function adicionar_vaga($nome_empresa, $descritivo_vaga, $curso, $email_contato, $numero_whatsapp)
    {
        $sql = "INSERT INTO vagas (nome_empresa, descritivo_vaga, curso, email_contato, numero_whatsapp) VALUES ('$nome_empresa', '$descritivo_vaga', '$curso', '$email_contato', '$numero_whatsapp')";
        return $this->db->query($sql);
    }

    public function excluir_vaga($id)
    {
        $sql = "DELETE FROM vagas WHERE id = $id";
        return $this->db->query($sql);
    }

    public function converterCurso($curso)
    {
        if ($curso == 1) {
            return "DSM";
        }
        if ($curso == 2) {
            return "GE";
        }
    }
}
