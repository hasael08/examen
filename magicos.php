<?php
class Persona {
    public $nombre;
    public $apellido;
    public $edad;
    public $ciudad;
    public $correo;

    public function __construct($nombre, $apellido, $edad, $ciudad, $correo) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
        $this->correo = $correo;
    }

    public function obtenerInformacion() {
        return "{$this->nombre} {$this->apellido}, {$this->edad} años, de {$this->ciudad}";
    }
}

// Crear objetos Persona
$persona1 = new Persona("Jhonatan", "Hasael", 19, "Ciudad A", "juan@example.com");
$persona2 = new Persona("Ana", "Gomez", 25, "Ciudad B", "ana@example.com");

// Utilizar el método obtenerInformacion
echo $persona1->obtenerInformacion(); // Imprimirá: Juan Perez, 30 años, de Ciudad A
?>
