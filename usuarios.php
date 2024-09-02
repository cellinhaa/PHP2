<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
    <style>
        main{
            display: flex;
        }
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
        img {
            width: 150px;

        }
        span{
            color: RGB(209, 90, 90);
            font-weight: bold;
            border-bottom: 1px solid;
            margin: 15px;
        } 
        td, th{
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(odd){
            background-color: RGB(237, 180, 212);
            color: rgb(232, 118, 182);
        }
        th {
            background-color: RGB(112, 178, 207);
            color:lightblue;
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
    <main>
        <div id="imagem"><img src="kitty.png.png" alt=""></div>
        <div id="dados">  
    <table>
        <tr>
            <th>Id: </th>
            <th>Descrição: </th>
            <th>Fabricante: </th>
            <th>Preço custo: </th>
            <th>Preço venda: </th>
        </tr>
  
    <?php
include "conecta.php";

$sql = 'SELECT * FROM produtos';
$resultado = mysqli_query($conexao, $sql);
if (mysqli_num_rows($resultado) > 0) {
    while($registro = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>". $registro["id"]. "</td>";
        echo "<td>". $registro["descrição"]."</td>";
        echo "<td>" . $registro["fabricante"]."</td>";
        echo "<td>" . $registro["preco_custo"]."</td>";
        echo "<td>". $registro["preco_venda"]."</td></tr>";
    }
} else {
    echo "Nenhum registro encontrado.";
}
?>  </table>
</div> </main>
</body>
</html>