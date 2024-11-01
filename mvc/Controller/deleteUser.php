<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        require '/xampp/htdocs/projeto/mvc/Model/conexao.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['deleteUser'])) {
            $id = $_POST['deleteUser'];

            $sql = "SELECT * FROM usuarios WHERE id = :id";
            $dados = $pdo->prepare($sql);

            $dados->execute([':id' => $id]);
            $linha = $dados->fetch(PDO::FETCH_ASSOC);
            if ($linha) {
                ?>
                <h1>Deletar Usuário</h1>
                <form class="form" action="?pg=saveDeleteUser" method="POST">
                <input type="hidden" name="acao" value="cadastrar">

                    <div class="mb-3">
                        <p>Tem certeza que deseja deletar o usuário: <?php echo htmlspecialchars($linha['nome']);?> ?</p>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                        <button type="submit">Deletar</button>
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
    <a href="index.php?pg=listUser"><button>Voltar</button></a>
</body>
</html>