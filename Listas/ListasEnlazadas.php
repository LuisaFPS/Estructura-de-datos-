<?php

class Nodo {
    public $dato;
    public $next;

    public function __construct($dato) {
        $this->dato = $dato;
        $this->next = null;
    }
}

class ListaEnlazada {
    public $cabeza;

    public function __construct() {
        $this->cabeza = null;
    }

    public function insertar($dato): void {
        $nuevonodo = new Nodo($dato);
        $nuevonodo->next = $this->cabeza;
        $this->cabeza = $nuevonodo;
    }

    public function imprimirHTML(): void {
        $actual = $this->cabeza;
        echo "<ul>";

        while ($actual != null) {
            echo "<li>" . $actual->dato . "</li>";
            $actual = $actual->next;
        }

        echo "</ul>";
    }
}

// Uso de la lista
$lista = new ListaEnlazada();

$lista->insertar("Elemento 1");
$lista->insertar("Elemento 2");
$lista->insertar("Elemento 3");

$lista->imprimirHTML();

?>