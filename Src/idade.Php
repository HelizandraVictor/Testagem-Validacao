<?php
function verificarMaioridade($idade) {
    return $idade >= 18;
}
?>
<!DOCTYPE html>
<html>
<head><title>Verificador de Idade</title></head>
<body>
    <h2>Controle de Idade</h2>
    <form method="POST">
        Sua Idade: <input type="number" name="idade" id="idade_input">
        <button type="submit">Checar</button>
    </form>
    <?php
    if(isset($_POST['idade'])){
        echo verificarMaioridade($_POST['idade']) ? "Acesso Permitido" : "Acesso Negado";
    }
    ?>
</body>
</html>