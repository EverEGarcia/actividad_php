<?php
// Ejercicio 2: Suma de Números Pares
function sumaPares($array) {
    $suma = 0;
    foreach ($array as $numero) {
        if ($numero % 2 == 0) {
            $suma += $numero;
        }
    }
    return $suma;
}

$array = [1, 2, 3, 4, 5, 6];
$resultado = sumaPares($array);
echo "La suma de los números pares es: " . $resultado; // 12
?>
