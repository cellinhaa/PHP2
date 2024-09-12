<?php
include "conecta.php";

$descrição = $_POST['descrição'];
$fabricante =  $_POST['fabricante'];
$quantidade = $_POST['qtd'];
$preco_custo =  $_POST['preco_c'];
$preco_venda =  $_POST['preco_v'];

$sql = "INSERT INTO produtos(descrição, fabricante, quantidade, preco_custo, preco_venda) values('$descrição', '$fabricante', $quantidade, $preco_custo, $preco_venda)";

$resultado = mysqli_query($conexao, $sql);
if ($resultado > 0) {
    echo "Cadastrado com sucesso!";
}

?> 