<h1>Checkout</h1>
<?php
    $sql2 = "SELECT * FROM anuidades";

    $res2 = $conn->query($sql2);

    $qtd2 = $res2->num_rows;

    if($qtd2 > 0){
        print "<table class = 'table table-hover table-striped table-bordered'>";
        print "<tr>";
            print "<th>#</th>";
            print "<th>Ano</th>";
            print "<th>Valor</th>";
        while($row2 = $res2->fetch_object()){
            print "<tr>";
            print "<td>".$row2->idanuidades."</td>";
            print "<td>".$row2->anoref."</td>";
            print "<td>".$row2->valor."</td>";
            print "</tr>";
            
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não encontrou resultado</p>";
    }
?>