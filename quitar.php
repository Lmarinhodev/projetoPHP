<h1>Quitação</h1>
<?php
    $sql = "UPDATE associados SET pagamento=1 WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);

    if($res==true){
        print "<script>alert('Quitado com sucesso');</script>";
        print "<script>location.href='?page=listarassociados';</script>";
    }else{
        print "<script>alert('Não foi possível quitar');</script>";
        print "<script>location.href='?page=listarassociados';</script>";
    }
    