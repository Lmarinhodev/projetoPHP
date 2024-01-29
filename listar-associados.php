<h1>Checkout</h1>
<?php
    $sql = "SELECT * FROM associados";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class = 'table table-hover table-striped table-bordered'>";
        print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>email</th>";
            print "<th>CPF</th>";
            print "<th>Ano de filiação</th>";
            print "<th>Situação da fatura</th>";
            print "<th>Ações</th>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->cpf."</td>";
            print "<td>".$row->ano."</td>";
            if($row->pagamento == 0){
                print "<td>Em débito</td>";
            }else {
                print "<td>Pago</td>";
            }
            print "<td>
                <button onclick=\"location.href='?page=quitar&id=".$row->id."';\" class='btn btn-success'>Quitar
                </button></td>";
            print "</tr>";
            
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não encontrou resultado</p>";
    }
?>