<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar Usuário</title>
</head>
<body>
    <?php
        require '/xampp/htdocs/projeto/mvc/Model/conexao.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['editarUser'])) {
            $id = $_POST['editarUser'];

            $sql = "SELECT * FROM usuarios WHERE id = :id";
            $dados = $pdo->prepare($sql);

            $dados->execute([':id' => $id]);
            $linha = $dados->fetch(PDO::FETCH_ASSOC);
            if ($linha) {
                ?>
                <h1>Editar Usuário</h1>
                <form class="form" action="?pg=salvarEdicaoUsuario" method="POST">
                <input type="hidden" name="acao" value="cadastrar">
                    <div class="mb-3">
                        <label for="">Nome</label>
                        <input type="text" name="nome" placeholder="Digite seu nome" value="<?php echo htmlspecialchars($linha['nome']);?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email" name="email" placeholder="Digite seu email" value="<?php echo htmlspecialchars($linha['email']);?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Senha</label>
                        <input type="password" name="senha" placeholder="Digite sua senha" value="<?php echo htmlspecialchars($linha['senha']);?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="">data de nascimento</label>
                        <input type="date" name="data_nasc" placeholder="Digite sua data de nascimento" value="<?php echo htmlspecialchars($linha['data_nasc']);?>" required>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                        <button type="submit">Atualizar</button>
                    </div>
                    <?php
                    } else {
                        echo "<p>Nome não encontrado.</p>";
                    }
                } else {
                    echo "<p>ID do nome não fornecido.</p>";
                }
                ?>


    </form>
</body>
</html>