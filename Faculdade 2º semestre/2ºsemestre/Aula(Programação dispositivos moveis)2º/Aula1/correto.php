<?php
$aluno = "Model"; //String
$idade = 21; //int
$altura = 1.84; //float
$matriculado = true; // true - false (boolean)

echo 'Olá, $aluno bem vindo as aulas de PHP!<br>';
echo "<h1>Olá, $aluno bem vindo as aulas de PHP!</h1>";
//Soma
$x = "15";
$y = 5.3;
$soma = $x + $y;
echo $soma;

//Concatenar (juntar strings)
$nome = "Gabriel ";
$nome .= "Model";

echo "<h2>$nome</h2>";

//Constantes
define("CURSO", "Programação com PHP");
echo CURSO;
//Não permite mudar o valor.
//define("CURSO", "HTML e CSS");

//Versão moderna de declarar constantes
const TESTE = "Novo";
echo "<br>" . TESTE ;

?>

//php so entra com este computador e depois disco C depois xamp depois no app xamp control da start no apache e SQL e volta 
e vai em htdocs e depois cria uma pasta tipo"Aula01" e salva como arquivo PHP e depois vai no navegador escreve por exemplo: 
"http://localhost/aulas(php)/Aula01/ e pronto só criar"