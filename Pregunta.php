<?php

class Pregunta {
    public $id;
    public $id_evaluacion;
    public $texto;

    public function __construct($id_evaluacion, $texto) {
        $this->id_evaluacion = $id_evaluacion;
        $this->texto = $texto;
    }

    public function create() {
        echo "Pregunta '$this->texto' creada para evaluación $this->id_evaluacion.<br>";
        return 1;
    }

    public function getAll() {
        return [
            ['id' => 1, 'id_evaluacion' => 1, 'texto' => '¿Cuánto es 4+6?'],
            ['id' => 2, 'id_evaluacion' => 2, 'texto' => '¿Quién descubrió América?']
        ];
    }
}
