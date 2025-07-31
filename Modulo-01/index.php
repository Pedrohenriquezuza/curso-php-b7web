<?php

// EXERCICIO 1
$cidades = ["RJ", "SP", "NY", "TO"];
echo $cidades[2];
echo "<br />";
echo "<br />";



// EXERCICIO 2
$alunos = [
    "Pedro" => 12,
    "Maria" => 12,
    "Cleuza" => 16,
    "Chrystian" => 17
];
echo $alunos["Cleuza"];
echo "<br />";
echo "<br />";



// EXERCICIO 3
$cores = ["Vermelho", "Azul", "Branco"];
array_push($cores, "Marrom");
array_shift($cores);
print_r($cores);
echo "<br />";
echo "<br />";



// EXERCICIO 4
$precos = [
    "Teclado" => 42,90,
    "Mouse" => 32,50,
    "CPU" => 300,
    "Monitor" => 750
];
$precos["CPU"] += 10; //Adicionando Mais R$10
$precos["Teclado"] += 1; // Removi R$1 Real 
print_r($precos);