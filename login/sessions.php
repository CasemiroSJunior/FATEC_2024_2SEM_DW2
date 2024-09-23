<?php
class Sessao{
    
    public function login( $usuario, $senha ){
        session_start();
        if($usuario == 'orlando' and $senha == '123mudar'){
            $_SESSION['loggedin'] = TRUE;
            $_SESSION["username"] = 'Orlando Saraiva';
            return TRUE;
        } else {
            $_SESSION['loggedin'] = FALSE;
            return FALSE;
        }
    }

    public function logout(){
        session_start();
        $_SESSION = array();
        session_destroy();
    }

    public function autenticado() {
        session_start();
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            return FALSE;
        }
        return TRUE;
    }
}

?>