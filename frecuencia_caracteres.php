<?php
// Ejercicio 3: Frecuencia de Caracteres
function frecuenciaCaracteres($cadena) {
    $frecuencia = array();
    $caracteres = str_split($cadena); // Convierte la cadena en un array de caracteres
    foreach ($caracteres as $caracter) {
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            $frecuencia[$caracter] = 1;
        }
    }
    return $frecuencia;
}

$cadena = "hola mundo";
$resultado = frecuenciaCaracteres($cadena);
print_r($resultado); // ['h' => 1, 'o' => 2, 'l' => 1, 'a' => 1, ' ' => 1, 'm' => 1, 'u' => 1, 'n' => 1, 'd' => 1]
?>
