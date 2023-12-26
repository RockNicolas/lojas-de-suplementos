<?php
require_once("../../BackEnd/Cliente/conexao.php");

session_start(); // Inicia a sessão

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $email = $_POST["Email"];
    $senha = $_POST["Senha"];

 // Consulta o banco de dados para verificar o login
    $sql = "SELECT * FROM usuarios WHERE Email = '$email' AND Senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login bem-sucedido
        $_SESSION['Email'] = $email; // Armazena o email na sessão
        echo "Login bem-sucedido!";
        // Redireciona para a página inicial, por exemplo:
        header("Location: ../index.php");
    } else {
        // Login falhou
        echo "E-mail ou senha incorretos.";
    }
}

// Fechar a conexão quando terminar
$conn->close();
?>
<!DOCTYPE <html>
<html long="pt-br">

<head>
    <title> login </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>
    <div class="box">
        <img src="../img/user.png" class="avatar">
        <h1>Logar aqui</h1>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <p>Email</p>
            <input type="text" name="Email" placeholder="Entre com o Usuário">

            <p>senha</p>
            <input type="password" name="Senha" placeholder="Entre com a senha">

            <input type="submit" name="submit" value="Entrar">
        </form>

            <a href="#">Esqueci a senha</a>
            
            <p>Não possui uma conta?
            <a href="cadastro.php">Cadastre-se</a>
             
    </div>

    <body>

</html>