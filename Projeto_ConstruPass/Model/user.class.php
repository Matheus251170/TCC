<?php

class user
{


    public function login($email, $senha)
    {
        global $pdo;

        $sql = "SELECT * FROM tb_cliente WHERE email_cliente = :email AND senha_user = :senha";
        $sql = $pdo -> prepare($sql);
        $sql -> bindValue("email", $email);
        $sql -> bindValue("senha", $senha);
        $sql -> execute();

        if($sql -> rowCount() > 0)
        {
            $dado = $sql -> fetch();

            //$_SESSION['id_cliente'] = $dado['id_cliente'];
            echo $dado['id_cliente'];
            //return true;
        }
        /*else
        {
            return false;
        }
    }

    /*public function logged($id)
    {
        global $pdo;

        $array = array();

        $sql = "SELECT nome_cliente FROM tb_cliente WHERE id_cliente = :id";
        $sql = $pdo -> prepare($sql);
        $sql -> bindValue("id", $id);
        $sql -> execute();

        if($sql -> rowCount() > 0)
        {
            $array = $sql -> fetch();
        }

        return $array;
    }*/
}

?>