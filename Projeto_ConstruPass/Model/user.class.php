<?php

class user
{


    public function login($email, $senha)
    {
        global $pdo;

        $sql = "SELECT * FROM tb_usuario WHERE email = :email AND senha = :senha";
        $sql = $pdo -> prepare($sql);
        $sql -> bindValue("email", $email);
        $sql -> bindValue("senha", $senha);
        $sql -> execute();

        if($sql -> rowCount() > 0)
        {
            $dado = $sql -> fetch();

            $_SESSION['id_usuario'] = $dado['id_usuario'];
            var_dump( $_SESSION['id_usuario']);
            $dado['id_usuario'];
            return true;
        }
        else
        {
            return false;
        }
    }

    public function logged($id)
    {
        global $pdo;

        $array = array();

        $sql = "SELECT nome FROM tb_info_usuarios WHERE fk_id_usuario = :id_usuario";
        $sql = $pdo -> prepare($sql);
        $sql -> bindValue("id_usuario", $id);
        $sql -> execute();

        if($sql -> rowCount() > 0)
        {
            $array = $sql -> fetch();
        }

        return $array;
    }
}

?>