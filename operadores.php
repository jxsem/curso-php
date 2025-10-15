<?php
/*
=============================================================
⚙️ OPERADORES EN PHP
=============================================================
Los operadores permiten realizar operaciones con variables,
constantes y valores. Pueden ser aritméticos, de comparación,
lógicos, de asignación, de incremento/decremento y de cadena.
=============================================================
*/

// 🔹 1. OPERADORES ARITMÉTICOS
// Se usan para operaciones matemáticas básicas.
$a = 10;
$b = 3;

echo "<h3>Operadores aritméticos</h3>";
echo "Suma: " . ($a + $b) . "<br>";        // 13
echo "Resta: " . ($a - $b) . "<br>";       // 7
echo "Multiplicación: " . ($a * $b) . "<br>"; // 30
echo "División: " . ($a / $b) . "<br>";    // 3.3333
echo "Módulo (resto): " . ($a % $b) . "<br>"; // 1
echo "Exponenciación: " . ($a ** $b) . "<br>"; // 1000


// 🔹 2. OPERADORES DE ASIGNACIÓN
// Sirven para asignar valores a variables.
$x = 5;        // asignación simple
$x += 3;       // equivale a $x = $x + 3 → 8
$x -= 2;       // equivale a $x = $x - 2 → 6
$x *= 4;       // equivale a $x = $x * 4 → 24
$x /= 3;       // equivale a $x = $x / 3 → 8
$x %= 2;       // equivale a $x = $x % 2 → 0

echo "<h3>Operadores de asignación</h3>";
echo "Valor final de x: $x <br>";


// 🔹 3. OPERADORES DE COMPARACIÓN
// Devuelven un valor booleano (true/false).
$a = 5;
$b = "5";

echo "<h3>Operadores de comparación</h3>";
var_dump($a == $b);  // true → compara solo valor
var_dump($a === $b); // false → compara valor y tipo
var_dump($a != $b);  // false
var_dump($a <> $b);  // false (igual que !=)
var_dump($a !== $b); // true → distinto tipo
var_dump($a > 3);    // true
var_dump($a < 10);   // true
var_dump($a >= 5);   // true
var_dump($a <= 4);   // false


// 🔹 4. OPERADORES LÓGICOS
// Se usan para combinar condiciones.
$x = true;
$y = false;

echo "<h3>Operadores lógicos</h3>";
var_dump($x && $y); // AND → false
var_dump($x || $y); // OR → true
var_dump(!$x);      // NOT → false
var_dump($x xor $y); // XOR → true (solo si uno es true)


// 🔹 5. OPERADORES DE INCREMENTO / DECREMENTO
echo "<h3>Operadores de incremento y decremento</h3>";
$contador = 5;
echo "Valor inicial: $contador <br>";
echo "Post-incremento: " . $contador++ . "<br>"; // primero muestra 5, luego incrementa
echo "Nuevo valor: $contador <br>";               // 6
echo "Pre-incremento: " . ++$contador . "<br>";   // incrementa y luego muestra → 7
echo "Post-decremento: " . $contador-- . "<br>";  // muestra 7, luego resta 1 → 6
echo "Pre-decremento: " . --$contador . "<br>";   // resta 1 y muestra → 5


// 🔹 6. OPERADORES DE CADENA
// Se utilizan para concatenar texto.
$nombre = "María";
$apellido = "López";

echo "<h3>Operadores de cadena</h3>";
echo $nombre . " " . $apellido . "<br>"; // concatenación con punto (.)
$nombre .= " García";                    // concatena directamente a la variable
echo $nombre . "<br>";


// 🔹 7. OPERADOR TERNARIO
// Forma corta del if-else.
$edad = 20;
echo "<h3>Operador ternario</h3>";
$mensaje = ($edad >= 18) ? "Eres mayor de edad" : "Eres menor de edad";
echo $mensaje . "<br>";


// 🔹 8. OPERADOR DE FUSIÓN NULL (??)
// Devuelve el primer valor que no sea null.
echo "<h3>Operador de fusión null (??)</h3>";
$usuario = null;
echo $usuario ?? "Invitado"; // Muestra "Invitado"

