<?php







$i = 1;
while ($i <= 10) {
    echo "<h3>$i</h3>"
    $i++;
}
echo "<hr>"
$filmes = ["Missão impossivel," "Um sonho de liberdade", "Matrix", "Mid90", "Topgun",];

$i = 0;
while($i < 5){
    //$n = $i + 1;
    //echo "$n - $filmes[$i] <br>";
    echo "$i + 1 . " - $filmes[$i] <br>";
    $i++;
}
//Decremento
$i = 100
while ($i > 0){
    echo "$i - ";
    $i--;
}
echo "<hr>"$i = count($filmes) - 1;
while($i >= 0){
    "echo "$i + 1 . " - $filmes[$i] <br>";
    $i--;
}
echo "<hr>";

/* Foreach - Ideal para Arrays */
foreach ($filmes as $filme){
    $key = $key + 1;
    echo "<p>$key - $filme</p>";
}
echo "<hr>";
#alunos = [
    [
        "nome" => "Roblox",
        "matricula" => "1234",
        "idade" => 21
    ],
    [
        "nome" => "Ana Beatriz",
        "matricula" => "54561",
        "idade" => 25
    ],
    [
        "nome" => "Maryane",
        "matricula" => "4894986",
        "idade" => 23
    ]
];
//echo $alunos[2]['idade'];
for($i = 0; $i < 3; $i++){
    echo $alunos[$i]['nome'] . "<br>";
}

echo "<h2>Mostrando dados com While</h2>";
$i = 0;
while( $i < count($alunos)){
    $nome = $alunos[$i]['nome'];
    $idade = $alunos[$i]['idade'];
    $matricula = $alunos[$i]['matricula']

    echo "O aluno $nome de matricula $matricula possui $idade anos.<br>";
    $i++;
}
echo "<h2>Mostrando dados com Foreach</h2>";
foreach($alunos as $alunos){
    echo "O aluno $aluno[nome de matricula $aluno[matricula] possui $aluno
    [idade] anos. <br>";
}

