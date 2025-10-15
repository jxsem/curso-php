<?php

// 🔁 BUCLE FOR
// Se usa cuando conocemos el número exacto de repeticiones.
echo "<h3>Ejemplo de bucle FOR</h3>";

for ($i = 1; $i <= 5; $i++) {
    echo "Iteración número: $i <br>";
}

/*
📤 Salida:
Iteración número: 1
Iteración número: 2
Iteración número: 3
Iteración número: 4
Iteración número: 5
*/

// 🔁 BUCLE WHILE
// Ejecuta el bloque de código mientras la condición sea verdadera.
echo "<h3>Ejemplo de bucle WHILE</h3>";

$contador = 1;
while ($contador <= 5) {
    echo "Contador vale: $contador <br>";
    $contador++;
}

/*
📤 Salida:
Contador vale: 1
Contador vale: 2
Contador vale: 3
Contador vale: 4
Contador vale: 5
*/

// 🔁 BUCLE DO-WHILE
// Se ejecuta al menos una vez, aunque la condición sea falsa.
echo "<h3>Ejemplo de bucle DO-WHILE</h3>";

$num = 6;
do {
    echo "El número es: $num <br>";
    $num++;
} while ($num <= 5);

/*
📤 Salida:
El número es: 6
(Se ejecuta una sola vez, aunque la condición sea falsa)
*/

// 🔁 BUCLE FOREACH
// Recorre todos los elementos de un array o matriz.
// Muy útil para trabajar con colecciones de datos.
echo "<h3>Ejemplo de bucle FOREACH</h3>";

$frutas = array("Manzana", "Pera", "Naranja", "Plátano");

foreach ($frutas as $fruta) {
    echo "Fruta: $fruta <br>";
}

/*
📤 Salida:
Fruta: Manzana
Fruta: Pera
Fruta: Naranja
Fruta: Plátano
*/

