<?php
// Array sintaxis y modificación de valor
$nuevoArray = array("Nombre", "Apellido", "Edad");
$nuevoArray[2] = "Direccion";
echo $nuevoArray[2];
print_r($nuevoArray);

// arrays asociativos son como los mapas en js con clave valor
$arrayAsociativo = array("Nombre" => "Jose", "Apellido" => "Soldado");
print_r($arrayAsociativo);

//array multidimensional (matriz) array que contiene otros arrays.
$personas = array(
    array("José", "Pérez", 28),
    array("María", "López", 32),
    array("Carlos", "García", 25)
);

//Acceso a valores
echo $personas[0][0]; // José
echo $personas[1][1]; // López
echo $personas[2][2]; // 25

// eliminar array 
unset($nuevoArray);              // elimina todo el array
unset($nuevoArray[2]);    // elimina un solo elemento


// funciones útiles en arrays

# Union
array_merge($nuevoArray, $arrayAsociativo);

#division
array_slice($nuevoArray, offset, length);

#ordenacion
sort($array);   // ascendente
rsort($array);  // descendente
