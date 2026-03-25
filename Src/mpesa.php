<?php
function calcularTaxa($valor) {
    return $valor * 0.02; // Taxa de 2%
}
?>
<!DOCTYPE html>
<html>
<head><title>M-Pesa</title></head>
<body>
    <h2>Simulador M-Pesa</h2>
    <form method="GET">
        Valor a enviar: <input type="number" name="valor" id="valor">
        <button type="submit">Calcular Taxa</button>
    </form>
    <?php
    if(isset($_GET['valor'])){
        echo "Taxa: " . calcularTaxa($_GET['valor']) . " MT";
    }
    ?>
</body>
</html>