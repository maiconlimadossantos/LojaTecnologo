<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        <label for="nome">Nome do produto</label>
        <input type="text" name="nome" id="nome">
        <br>
        <label for="preco">Preço do produto</label>
        <input type="numerico" name="preco" id="preco">
        <br>
        <label for="data">Data validade</label>
        <input type="data" name="data" id="data">
        <br>

    </form>

</body>
</html>