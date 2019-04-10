<?php 
    //opcache_reset();    
    require_once('components/config.php');

    $cons = $pdo->query("SELECT * FROM visitante");
    $resultado = $cons->fetchAll(PDO::FETCH_ASSOC);

    if($resultado){
        foreach($resultado as $linha){
            echo '<b>'.$linha['apelido'].':</b> ';
            echo $linha['comentario'];
            echo '<hr>';
        }

    }


    // echo '<pre>';
    // var_dump(get_defined_vars());
    // echo '</pre>';


?>