<?php

class Alternativa {
    public $id;
    public $id_pregunta;
    public $opcion;

    public function __construct($id_pregunta, $opcion) {
        $this->id_pregunta = $id_pregunta;
        $this->opcion = $opcion;
    }

    public function create() {
        echo "Alternativa '$this->opcion' creada para pregunta $this->id_pregunta.<br>";
        return 1;
    }

    public function getAll() {
        return [
            ['id' => 1, 'id_pregunta' => 1, 'opcion' => '10'],
            ['id' => 2, 'id_pregunta' => 1, 'opcion' => '3'],
            ['id' => 3, 'id_pregunta' => 2, 'opcion' => 'Cristóbal Colón']
        ];
    }
}
