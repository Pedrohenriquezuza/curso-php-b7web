<?php

$nome = array("Pedro", "Maria", "Cleuza");

$numeros = [1,  2, 30];

$carros = [
    "Alessandro" => 1,
    "Maria" => 2,
    "Pedro" => 30
];

$informacoes = [
    "Alessandro" => [
        "carros" => 1,
        "idade" => 30,
        "altura" => 1.74,
        "cidade" => "Rio De Janeiro"
    ],
    "Maria" => [
        "carros" => 2,
        "idade" => 25,
        "altura" => 1.64,
        "cidade" => "São Paulo"
    ]
];

echo '<pre>';
var_dump($informacoes["Alessandro"]["carros"]);
echo '<pre>';