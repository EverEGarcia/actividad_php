<?php
// Ejercicio 1: Lista Invertida
function listaInvertida($array) {
    return array_reverse($array);
}

$array = [1, 2, 3, 4, 5];
$resultado = listaInvertida($array);
print_r($resultado); // [5, 4, 3, 2, 1]
?>
