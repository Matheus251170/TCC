<?php

class user
{


    public function login($email, $psw)
    {
        global $pdo;

        $sql = "SELECT * FROM tb_login WHERE email = :email and senha = :psw";
        $sql = $pdo -> prepare($sql);
        $sql -> bindValue("email", $email);
        $sql -> bindValue("psw", md5($psw));
        $sql -> execute();

        if($sql -> rowCount() > 0)
        {
            $dado = $sql -> fetch();

            $_SESSION['id_login'] = $dado['id_login'];

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

        $sql = "SELECT nome FROM tb_login WHERE id_login = :id";
        $sql = $pdo -> prepare($sql);
        $sql -> bindValue("id", $id);
        $sql -> execute();

        if($sql -> rowCount() > 0)
        {
            $array = $sql -> fetch();
        }

        return $array;
    }
}

?>