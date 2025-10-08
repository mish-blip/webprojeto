<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>

<body>
    <h1>Cadastre-se</h1>

    <form action="/projeto-flight/public/cadastro" method="POST">

        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="login">Login:</label><br>
        <input type="text" id="login" name="login" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>

</html>