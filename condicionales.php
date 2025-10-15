<?php

$valor1 = 12;
$valor2 = 15;
if ($valor1 <= $valor2) {
    // acción 1
    echo "El valor" + $valor1 + " es menor que el valor " + $valor2;
} else {
    // acción 2
    echo "El valor" + $valor1 + " es mayor que el valor " + $valor2;
}


// switch case
// Variable con un número del 1 al 7
$dia = 3;

switch ($dia) {
    case 1:
        echo "Hoy es Lunes";
        break;

    case 2:
        echo "Hoy es Martes";
        break;

    case 3:
        echo "Hoy es Miércoles";
        break;

    case 4:
        echo "Hoy es Jueves";
        break;

    case 5:
        echo "Hoy es Viernes";
        break;

    case 6:
        echo "Hoy es Sábado";
        break;

    case 7:
        echo "Hoy es Domingo";
        break;

    default:
        echo "Número de día no válido (debe ser del 1 al 7)";
        break;
}