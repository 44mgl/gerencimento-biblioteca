<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Fale Conosco</title>
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
</head>
<body>
    <div id="interface">
        <header id="cabecalho">
            <h1>Fale Conosco</h1>
            <h2>Envie sua mensagem e entraremos em contato</h2>
        </header>

        <section id="corpo">
            <div class="formulario">
                <form method="POST">
                    <p>
                        <label for="nome">Nome:</label><br>
                        <input type="text" name="nome" id="nome" required>
                    </p>
                    <p>
                        <label for="email">E-mail:</label><br>
                        <input type="email" name="email" id="email" required>
                    </p>
                    <p>
                        <label for="mensagem">Mensagem:</label><br>
                        <textarea name="mensagem" id="mensagem" rows="5" cols="40" required></textarea>
                    </p>
                    <p>
                        <button type="submit" style="
                            font-family: 'Baloo Bhaijaan', cursive;
                            background-color: #6A5ACD;
                            color: #FFFF00;
                            border: none;
                            padding: 10px 20px;
                            cursor: pointer;
                            font-size: 14pt;
                        ">Enviar Mensagem</button>
                    </p>
                    <?php
require_once("conexao.php"); // Arquivo com a conexão ao MySQL

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $mensagem = mysqli_real_escape_string($conexao, $_POST['mensagem']);

    $sql = "INSERT INTO mensagens_contato (nome, email, mensagem, data_envio)
            VALUES ('$nome', '$email', '$mensagem', NOW())";

    if (mysqli_query($conexao, $sql)) {
        echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href='index.php';</script>";
    } else {
        echo "Erro ao enviar mensagem: " . mysqli_error($conexao);
    }
}
?>
                </form>
                <form action="index.php" method="POST">
    <button type="submit" style="
        font-family: 'Baloo Bhaijaan', cursive;
        background-color: #6A5ACD;
        color: #FFFF00;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 14pt;
    ">Menu Principal</button>
</form>
            </div>
        </section>

        <footer id="rodape">
            <p>&copy; 2025 - Seu Site - Todos os direitos reservados</p>
        </footer>
    </div>
</body>
</html>
