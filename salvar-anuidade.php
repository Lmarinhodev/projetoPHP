<?php
    switch($_REQUEST["acao"]){
        case 'cadastrar':
            $anoref = $_POST["anoref"];
            $valor = $_POST["valor"];
            
            $sql = "INSERT INTO anuidades (anoref, valor) VALUES ('{$anoref}','{$valor}')";
            
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrado com sucesso');</script>";
                print "<script>location.href='?page=listaranuidades';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='?page=listaranuidades';</script>";
            }
            break;
        
    }
?>