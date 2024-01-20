<?php
require_once "function.php";
$u = new usuario;
if (isset($_POST['nome'])) {
    $nome = addslashes($_POST['nome']);

    $cpf = addslashes($_POST['cpf']);

    $rg = addslashes($_POST['rg']);

    $data = addslashes($_POST['data']);

    $sexo = addslashes($_POST['sexo']);

    $cel = addslashes($_POST['cel']);

    $email = addslashes($_POST['email']);

    $senha = addslashes($_POST['senha']);

    $confsenha = addslashes($_POST['confsenha']);

    $data_cad = addslashes($_POST['data_cad']);

    $cep = addslashes($_POST['cep']);

    $uf = addslashes($_POST['uf']);

    $bairro = addslashes($_POST['bairro']);

    $end = addslashes($_POST['endereco']);

    $ref = addslashes($_POST['ref']);


    if (
        !empty($nome) && !empty($cpf) && !empty($rg) && !empty($data) && !empty($sexo) && !empty($cel) && !empty($email) && !empty($senha) && !empty($data_cad) &&
        !empty($cep) && !empty($uf) && !empty($bairro) && !empty($end) && !empty($ref)
    ) {
        $u->conectar("root", "");
        if ($senha == $confsenha) {
            if ($u->cadastrar($nome,$cpf,$rg,$data,$sexo,$cel,$email,$senha, $confsenha,$data_cad,$cep,$uf,$bairro,$end,$ref)) {
                echo "Cadastrado com sucesso!";
            } else {
                echo "Usuário já cadastrado";
            }
        } else {


            echo 'Senhas não correspondem';
        }
    } else {
        echo 'Preencha todos os dados';
    }
}
