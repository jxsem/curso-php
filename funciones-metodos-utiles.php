<?php
// 🧠 APUNTES DE FUNCIONES Y MÉTODOS ÚTILES EN PHP

echo "<h2>Funciones útiles en PHP</h2>";

/* ======================================================
   🔹 1. Mostrar información
   ====================================================== */
echo "<h3>1️⃣ Mostrar información</h3>";

// Muestra texto o variables
echo "Hola mundo <br>";

// Muestra información detallada (tipo, valor, etc.)
$edad = 25;
var_dump($edad); // int(25)
echo "<br>";

// Similar a var_dump, pero más legible
print_r(["manzana", "pera", "uva"]);
echo "<br>";

// Salto de línea (en HTML es <br>, en terminal sería "\n")



/* ======================================================
   🔹 2. Números aleatorios
   ====================================================== */
echo "<h3>2️⃣ Números aleatorios</h3>";

echo "rand(1, 10): " . rand(1, 10) . "<br>";
echo "mt_rand(1, 10): " . mt_rand(1, 10) . "<br>";
echo "random_int(1, 10): " . random_int(1, 10) . " (más seguro)<br>";



/* ======================================================
   🔹 3. Cadenas (strings)
   ====================================================== */
echo "<h3>3️⃣ Funciones de cadenas</h3>";

$texto = "  Hola Mundo PHP  ";

echo "strlen(): " . strlen($texto) . "<br>";            // Longitud
echo "strtoupper(): " . strtoupper($texto) . "<br>";    // Mayúsculas
echo "strtolower(): " . strtolower($texto) . "<br>";    // Minúsculas
echo "trim(): '" . trim($texto) . "'<br>";              // Quita espacios
echo "substr(): " . substr($texto, 2, 4) . "<br>";      // Extrae parte
echo "strpos(): " . strpos($texto, "Mundo") . "<br>";   // Busca posición



/* ======================================================
   🔹 4. Arrays (listas)
   ====================================================== */
echo "<h3>4️⃣ Funciones de arrays</h3>";

$frutas = ["manzana", "pera", "uva"];
array_push($frutas, "naranja");       // Añadir al final
array_unshift($frutas, "plátano");    // Añadir al inicio
print_r($frutas);
echo "<br>";

array_pop($frutas);   // Elimina el último
array_shift($frutas); // Elimina el primero
print_r($frutas);
echo "<br>";

echo "count(): " . count($frutas) . "<br>";   // Número de elementos
echo "in_array('pera', \$frutas): " . (in_array("pera", $frutas) ? "Sí" : "No") . "<br>";



/* ======================================================
   🔹 5. Variables y tipos
   ====================================================== */
echo "<h3>5️⃣ Variables y tipos</h3>";

$numero = 10;
$texto = "10";

var_dump($numero == $texto);  // true (solo valor)
var_dump($numero === $texto); // false (valor y tipo)

echo "is_numeric(): " . (is_numeric($texto) ? "Sí" : "No") . "<br>";
echo "is_array(): " . (is_array($frutas) ? "Sí" : "No") . "<br>";



/* ======================================================
   🔹 6. Fechas y hora
   ====================================================== */
echo "<h3>6️⃣ Fechas y hora</h3>";

echo "date('Y-m-d H:i:s'): " . date('Y-m-d H:i:s') . "<br>";
echo "time(): " . time() . " (timestamp)<br>";



/* ======================================================
   🔹 7. Otros útiles
   ====================================================== */
echo "<h3>7️⃣ Otros</h3>";

// die() o exit() → detienen la ejecución
// die("Error fatal");

// empty() → ¿Está vacía la variable?
$var = "";
echo "empty(): " . (empty($var) ? "Sí" : "No") . "<br>";

// isset() → ¿Existe la variable?
echo "isset(): " . (isset($var) ? "Sí" : "No") . "<br>";

// gettype() → Tipo de dato
echo "gettype(): " . gettype($edad) . "<br>";

?>
