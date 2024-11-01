<?php
    require '/xampp/htdocs/projeto/mvc/Model/conexao.php';
    switch ($_REQUEST ["acao"]){
        case 'cadastrar':
            $id = $_POST ["id"];
            $nome = $_POST ["nome"];
            $senha = $_POST ["senha"];
            $email = $_POST ["email"];
            $data_nasc = $_POST ["data_nasc"];


            $sql = "UPDATE usuarios SET nome = :nome, senha =:senha, email = :email, data_nasc = :data_nasc WHERE id = :id";
            $sql = $pdo->prepare($sql);

            if($sql->execute([
                ':id' => $id, 
                ':nome' => $nome,
                ':senha' => $senha, 
                ':email' => $email, 
                ':data_nasc' => $data_nasc])){
                    echo "$nome  foi atualizado";
            } else {
                echo "$nome  NÃO foi atualizado";
            }
    }


?>

<a href="index.php?pg=listUser"><button>Voltar</button></a>