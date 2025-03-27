<?php

// pirmer arreglo
$datos1 = array("nombre"=> "Andrea", "edad"=>40, "correo"=>"andrea1003@gmail.com");

// segundo arreglo
$datos2 = array("ciudad"=>"bogota", "profesion"=>"ingeniera");

// combinambos ambos con array_merge
$datosCombinados = array_merge($datos1, $datos2);

print_r(value: $datosCombinados);

?>