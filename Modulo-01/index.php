<?php
// exemplo de String
// $texto = 'Pera, uva, maça e salada mista';

// //strlen() conta o numero de caracteres de uma string
// $numeroCaracteres = strlen($texto);
// $caracteresPalavraPera = strlen("pera");
// $caracteresPalavraUva = strlen("uva");
// $caracteresPalavraSalada = strlen("salada Mista");

// //strpos() - Busca a posição de alguma palavra na string

// $posicaoPalavraUva = strpos($texto, 'uva');
// $posicaoPalavraPera = strpos($texto, 'Pera');
// $posicaoPalavraSalada = strpos($texto, 'salada mista');

// //substr() - Retorna uma Parte de uma string
// $parteDaString = substr($texto, 0, 4);
// //EXERCICIO PERA
// $palavraPera = substr($texto, $posicaoPalavraPera, $caracteresPalavraPera);

// //EXERCICIO UVA
// $palavraUva = substr($texto, $posicaoPalavraUva, $caracteresPalavraUva);

// //EXERCICIO SALADA
// $palavraSalada = substr($texto, $posicaoPalavraSalada, $caracteresPalavraSalada);

// echo "$palavraPera <br />";
// echo "$palavraUva <br />";
// echo $palavraSalada;


//   // Exemplo de Integer
//   $idade = 13;

//   // Exemplo de float
//   $altura = 1.75;

//   // Exemplo de boolean
//   $estaEstudando = false -->


// //Exemplo de Integer
// $idade = 33;

// //Adição:
// echo $idade+5;
// echo '<br />';

// //Subtração
// echo $idade-$idade;
// echo '<br />';

// //Divisão
// echo $idade/$idade;
// echo '<br />';

// //Multiplicação
// echo $idade*$idade;
// echo '<br />';


// Exemplo de Float
// NUMEROS DECIMAIS EM PHP
$altura = 1;
$altura = 1.0;

$num1 = 2.00;
$num2 = 2.50;

// echo 'Multiplicação: '.($num1*$num2);
// echo '<br />';
// echo 'Adição: '.($num1+$num2);
// echo '<br />';
// echo 'Subtração: '.($num1 - $num2);
// echo '<br />';
// echo 'Divisão: '.($num1/$num2);

// Função de Arredondamento
// round()
//$num3 = 2.40;
//echo 'Arredondamento com round: '.round($num3);

// Função de Arredondamento para baixo --> floor()
//echo 'Arredondamento com floor: '.floor($num3);

// Função que Arredonda para cima --> ceil() 
$num3 = 4.0001;
echo 'Arredondamento com ceil: '.ceil($num3);
