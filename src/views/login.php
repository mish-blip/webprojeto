<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
    </style>
</head>
<body>

    <h1>Acesse sua conta</h1>

    <form action="/projeto-flight/public/login" method="POST">

        <label for="login">Login ou Email:</label><br>
        <input type="text" id="login" name="login" required>
        <br>

        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password" required>
        <br><br>

        <button type="submit">Entrar</button>
    </form>

    <hr style="margin-top: 20px;">

    <p><a href="/projeto-flight/public/cadastro">Cadastre-se aqui</a>.</p>

</body>
</html>