<?php
/*1 - Crie um programa em PHP, que calcule a soma de todos os números presentes em um array de tamanho aleatório e apresente na tela. Exemplo de array:
$numeros = [53, 82, 80, 66, 41, 64, 28, 99, 77, 57];

Soma: 647
*/

$num =[
    'primeiraSoma' => [57, 27, 93, 73, 12, 85, 29, 53, 82],
    'segundaSoma' => [57, 27, 93, 73, 12, 85, 29, 53, 82, 80, 66, 41],
    'terceiraSoma' => [57, 27, 93, 73, 12, 85, 29, 53, 82, 80, 66, 41, 64, 28, 99, 75],
];

echo "Soma: " . array_sum($num['primeiraSoma']);

