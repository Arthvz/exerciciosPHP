<?php
/*2 - Crie um programa que apresente o maior, o menor e a média de todos os números presentes em um array de tamanho aleatório. Exemplo de array:
$numeros = [53, 82, 80, 66, 41, 64, 28, 99, 77, 50];

Resultados:
Maior: 99; Menor: 28; Média: 64
*/

$num =[
    'primeiraSoma' => [57, 27, 93, 73, 12, 85, 29, 53, 82],
    'segundaSoma' => [57, 27, 93, 73, 12, 85, 29, 53, 82, 80, 66, 41],
    'terceiraSoma' => [57, 27, 93, 73, 12, 85, 29, 53, 82, 80, 66, 41, 64, 28, 99, 75],
];

echo "Maior: " . max($num['primeiraSoma']) . "; " . "Menor: " . min($num['primeiraSoma']) . "; " . "Média: " . (array_sum($num['primeiraSoma']) / (count($num['primeiraSoma'])));

