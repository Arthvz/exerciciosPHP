<?php
/*3 - Faça um programa que apresente informações sobre o grupo de funcionários de uma empresa. Os dados desses funcionários devem estar em um array, contendo: Nome, gênero, salário e área. As informações requeridas, com base nas informações desse array são:

Qual o maior salário?
Qual média de salário por área?
Qual área tem mais e menos mulheres?
Qual gênero ganha mais, homem ou mulher?
Exemplo de array:
$funcionários = [
    ['nome' => 'João da Silva', 'genero' => 'M', 'area' => 'engenharia', 'salario' => 6000],
    ['nome' => 'Maria da Silva', 'genero' => 'F', 'area' => 'marketing', 'salario' => 3000],
    ['nome' => 'Beltrano da Silva', 'genero' => 'M', 'area' => 'contabilidade', 'salario' => 4000],
    ['nome' => 'Ciclano Pereira', 'genero' => 'M', 'area' => 'engenharia', 'salario' => 4000],
    ['nome' => 'Fulana Oliveira', 'genero' => 'F', 'area' => 'contabilidade', 'salario' => 2000],
    ['nome' => 'Jão Silveira', 'genero' => 'M', 'area' => 'marketing', 'salario' => 4000],
    ['nome' => 'Cirilo Ferreira', 'genero' => 'M', 'area' => 'contabilidade', 'salario' => 3000],
    ['nome' => 'Zé das Couve', 'genero' => 'M', 'area' => 'engenharia', 'salario' => 5000],
    ['nome' => 'Pedro Pedrada', 'genero' => 'M', 'area' => 'contabilidade', 'salario' => 2000],
    ['nome' => 'Paulo Paulada', 'genero' => 'M', 'area' => 'marketing', 'salario' => 2000],
    ['nome' => 'Creuza Reis', 'genero' => 'F', 'area' => 'financeiro', 'salario' => 1500],
    ['nome' => 'Yarley Ground', 'genero' => 'M', 'area' => 'financeiro', 'salario' => 3000],
    ['nome' => 'Billy Bill', 'genero' => 'M', 'area' => 'marketing', 'salario' => 2000],
    ['nome' => 'Brian Brioche', 'genero' => 'M', 'area' => 'engenharia', 'salario' => 6500],
    ['nome' => 'Mary Mariana', 'genero' => 'F', 'area' => 'financeiro', 'salario' => 2000],
]

*/

$funcionarios = [
    'joao' => ['nome' => 'João da Silva',
     'genero' => 'M',
     'area' => 'engenharia',
     'salario' => 6000],

    ['nome' => 'Maria da Silva',
     'genero' => 'F', 
     'area' => 'marketing',
     'salario' => 3000],

    ['nome' => 'Beltrano da Silva',
     'genero' => 'M',
     'area' => 'contabilidade',
     'salario' => 4000],

    ['nome' => 'Ciclano Pereira', 'genero' => 'M', 'area' => 'engenharia', 'salario' => 4000],
    ['nome' => 'Fulana Oliveira', 'genero' => 'F', 'area' => 'contabilidade', 'salario' => 2000],
    ['nome' => 'Jão Silveira', 'genero' => 'M', 'area' => 'marketing', 'salario' => 4000],
    ['nome' => 'Cirilo Ferreira', 'genero' => 'M', 'area' => 'contabilidade', 'salario' => 3000],
    ['nome' => 'Zé das Couve', 'genero' => 'M', 'area' => 'engenharia', 'salario' => 5000],
    ['nome' => 'Pedro Pedrada', 'genero' => 'M', 'area' => 'contabilidade', 'salario' => 2000],
    ['nome' => 'Paulo Paulada', 'genero' => 'M', 'area' => 'marketing', 'salario' => 2000],
    ['nome' => 'Creuza Reis', 'genero' => 'F', 'area' => 'financeiro', 'salario' => 1500],
    ['nome' => 'Yarley Ground', 'genero' => 'M', 'area' => 'financeiro', 'salario' => 3000],
    ['nome' => 'Billy Bill', 'genero' => 'M', 'area' => 'marketing', 'salario' => 2000],
    ['nome' => 'Brian Brioche', 'genero' => 'M', 'area' => 'engenharia', 'salario' => 6500],
    ['nome' => 'Mary Mariana', 'genero' => 'F', 'area' => 'financeiro', 'salario' => 2000],
];

foreach($funcionarios as $salarios ){
    echo $salarios['joao']['salario'];
};

/*
echo 'Qual o maior salário?: ' 
echo 'Qual média de salário por área?: '
echo 'Qual área tem mais e menos mulheres?: '
echo 'Qual gênero ganha mais, homem ou mulher?: '
*/