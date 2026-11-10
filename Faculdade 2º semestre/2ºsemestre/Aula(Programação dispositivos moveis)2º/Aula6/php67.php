<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios  com html e php</title>
</head>
<body>
<!-- method get / post -->
    <form action="" method="post">
        <input type="text" name="nome" placeholder="seu nome">
        <input type="email" name="email" placeholder="seu e-mail">
        <input type="number" name="idade" placeholder="sua idade">
        <input type="submit" name="enviar">
    </form>
    <?php
    //print_r($_POST);
    //Os dados enviados via post são recuperados pela var $_POST
    //No PHP os dados enviados via post são recuparados pela var $_POST
    if( isset($_POST['enviar']) ) {
        $erros = [];
        //https://www.php.net/manual/en/filter.constants.php
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        //$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_INT );

        if (strlen($nome) < 3) {
            $erros[] = "Preencha seu nome completo.";
        }
        if (strlen($email)) {
            $erros[] = "Preencha seu e-mail completo";
        }
        if ($idade < 18) {
            $erros[] = "Cadastro somente para maiores de 18 anos."
        }

        if (empty($erros)){
            //Continuar o envio do formulario
        echo "<h2>Confira seus dados:</h2>";
        echo "Nome: $_POST[nome] <br>";
        echo "E-mail: $_POST[email] <br>";
        echo "idade: $_POST[idade]";
    }else{
        foreach ($erros as $erro) {
            echo "$erro >br<"
        }
    }
}
?>

</body>
</html>