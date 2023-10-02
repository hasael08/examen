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

class Estudiante extends Persona {
    public $numeroDeEstudiante;

    public function __construct($nombre, $apellido, $edad, $ciudad, $correo, $numeroDeEstudiante) {
        parent::__construct($nombre, $apellido, $edad, $ciudad, $correo);
        $this->numeroDeEstudiante = $numeroDeEstudiante;
    }

    public function obtenerInformacion() {
        $informacionPadre = parent::obtenerInformacion();
        return "{$informacionPadre}, Estudiante #{$this->numeroDeEstudiante}";
    }
}

// Crear objetos Persona y Estudiante
$persona = new Persona("Jhonatan", "Calle", 19, "Piura", "jhcallem@ucvvirtual.edu.pe");
$estudiante = new Estudiante("Ana", "Gomez", 25, "Lima", "ana@gmail.com", 78);

// Utilizar los métodos obtenerInformacion
echo $persona->obtenerInformacion(); 
echo "<br>";
echo $estudiante->obtenerInformacion(); 
?>
