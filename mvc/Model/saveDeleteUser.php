<?php
    require '/xampp/htdocs/projeto/mvc/Model/conexao.php';
    switch ($_REQUEST ["acao"]){
        case 'cadastrar':
            $id = $_POST ["id"];



            $select = "SELECT nome FROM usuarios WHERE id = :id";
            $dados = $pdo->prepare($select);
            $dados->execute([':id' => $id]);
            $linha = $dados->fetch(PDO::FETCH_ASSOC);
            $nome = $linha['nome'];

            $sql = "DELETE FROM usuarios WHERE id = :id";
            $sql = $pdo->prepare($sql);

            if($sql->execute([
                ':id' => $id])){
                    echo "$nome  foi deletado";
            } else {
                echo "$nome  NÃO foi deletado";
            }
    }


?>

<a href="index.php?pg=listUser"><button>Voltar</button></a>