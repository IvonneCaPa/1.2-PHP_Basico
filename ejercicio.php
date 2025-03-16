<?php

function cribaDeEratostenes(int $n): array {
    // Crear un array de booleanos para marcar los números primos
    $primos = array_fill(0, $n + 1, true);
    $primos[0] = $primos[1] = false; // 0 y 1 no son primos

    // Aplicar la criba
    for ($i = 2; $i * $i <= $n; $i++) {
        if ($primos[$i]) {
            for ($j = $i * $i; $j <= $n; $j += $i) {
                $primos[$j] = false; // Marcar múltiplos de $i como no primos
            }
        }
    }

    // Recoger los números primos en un array
    $resultado = [];
    for ($i = 2; $i <= $n; $i++) {
        if ($primos[$i]) {
            $resultado[] = $i;
        }
    }

    return $resultado;
}

// Ejemplo de uso
$n = 30; // Cambia este número para probar con otros valores
$primosHastaN = cribaDeEratostenes($n);
echo "Números primos hasta $n: " . implode(", ", $primosHastaN) . "\n";

?>
