<?php
    //conectToDatabasse for injection
    try {
        $user = 'root';
        $password = '';
        $pdo = new PDO('mysql:host=localhost;dbname=blogdb', $user, $password, [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ]);
    }
    catch (PDOException $e) {
            die('Keine Verbindung zur Datenbank möglich: ' . $e->getMessage());
    }
    //write on db 
    if($isalert == false){
        if($imgbool === true){
        $stmt = $pdo->prepare('INSERT INTO posts (created_by, post_title, post_text, created_at, img)
                                        VALUES (:created_by, :post_title, :post_text, now(), :img)');
        $stmt->execute([":created_by" => "$form[nickname]", ":post_title" => "$form[title]", ":post_text" => "$form[text]", ":img" => "$form[img]"]);
        }else{
        $stmt = $pdo->prepare('INSERT INTO posts (created_by, post_title, post_text, created_at, img)
                                        VALUES (:created_by, :post_title, :post_text, now(), :img)');
        $stmt->execute([":created_by" => "$form[nickname]", ":post_title" => "$form[title]", ":post_text" => "$form[text]", ":img" => ""]);
        }
    }
?>