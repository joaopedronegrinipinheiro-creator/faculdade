<?php

//Array simples//
$lanches = array("pastel", "pizza", "hamburguer", "hotdog", "xis", "churrasco");

//echo $lanches[0];//
echo "Hoje pela manhã comi $lanches[0], $lanches[2] e comi $lanches[5].";

echo "<hr>";
print_r($lanches);
// vale a partir do php 5.6//
$bebidas = ["vodka", "fanta uva", "suco", "agua", "whisky", "cafe",];

echo "<hr>";
print_r($bebidas);
echo "<h1>$bebidas[5]</h1>";

//Array associativo (dicionario do python)

$aluno =  [
    "nome" => "Roblox",
    "idade" => "21",
    "curso" => ["ADS", "Moda"]
];
echo "<hr>";
print_r($aluno);
echo "<h2>$aluno[nome], está com $aluno[idade] anos. E está
matriculado no curso de $aluno[curso][0] </h2>";

//Array Multi Dimensional//

$funcionarios = [
    [
        "nome" => "Ricardo",
        "setor" => "Administrativo",
        "email" => "ricardo@gmail.com"
    ],
    [
        "nome" => "Gustavo",
        "setor" => "Financeiro",
        "email" => "gustavo@gmail.com"
    ],
    [
        "nome" => "Ana da silva",
        "setor" => ["Marketing", "ti"],
        "email" => "ana@gmail.com"
    ]
];
echo "<pre>";
print_r($funcionarios);
echo "</pre>";
echo $funcionarios[2]['setor'][0];
echo "<hr>";
// no PHP usamos o ponto (.) para concatenar strings.

echo "<p>a funcionaria ". $funcionarios[2]['nome'] . "possui o e-mail" . $funcionarios[2]['email']
 . " e atua nos setores " .$funcionarios[2]['setor'][0] . $funcionarios[2]['setor'][1] . "</p>";

/*comandos de repetição (loopings)*/
/*
   - indice - de onde começa a repetição. (ponto de partida)
   - teste logico = logica para que o comando continue repetindo.
   - incremento = é o que ocorre com o indice a cada repetição.
*/
// $i = $i + 1 é mesma coisa que $i++
for ($i = 0; $i <= 10; $i++){
    echo "<p>$i</p>";
}

for ($i=0; $i < 100; $i+=5) {
    echo "$i - ";
}

$bebidas = ["vodka", "fanta uva", "suco", "agua", "minecraft"];

$contar = count($bebidas);
for ($i=0; $i <5; $i++) {
    echo $bebidas[$i] . "<br>";
}


?>