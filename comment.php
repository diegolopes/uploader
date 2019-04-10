<?php
    require_once('components/config.php');

    $nome = $_POST['nome'];
    $comentario = $_POST['comment'];

    // Validação fraca e simples de back-end
    if( $nome == '' || $comentario == '' || strpos($nome,'<') > 0 || strpos($nome,'>') >0 || strpos($comentario,'<') >0 || strpos($comentario,'>') > 0 || strlen($comentario) > 250 ){
        echo '<h1>Não use caracteres especiais, nem escreva mensagens muito grandes ou vazias</h1>';
        echo '<a href=uploads_list.php>Voltar</a>';

    }

    else{

        try{
            // Inserção no BD
            $sql = 'INSERT INTO visitante (apelido,comentario) VALUES(:nome, :comentario)';
            $query= $pdo->prepare($sql);
            $query->bindParam(':nome',$nome);
            $query->bindParam(':comentario',$comentario);
            $insert = $query->execute();
            echo 'Dados inseridos no BD. Pode relaxar.';

            #header('Location: uploads_list.php#comments');
        }

        catch(PDOException $e){
            echo '<pre>';
            //Erro Principal
            var_dump($e->getMessage());
            echo '<hr>';
            var_dump(get_defined_vars());
            echo '</pre>';
        }
    }

    // Comandinho secreto para resetar a tabela comentários rapidamente
    if($_GET['del'] == '1'){
        $sql= "TRUNCATE TABLE visitante";
        $del = $pdo->prepare($sql);
        $del->execute();
        echo 'Tabela de comentários limpa.';
    }




    




    // $insert = "<b>$nome :</b> $comentario <br><hr> \n";
    // file_put_contents('comments.txt',$insert, FILE_APPEND);
    // header('Location: uploads_list.php#comments');


?> 


