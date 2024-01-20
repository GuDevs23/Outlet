<?php
include_once("function.php");

$u = new usuario();

if (isset($_POST['email'])) {

    $email = ($_POST['email']);

    $senha = ($_POST['senha']);

    if (!empty($email) && !empty($senha)) {

        $u -> conectar($email,$senha);
        
        if ($u->logar($email, $senha,$cpf)) {

            echo(var_dump($email, $senha,$cpf));
           
            header('location: usuario.php');
          
    } 
    

    else if(empty($email) && empty($senha)) {

        echo 'Preencher todos os campos';
    }
} else {

    echo 'erro de email ou senha';
}
    
    echo(var_dump($email, $senha));
}
?>