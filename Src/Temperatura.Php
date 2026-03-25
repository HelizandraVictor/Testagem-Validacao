<?php
function celsiusParaFahrenheit($c) {
    return ($c * 9/5) + 32;
}
?>
<!DOCTYPE html>
<html>
<head><title>Conversor de Temperatura</title></head>
<body>
    <h2>Conversor C° -> F°</h2>
    <form method="POST">
        Celsius: <input type="number" name="celsius" id="celsius">
        <button type="submit">Converter</button>
    </form>
    <?php
    if(isset($_POST['celsius'])){
        echo "Resultado: " . celsiusParaFahrenheit($_POST['celsius']) . " F°";
    }
    ?>
</body>
</html>