<?php

class Nodo{

    public $siguiente;
        public function construct($dato){
            $this->dato = $dato;
            $this->siguiente = null;
        }
}

class ListaEnlazada(){
    public $cabeza;
    public function __construct(){
        $this->cabeza = null;
    }

    public function insertar($dato){
        $nuevoNodo = new Nodo($dato);
        $nuevoNodo->siguiente=$this-cabeza;
        $this->cabeza=$nuevoNodo;
    }

    public imprimirHTML(){
        $actual = $this->cabeza;
        echo"<ul>";

        while($actual!=null)
        echo "<li>".$actual."</li>";
        $actual=$actual->siguiente;

        echo"</ul>";
    }
}    

?>