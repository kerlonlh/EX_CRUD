<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Data de Nascimento</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require '/xampp/htdocs/projeto/mvc/Model/conexao.php';

                $sql = "SELECT id, nome, email, data_nasc FROM usuarios";

                $dado = $pdo ->prepare($sql);
                $dado->execute([]);
                while ($linha = $dado->fetch(PDO::FETCH_ASSOC)){
                    $id = $linha['id'];
                    $nome = $linha['nome'];
                    $email = $linha['email'];
                    $data_nasc = $linha['data_nasc'];

                    $data_nasc = inverte_data($data_nasc);

                    echo "<tr>
                            <td>$nome</td>
                            <td>$email</td>
                            <td>$data_nasc</td>
                            <td>
                                <form action='index.php?pg=editarUser' method='POST'>
                                    <input type='hidden' name='editarUser' value='$id'>
                                    <button class='btn-edit'type='submit'>Editar</button>
                                </form>
                            </td>
                            <td>
                                <form action='index.php?pg=deleteUser' method='POST'>
                                    <input type='hidden' name='deleteUser' value='$id'>
                                    <button class='btn-edit'type='submit'>Deletar</button>
                                </form>
                            </td>
                        </tr>";

                }
                function inverte_data($data){
                    $d = explode ('-', $data);
                    $escreve = $d[2] . "/" . $d[1] . "/" . $d[0];
                    return $escreve;
                }
            ?>
        </tbody>
    </table>
</body>
</html>
