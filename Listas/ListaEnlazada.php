¿Qué es una lista enlazada?

es una estructura de datos que consiste en una secuencia 
de elementos, donde cada elemento (llamado nodo) contiene 
un valor y referencia al siguiente nodo en la secuencia.
A diferencia de los arreglos, las listas enlazadas no 
tienen un tamaño fijo y permiten una inserción 
y eliminación de elementos más eficiente, 
ya que no requieren mover otros elementos.

<?php

class Nodo {
    public $dato;
    public $next;

    public function __construct($dato) {
        $this->dato = $dato;
        $this->next = null;
    }
}

class Lista{
    public $cabeza;

    public function __construct() {
        $this->cabeza = null;
    }

    // Método para insertar un nuevo nodo al principio de la lista
    public function insertar($dato): void {
        $nuevonodo = new Nodo($dato);
        $nuevonodo->next = $this->cabeza;
        $this->cabeza = $nuevonodo;
    }
   
    // Método para imprimir la lista en formato HTML
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

// Insertar elementos (nombres de frutas)
$lista->insertar("Manzana");
$lista->insertar("Banana");
$lista->insertar("Naranja");
$lista->insertar("Fresa");

// Imprimir la lista
echo "Lista de frutas después de insertar elementos:";
$lista->imprimirHTML();



?>