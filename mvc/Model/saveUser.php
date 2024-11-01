<?php
    require '/xampp/htdocs/projeto/mvc/Model/conexao.php';
    switch ($_REQUEST ["acao"]){
        case 'cadastrar':
            $nome = $_POST ["nome"];
            $senha = $_POST ["senha"];
            $email = $_POST ["email"];
            $data_nasc = $_POST ["data_nasc"];


            $sql = "INSERT INTO usuarios (nome, senha, email, data_nasc) VALUES ('$nome', '$senha','$email','$data_nasc')";
            if($res = $pdo ->query($sql)){
                echo "$nome cadastrado";
            }
            

           
    }


?>