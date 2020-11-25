<?php
    $form = array(
        "nickname"=> "",
        "title"=> "",
        "text"=> "",
    );

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        foreach($form as $n => $value){
            $form[$n] = $_POST[$n] ?? "";
        }
    }
    preg_match('/(http|ftp|mailto)/', $form, $matches);


    var_dump($imgs);



    foreach($form as $result) {
        echo $result, "<br>";
    }
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
    $stmt = $pdo->prepare('INSERT INTO posts (created_by, post_title, post_text, created_at)
                                    VALUES (:created_by, :post_title, :post_text, now())');
    $stmt->execute([":created_by" => "$form[nickname]", ":post_title" => "$form[title]", ":post_text" => "$form[text]"]);
?>