<?php
require_once("../../BackEnd/Cliente/conexao.php");

 // Processamento do formulário
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $Nome           = $_POST["Nome"];
    $Senha          = $_POST["Senha"];
    $Celular        = $_POST["Celular"];
    $Email          = $_POST["Email"];
    $DataNascimento = $_POST["DataNascimento"];

    // Insere os dados no banco de dados
    $sql = "INSERT INTO usuarios (Nome, Senha, Celular, Email, DataNascimento ) VALUES ('$Nome', '$Senha', '$Celular', '$Email', '$DataNascimento')";

    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
        exit(); // Certifique-se de sair após o redirecionamento para evitar execução adicional do código

    } else {
        echo "Erro ao cadastrar o usuário: " . $conn->error;
    }
}

// Fechar a conexão quando terminar
$conn->close();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>formulario de cadastro</title>
</head>

<body>
    <div class="container">

        <div class="form-image">
            <img src="../img/ceasea_logo.jpg" id="foto">
        </div>

        <div class="form">
            
            <div class="form-header">
                <div class="title">
                    <h1>Cadastre-se</h1>
                </div>
                
                <div class="login-button">
                    <a href="login.php"> <button>Entrar</button></a>
                </div>
            </div>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nome completo</label>
                        <input id="firstname" type="text" name="Nome" placeholder="Digite seu nome completo" required>
                    </div>

                    <div class="input-box">
                        <label for="date">Data de nascimento</label>
                        <input id="date" type="date" name="DataNascimento" placeholder="Digite sua data de nascimento" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="tel" name="Celular" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="Email" placeholder="Digite seu email" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="Senha" placeholder="Digite sua senha" required>
                    </div>

                    <div class="input-box">
                        <label for="Confirmpassword">Confirme sua senha</label>
                        <input id="Confirmpassword" type="password" name="Confirmpassword" placeholder="Confirme sua senha" required>
                    </div>
                </div>

                <!--<div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input type="radio" id="female" name="gender">
                            <label for="famale">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input type="radio" id="male" name="gender">
                            <label for="male">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input type="radio" id="others" name="gender">
                            <label for="others">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input type="radio" id="none" name="gender">
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>
                -->

                <div class="continue-button">
                <input type="submit" value="Cadastrar">
                </div>

            </form>
        </div>
    </div>
</body>

</html>