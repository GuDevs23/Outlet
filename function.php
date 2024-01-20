<?php
class usuario{

  private $pdo;

  function conectar($user, $pass){

      global $pdo;

      $host= "localhost";

      $user = "root";

      $pass ="";

      $dbname = "bdoutlet";

      $pdo = new PDO("mysql:host=$host;dbname=".$dbname,$user,$pass);

  }
  function cadastrar($nome,$cpf,$rg,$data,$sexo,$cel,$email,$senha, $confsenha,$data_cad,$cep,$uf,$bairro,$end,$ref){

    global $pdo;

        $sql = $pdo ->prepare ("select cpf from usuario where email = :e") ;

        $sql ->bindValue(":e", $email);


        $sql -> execute();

   

        if($sql ->rowCount()>0)

        {

            return false;

           

        }
    else

    {

        $sql=$pdo->prepare("insert into usuario (cpf,nome,rg,data_nasc,data_cad,email,sexo,senha,celular,endereco,cep,estado,bairro,referencia)  
        values(:cpf,:no,:rg,:dn,:dc,:em,:sex,:sen,:cel,:end,:cep,:uf,:bai,:rf)");

        $sql->bindValue(":cpf",$cpf);

        $sql->bindValue(":no",$nome);

        $sql->bindValue(":rg",$rg);

        $sql->bindValue(":dn",$data);

        $sql->bindValue(":dc",$data_cad);

        $sql->bindValue(":em",$email);

        $sql->bindValue(":sex",$sexo);
        
        $sql->bindValue(":sen",md5(($senha)));

        $sql->bindValue(":sen",md5(($confsenha)));

        $sql->bindValue(":cel",$cel);

        $sql->bindValue(":cep",$cep);

        $sql->bindValue(":uf",$uf);

        $sql->bindValue(":bai",$bairro);

        
        $sql->bindValue(":end",$end);

        $sql->bindValue(":rf",$ref);
       
        $sql->execute();

        return true;

       

    }

}
}



