<?php

 

class usuario{

    private $pdo;

    function conectar($user, $pass){

        global $pdo;

        $host= "localhost";

        $user = "root";

        $pass ="";

        $dbname = "bdoutlet";

        $pdo = new  PDO("mysql:host=$host;dbname=".$dbname,$user,$pass);

    }


 

public function logar($email,$senha,$cpf){

    global $pdo;

    $sql = $pdo ->prepare("select cpf from usuario where email = :e or cpf=:cpf and senha= :s");

    $sql-> bindValue(":e",$email);

    $sql-> bindValue(":cpf",$cpf);

    $sql ->bindValue(":s", $senha);

    $sql->execute();

    if($sql ->rowCount()>0){

        $dado=$sql ->fetch();

        session_start();

        $_SESSION['cpf']=$dado['cpf'];

        

        return true;

    }

    else{

        return false;

    }

 

}

}



