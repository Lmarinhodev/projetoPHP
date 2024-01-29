<?php
    switch($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $cpf = $_POST["cpf"];
            $ano = $_POST["ano"];

            $sql = "INSERT INTO associados (nome, email, cpf, ano, pagamento) VALUES ('{$nome}','{$email}','{$cpf}','{$ano}', 0)";         
            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Cadastrado com sucesso');</script>";
                print "<script>location.href='?page=checkout';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='?page=checkout';</script>";
            }
            break;
        
    }
?>