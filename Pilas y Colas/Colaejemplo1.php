<?php

//arreglo vacío
$cola = array();

//Se agregan elementos a la cola
array_push($cola, "Manzana");
array_push($cola, "Papaya");
array_push($cola, "Banano");
array_push($cola, "Piña");
array_push($cola, "Mango");
array_push($cola, "Guanabana");
array_push($cola, "Mandarina");

//Se extrae el primer elemento con array_shift()
$frutas = array_shift($cola);

echo "La fruta que toca comer hoy es: " . $frutas;

?>