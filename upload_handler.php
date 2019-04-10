<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body class="container">
    <h1>Resultado do Upload</h1>
    <div class="card">
        <div class="card-body">

            <a href="index.php" class="btn btn-primary">Voltar ao Início</a>
            <?php
                // Nas versões do PHP anteriores a 4.1.0, $HTTP_POST_FILES deve ser utilizado ao invés de $_FILES.
                //Dependendo do servidor é obvio que é necessário trocar o diretório dos arquivos.
                $uploaddir = 'C:/xampp/htdocs/uploader/uploads/'; 

                echo '<pre>';
                
                for($i=0;$i < count($_FILES['file']['name']);$i++){
                    $uploadfile = $uploaddir . basename($_FILES['file']['name'][$i]);

                    if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $uploadfile)) {
                        echo $_FILES['file']['name'][$i].'<br>';
                        echo "<h4 class=text-success>Arquivo válido e enviado com sucesso.</h4><hr>\n";
                        
                    }
                    
                    else {
                        echo "<h4 class=text-danger> Erro de upload do arquivo! </h4> \n";
                    }
                }

                echo 'Aqui está mais informações técnicas sobre a operação: <hr> ';
                print_r($_FILES);

                print "</pre>";

                /*** 
                    echo '<pre>';
                    var_dump(get_defined_vars());
                    echo '</pre>';
                ***/
            ?>
            <a href="index.php" class="btn btn-primary">Voltar ao Início</a>
        </div>
    </div>
</body>
</html>
