<?php

// arreglo vacio
$pila = array();

// agrego elementos al array
array_push ($pila, "elemento 1");
array_push ($pila, "elemento 2");
array_push ($pila, "elemento 3");
array_push ($pila, "elemento 4");
array_push ($pila, "elemento 5");
array_push ($pila, "elemento 6");
array_push ($pila, "elemento 7");
array_push ($pila, "elemento 8");
array_push ($pila, "elemento 9");

// elimina y devuelve el último elemento agregado al arreglo
$elemento = array_pop($pila);

echo "ultimo elemento ingresado a la pila es el ", $elemento;


//$pila2 = array();

//array_push ($pila2, "elemento 1");
//array_push ($pila2, "elemento 2");
//array_push ($pila2, "elemento 3");

//$elemento = array_pop($pila2);

//echo "ultimo elemento ingresado a la pila es el ", $elemento;

?>