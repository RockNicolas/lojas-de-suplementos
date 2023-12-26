<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "suploja";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

/*
// Consulta SQL para obter a quantidade de cada produto
$sql = "SELECT NomeProduto, Quantidade FROM Creatinas
        UNION
        SELECT NomeProduto, Quantidade FROM Suplementos
        UNION
        SELECT NomeProduto, Quantidade FROM WheyProtein";

$result = $conn->query($sql);
*/

/*
// Manipular os resultados, por exemplo:
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Nome: " . $row["nome"] . "<br>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}
*/

?>
