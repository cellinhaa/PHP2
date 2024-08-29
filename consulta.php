<?php
include "conecta.php";
echo "<br><b>Mostrando todos os registros</b><br><br>";
$sql = 'SELECT * FROM produtos';
$resultado = mysqli_query($conexao, $sql);
if (mysqli_num_rows($resultado) > 0) {
    while($registro = mysqli_fetch_assoc($resultado)) {
        echo "Id: " . $registro["id"]. "Descrição: " . $registro["descrição"]. "Fabricante: " . $registro["fabricante"]. "Preço custo " . $registro["preco_custo"]. "Preço venda: ".$registro["preco_venda"]."Imagem".$registro["imagem"]."<br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}
?>