<?php
//Comandos Condicionais
$idade = "TESTANDO";
if ($idade >= 18){
    echo "<p>Entrada autorizada!</p>";
}else{
    echo "<p>Entrada somente para maiores de 18 anos.</p>";
}

$aluno = "Miguel";

if($aluno == "Ricardo"){
    echo "<p>Passar na coordenação</p>"
}else{
    echo "<p>Entrada autorizada!</p>";
}

//E: and - &&
$login = "admin"
$senha = 12345; //senha númerica é obrigatorio ser um INT (nesse exemplo)

if($login == "admin" and $senha === 172130){
    echo "<h2>Bem vindo ao sistema!</h2>";
}else{
    echo "<h2>Usuario ou senha invalidos.</h2>";
}

$nota1 = 10;
$nota2 = 10;
$nota3 = 10;
echo $media = ($nota + $nota2 + $nota3) / 3;

if($media >= 7){
    echo "<p>0 aluno esta APROVADO com media $media.</p>";
}elseif($media <= 5){
    echo "<p>0 aluno esta REPROVADO com media $media.</p>";
}else{
    echo "<p>0 aluno esta em RECUPERAÇÃO com media $media.</p>";
}