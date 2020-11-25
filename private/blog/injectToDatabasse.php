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
    $db = new PDO('mysql:host=localhost;SHOW ERRORS;dbname=blogdb', 'root', '');
    $stmt = $db->prepare('INSERT INTO posts (created_by, post_title, post_text, created_at)
                                    VALUES (:created_by, :post_title, :post_text, now())');
    $stmt->execute([":created_by" => "$form[nickname]", ":post_title" => "$form[title]", ":post_text" => "$form[text]"]);
?>