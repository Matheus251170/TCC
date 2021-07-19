<?php


$host='localhost';
$user='root';
$senha='root';
$banco='bd_construpass';



global $pdo;

try
    {
        //$pdo = mysqli_connect($host, $user, $senha, $banco);
        $pdo = new PDO("mysql:dbname=".$banco."; host=".$host, $user, $senha);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
    catch(PDOException $e)
    
    {
        echo "Não foi possivel estabelecer uma conexão com o banco de dados!".$e -> getMessage();
        exit();
    }

?>