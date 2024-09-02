<?php
include "conecta.php";
echo "<br><b>Mostrando todos os registros</b><br><br>";
$sql = 'SELECT * FROM produtos';
$resultado = mysqli_query($conexao, $sql);
if (mysqli_num_rows($resultado) > 0) {
    while($registro = mysqli_fetch_assoc($resultado)) {
        echo "Id:" . $registro["id"]. "<br> Descrição: " . $registro["descrição"]. "<br> Fabricante: " . $registro["fabricante"]. "<br> Preço custo: " . $registro["preco_custo"]. "<br> Preço venda: ".$registro["preco_venda"]."<br>Imagem<br>".$registro["imagem"]."<br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}
?>