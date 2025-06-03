<?php

class Evaluacion {
    public $id;
    public $titulo;

    public function __construct($titulo) {
        $this->titulo = $titulo;
    }

    public function create() {
        echo "Evaluación '$this->titulo' creada.<br>";
        return 1;
    }

    public function getAll() {
        return [
            ['id' => 1, 'titulo' => 'Evaluación de Matemáticas'],
            ['id' => 2, 'titulo' => 'Evaluación de Historia']
        ];
    }
}
