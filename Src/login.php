<?php
// Lógica simples de validação
$mensagem = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == "user@email.com" && $senha == "123456") {
        $mensagem = "<p style='color:green;'>Login efetuado com sucesso!</p>";
    } else {
        $mensagem = "<p style='color:red;'>Dados incorretos.</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <h2>Área de Login</h2>
    <?php echo $mensagem; ?>
    <form method="POST">
        Email: <input type="email" name="email" id="email" required><br><br>
        Senha: <input type="password" name="senha" id="senha" required><br><br>
        <button type="submit" id="btn-entrar">Entrar</button>
    </form>
</body>
</html>