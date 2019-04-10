<?php 
    // Versão do site Uploader 
    define('VERSAO','v1.0.5');

    // Infos do Banco de dados
    define('DB_HOST','localhost');
    define('DB_NAME','uploader');
    define('DB_USER','root');
    define('DB_PASS','');

    // Conexão com PDO
    try{
        $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo 'Erro ao conectar ao BD:<hr>'.$e;
    }

?>