<?php

// 1. Crear una variable y asignarle el valor "Comer verduras es realmente sano".
$frase = "Comer verduras es realmente sano";
echo "<br>";
// 2. Reemplaza la palabra "realmente" por la palabra "muy".
$frase = str_replace("realmente", "muy", $frase);
echo "<br>";
// 3. Determina el largo de la variable.
$longitud = strlen($frase);
echo "Longitud de la frase: $longitud\n";
echo "<br>";
// 4. Imprime las 7 primeras posiciones de la variable.
$siete_primeras = substr($frase, 0, 7);
echo "Las 7 primeras posiciones de la frase: $siete_primeras\n";
echo "<br>";
// 5. Define un array de 4 posiciones.
$yerbas = array("playadito", "mañanita", "canarias", "union");
print_r($yerbas);
echo "<br>";
// 6. Elimina la primer posición del array y muestra el resultado en pantalla.
array_shift($yerbas,);
print_r($yerbas);
echo "<br>";
// 7. Ordena el array y muestra el resultado en pantalla.
sort($yerbas);
print_r($yerbas);
echo "<br>";
// 8. Suma 1 elemento al array, y muestra el resultado en pantalla.
array_push($yerbas, "CBSé");
print_r($yerbas);

?>
