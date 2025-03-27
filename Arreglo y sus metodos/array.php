<?php


//array
$ropa = array("camiseta", "pantalon", "vestido", "short");

//Añadir un nuevo registro al array
$ropa[]="buso";

print_r(value: $ropa);

// array con eliminacion incorrecta 
$fruta = ["fresas", "manzana", "banano", "durazno"];
unset($fruta[2]);
print_r($fruta);

//eliminar un registro del array 
$eliminarRopa = "short";
$llave = array_search(needle: $eliminarRopa, haystack: $ropa);

if($llave!==false){
    unset($ropa[$llave]);
}
print_r(value: $ropa);

?>