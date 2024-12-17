<?php
// Ejercicio 4: Bucle Anidado (Pirámide de Asteriscos)
function piramideAsteriscos($n) {
    for ($i = 1; $i <= $n; $i++) {
        // Imprime los espacios
        for ($j = $i; $j < $n; $j++) {
            echo " ";
        }
        // Imprime los asteriscos
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        echo "\n";
    }
}

piramideAsteriscos(5);
?>
