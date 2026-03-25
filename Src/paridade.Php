<?php
function ePar($numero) {
    return $numero % 2 == 0;
}
?>
<!DOCTYPE html>
<html>
<head><title>Paridade</title></head>
<body>
    <h2>Verificador de Par ou Ímpar</h2>
    <form method="POST">
        Número: <input type="number" name="num" id="num">
        <button type="submit">Verificar</button>
    </form>
    <?php
    if(isset($_POST['num'])){
        $n = $_POST['num'];
        echo ePar($n) ? "$n é PAR" : "$n é ÍMPAR";
    }
    ?>
</body>
</html>