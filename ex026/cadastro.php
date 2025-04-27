<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>        
        <h1>Código exemplo de PHP</h1>
        <?php
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            echo "olá $nome $sobrenome seja bem vindo ao site";
        ?>
    </main>
</body>
</html>