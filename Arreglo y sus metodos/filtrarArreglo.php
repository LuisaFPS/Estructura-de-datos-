<?php

//arreglo
$numero = array(24,12,11,25,20,6,1);

// filtrar los numeros mayores a valor 
$numeroFiltrar = array_filter(array: $numero, callback: function ($valor): bool{
    return $valor > 12;
});

print_r(value: $numeroFiltrar);

?>