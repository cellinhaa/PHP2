<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
    <style>
        ul{
            display: flex;
            list-style: none;
        }
        li{
            padding: 5px;
        }
        a{
            color: palevioletred;
            text-decoration: none;
            font-size: larger;
        }
        a:hover{
            background-color: RGB(209, 90, 90);
            color: RGB(112, 178, 207);
            padding: 10px;
        }
        #imagem{
            width: 30%;
            height: 20%;

        }
        span{
            color: RGB(209, 90, 90);
            font-weight: bold;
            border-bottom: 1px solid;
            margin: 15px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="">home</a></li>
                <li><a href="">contatos</a></li>
                <li><a href="">sobre</a></li>
                <li><a href="">login</a></li>
            </ul>
        </nav>
    </header>
    <main><div id="imagem"><img src="kitty.png.png" alt=""></div></main>
    
    <?php
include "conecta.php";

$sql = 'SELECT * FROM produtos';
$resultado = mysqli_query($conexao, $sql);
if (mysqli_num_rows($resultado) > 0) {
    while($registro = mysqli_fetch_assoc($resultado)) {
        echo "<br> <span> Id: " . $registro["id"];
        echo "<br> <span> Descrição: ". $registro["descrição"];
        echo "<br> <span> Fabricante: " . $registro["fabricante"];
        echo "<br> <span> Preço custo " . $registro["preco_custo"];
        echo "<br> <span> Preço venda: ". $registro["preco_venda"];
        echo "<br> <span> Imagem". $registro["imagem"];
    }
} else {
    echo "Nenhum registro encontrado.";
}
?>
</body>
</html>