<?php
include 'Evaluacion.php';
include 'Pregunta.php';
include 'Alternativa.php';

$eval = new Evaluacion("Evaluación de Ciencias");
$eval->create();

$preg = new Pregunta(1, "¿Qué es la fotosíntesis?");
$preg->create();

$alt = new Alternativa(1, "Proceso que hacen las plantas");
$alt->create();

print_r($eval->getAll());
print_r($preg->getAll());
print_r($alt->getAll());
