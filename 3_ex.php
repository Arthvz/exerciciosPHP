<?php
/*3 - Faça um programa que apresente informações sobre o grupo de funcionários de uma empresa. Os dados desses funcionários devem estar em um array, contendo: Nome, gênero, salário e área. As informações requeridas, com base nas informações desse array são:

Qual o maior salário?
Qual média de salário por área?
Qual área tem maisF e menos mulheres?
Qual gênero ganha maisF, homem ou mulher?
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
#Maior salário
$maiorSalario = 0;

#Média de salário
$engFuncionarios = 0; $contFuncionarios = 0; $mktFuncionarios = 0; $finFuncionarios = 0;
$engSomaTotal = 0; $contSomaTotal = 0; $mktSomaTotal = 0; $finSomaTotal = 0;

#Mais e menos mulheres
$engF = 0; $contF = 0; $mktF = 0; $finF = 0;
$maisF = 0; $menosF = 0;

#Qual ganha maisF
$mediaF = 0; $mediaM = 0; $salarioF = 0; $salarioM = 0; $funcionariosF = 0; $funcionariosM = 0; $maisSalario = 0; 

$funcionarios = [
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
];

function medias($x, $y){
    $medias = $x / $y;
    return $medias;
}

foreach($funcionarios as $funcionario) {
    if($maiorSalario < $funcionario['salario']) {
        $maiorSalario = $funcionario['salario'];
    }
    switch($funcionario['area']) {
        case 'engenharia':
            $engSomaTotal += $funcionario['salario'];
            $engFuncionarios++;
            break;
        case 'contabilidade':
            $contSomaTotal += $funcionario['salario'];
            $contFuncionarios++;
            break;
        case 'marketing':
            $mktSomaTotal += $funcionario['salario'];
            $mktFuncionarios++;
            break;
        case 'financeiro':
            $finSomaTotal += $funcionario['salario'];
            $finFuncionarios++;
            break;
    }
    switch($funcionario['area']) {
        case 'engenharia':
            if($funcionario['genero'] == 'F' || 'f') {
                $engF++;
            }
            break;
        case 'engenharia':
            if($funcionario['genero'] == 'F' || 'f') {
                $contF++;
            }
            break;
        case 'engenharia':
            if($funcionario['genero'] == 'F' || 'f') {
                $mktF++;
            }
            break;
        case 'engenharia':
            if($funcionario['genero'] == 'F' || 'f') {
                $finF++;
            }
            break;
    }
    $totalFemininoArea = ['engenharia' => $engF, 'contabilidade' => $contF, 'marketing' => $mktF, 'financeiro' => $finF];
    foreach($totalFemininoArea as $area => $totalFem) {
        if($maisF < $totalFem) {
            $maisF = $totalFem;
            if($menosF > $totalFem) {
                $menosF = $totalFem;
            }
        }
    }
    switch($funcionario['genero']) {
        case 'F':
            $salarioF += $funcionario['salario'];
            $funcionariosF++;
            break;
        case 'f':
            $salarioF += $funcionario['salario'];
            $funcionariosF++;
            break;
        case 'M':
            $salarioM += $funcionario['salario'];
            $funcionariosM++;
            break;
        case 'm':
            $salarioM += $funcionario['salario'];
            $funcionariosM++;
            break;
    }
}
$mediaF = medias($salarioF, $funcionariosF);
$mediaM = medias($salarioM, $funcionariosM);
$salariosGeneros = ['Feminino' => $mediaF, 'Masculino' => $mediaM];
foreach($salariosGeneros as $salarios) {
    if($salarios > $maisSalario) {
        $maisSalario = $salarios;
    }
}

/*
Perguntas:
echo 'Qual o maior salário?: ' 
echo 'Qual média de salário por área?: '
echo 'Qual área tem mais e menos mulheres?: '
echo 'Qual gênero ganha mais, homem ou mulher?: '
*/

echo '<b>Qual o maior salário?: </b><br>' ;
echo 'O maior salário da empresa é: R$' . number_format($maiorSalario, 2, ',', '.') . '<br><br>';
echo '<b>Qual média de salário por área?: </b><br>';
echo 'Média de salário da área de Engenharia: -> R$', number_format(medias($engSomaTotal, $engFuncionarios), 2, ',', '.') . '<br>';
echo 'Média de salário da área de Contabilidade: -> R$', number_format(medias($contSomaTotal, $contFuncionarios), 2, ',', '.') . '<br>';
echo 'Média de salário da área de Marketing: -> R$', number_format(medias($mktSomaTotal, $mktFuncionarios), 2, ',', '.') . '<br>';
echo 'Média de salário da área de Financeiro: -> R$', number_format(medias($finSomaTotal, $finFuncionarios), 2, ',', '.') . '<br><br>';
echo '<b>Qual área tem mais e menos mulheres?: </b><br>';
echo "Com $maisF mulheres, a área de ". array_search($maisF, $totalFemininoArea) . ' é a que possui mais funcionárias mulheres na empresa. <br>';
echo "Com $menosF mulheres, a área de ". array_search($menosF, $totalFemininoArea) . ' é a que possui menos funcionárias mulheres na empresa. <br><br>';
echo '<b>Qual gênero ganha mais, homem ou mulher?: </b><br>';
echo 'O gênero ' . array_search($maisSalario, $salariosGeneros) . ' são os(as) que ganham mais na empresa! Eles(as) ganham por volta de: -> R$' . number_format($maisSalario, 2, ',', '.');