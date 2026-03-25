<?php
// Importamos os ficheiros da pasta src para testar as funções
include_once "../../src/login.php";
include_once "../../src/mpesa.php";
include_once "../../src/paridade.php";
include_once "../../src/idade.php";
include_once "../../src/temperatura.php";

echo "=== INICIANDO TESTES UNITÁRIOS (PHP) ===\n";

// 1. Teste de Login (Lógica de strings)
$login_valido = ($email == "user@email.com" && $senha == "123456");
assert($login_valido == true);
echo "✅ Teste Login: OK\n";

// 2. Teste M-Pesa (Taxa de 2%)
assert(calcularTaxa(1000) == 20);
echo "✅ Teste M-Pesa: OK\n";

// 3. Teste Paridade
assert(ePar(10) === true);
assert(ePar(7) === false);
echo "✅ Teste Paridade: OK\n";

// 4. Teste Idade (Maioridade)
assert(verificarMaioridade(18) === true);
assert(verificarMaioridade(16) === false);
echo "✅ Teste Idade: OK\n";

// 5. Teste Temperatura
assert(celsiusParaFahrenheit(0) == 32);
echo "✅ Teste Temperatura: OK\n";

echo "=== TODOS OS TESTES UNITÁRIOS PASSARAM! ===\n";
?>