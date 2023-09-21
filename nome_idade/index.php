<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form method="get" action="output.php">
        <label for="nome">Nome</label>
        <input type="text" name="nome"> 
        <label for="">Ano de nascimento</label>
        <input type="number" name="ano">
        <label for="">Sexo:</label>
        <input type="radio" name="sexo" id="masc" value="homem" checked>
        <label for="masc">Masculino</label>
        <input type="radio" name="sexo" id="fem" value="mulher">
        <label for="fem">Feminino</label>
        <input type="submit" value="Enviar">
        
    </form>
</body>
</html>