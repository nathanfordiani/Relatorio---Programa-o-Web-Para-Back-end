<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastre-se</h1>
        <form action="cadastrar.php" method="post">
            <div> <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            </div>
            <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            </div>
            <div>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            </div>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>
