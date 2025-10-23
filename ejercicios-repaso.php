<?php
/*
==========================================================
🧩 EJERCICIOS PHP - Tema 3: Programación embebida en PHP
==========================================================
Autor: [Tu nombre]
Descripción:
Este archivo contiene 10 enunciados de ejercicios
para practicar condicionales, bucles, arrays, matrices
y operadores en PHP.
==========================================================
*/

// 💻 EJERCICIO 1
// Crea un programa que determine si una variable $numero
// es par o impar utilizando un condicional if-else.
$numero = 3;
if ($numero % 2 == 0){
    echo "Es par";
}else{
    echo "Es impar";
}

// 💻 EJERCICIO 2
// Escribe un programa que pida (con una variable simulada)
// una nota entre 0 y 10 y muestre un mensaje según la calificación:
// 0-4 = Suspenso, 5 = Aprobado, 6-7 = Bien, 8-9 = Notable, 10 = Sobresaliente.

$notaAprobada = 8;
if ($notaAprobada == 5){
    echo "Aprobado";
}elseif ($notaAprobada <= 4){
    echo "Suspenso";
}elseif ($notaAprobada == 6 || $notaAprobada == 7){
    echo "Bien";
}elseif ($notaAprobada == 8 || $notaAprobada == 9){
    echo "Notable";
}elseif ($notaAprobada == 10){
    echo "Sobresaliente";
}

// 💻 EJERCICIO 3
// Crea un programa que use un switch-case para mostrar
// el nombre del mes a partir de un número del 1 al 12.

$numeroMes = 5; // Puedes cambiar el número para probar otros meses

switch ($numeroMes) {
    // Cada "case" funciona como si dijeras:
    // if ($numeroMes == X) { echo "Nombre del mes"; }
    case 1:
        echo "Enero";
        break;
    case 2:
        echo "Febrero";
        break;
    case 3:
        echo "Marzo";
        break;
    case 4:
        echo "Abril";
        break;
    case 5:
        echo "Mayo";
        break;
    case 6:
        echo "Junio";
        break;
    case 7:
        echo "Julio";
        break;
    case 8:
        echo "Agosto";
        break;
    case 9:
        echo "Septiembre";
        break;
    case 10:
        echo "Octubre";
        break;
    case 11:
        echo "Noviembre";
        break;
    case 12:
        echo "Diciembre";
        break;
    default:
        echo "Número de mes no válido. Debe estar entre 1 y 12.";
        break;
}
// 💻 EJERCICIO 4
// Utiliza un bucle for para mostrar los números del 1 al 20.
// Añade una condición dentro del bucle para indicar con texto
// cuáles son múltiplos de 5.
for ($i = 1; $i <= 20; $i++){
    if ($i % 5 == 0){
        echo "$i Es Multiplo de 5\n";
    }else{
        echo "$i No es multiplo de 5\n";
    }
}

// 💻 EJERCICIO 5
// Crea un bucle while que sume todos los números
// del 1 al 100 y muestre el resultado final.

$contador = 1; // Contador que será esencial para sumar todos los numeros
$suma = 0; // Acumulador de la suma

while ($contador <= 100){
    $suma += $contador;
    $contador++;
}
echo "La suma del 1 al 100 es: $suma";
// 💻 EJERCICIO 6
// Implementa un bucle do-while que muestre números aleatorios
// entre 1 y 10 hasta que salga el número 7.

do {
    // Generar numero aleatorio -> rand(rango 1-rango 2)
    $numeroAleatorio = rand(1, 10);

    //Mostrar el número
    echo $numeroAleatorio . "\n";

}while ($numeroAleatorio != 7);

// 💻 EJERCICIO 7
// Crea un array con los nombres de 5 animales.
// Recorre el array con foreach y muestra cada nombre
// en una línea numerada (por ejemplo: 1. Gato).
$arrayAnimales = array("Gato", "Perro", "Elefante", "Cocodrilo", "Araña");

// Recorremos el array obteniendo el índice y el valor
foreach ($arrayAnimales as $indice => $animal) { // Por cada elemento del array $arrayAnimales, guarda su clave (posición) en $indice y su valor (el nombre del animal) en $animal.”
    // $indice empieza en 0, por eso sumamos 1
    echo ($indice + 1) . ". " . $animal . "\n";
}

// 💻 EJERCICIO 8
// Crea un array asociativo que contenga el nombre,
// edad y ciudad de una persona. Muestra cada clave y valor
// en una nueva línea con foreach.

$arrayAsociativo = array(
    "Nombre" => "Jose",
    "Edad" => "24",
    "Ciudad" => "Granada",
);

foreach ($arrayAsociativo as $clave => $valor) {
    echo $clave . ": " . $valor . "\n";
}
// 💻 EJERCICIO 9
// Crea una matriz (array multidimensional) con datos
// de 3 estudiantes: nombre, edad y nota.
// Muestra la nota de cada estudiante con un bucle foreach anidado.
$multidimensional = array(
array("Jose", "42", "9"),
array("Miguel", "34", "7"),
array("Sofia", "27", "6")
);

// Primer foreach: recorre cada sub-array del array principal
foreach ($multidimensional as $persona) {
    // $persona contiene un sub-array (por ejemplo: array("Jose", "42", "9"))

    // Segundo foreach: recorre cada elemento dentro del sub-array
    foreach ($persona as $clave => $valor) {
        // $clave es el índice dentro del sub-array (0, 1, 2)
        // $valor es el contenido de esa posición ("Jose", "42", "9", etc.)

        // Mostramos la posición y el valor
        echo "Posición $clave: $valor\n";
    }
}
// 💻 EJERCICIO 10
// Simula un sistema de acceso:
// Define un array asociativo con varios usuarios (clave = usuario, valor = contraseña).
// Usa condicionales para comprobar si un usuario y contraseña (definidos en variables)
// coinciden con alguno del array, mostrando “Acceso permitido” o “Acceso denegado”.

// 1️⃣ Array asociativo con usuarios y contraseñas
$usuarios = array(
    "jose123" => "pass123",
    "lucia456" => "qwerty",
    "carlos789" => "abc123"
);

// 2️⃣ Variables que representan los datos ingresados
$usuarioIngresado = "lucia456";
$claveIngresada = "qwerty";

// 3️⃣ Comprobación del acceso
if (isset($usuarios[$usuarioIngresado]) && $usuarios[$usuarioIngresado] === $claveIngresada) {
    // isset() comprueba si el usuario existe en el array
    // === comprueba que la contraseña coincida exactamente
    echo "Acceso permitido";
} else {
    echo "Acceso denegado";
}
?>
