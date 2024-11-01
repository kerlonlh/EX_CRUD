<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Usuário</title>
</head>
<body>
    <h1>Novo Usuário</h1>
    <form class="form" action="?pg=salvarUsuario" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label for="">Nome</label>
            <input type="text" name="nome" placeholder="Digite seu nome" required>
        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Digite seu email" required>
        </div>
        <div class="mb-3">
            <label for="">Senha</label>
            <input type="password" name="senha" placeholder="Digite sua senha" required>
        </div>
        <div class="mb-3">
            <label for="">data de nascimento</label>
            <input type="date" name="data_nasc" placeholder="Digite sua data de nascimento" required>
        </div>
        <div class="mb-3">
            
            <button type="submit">Cadastrar</button>
        </div>



    </form>
</body>
</html>