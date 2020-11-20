<?php
    $user = 'root';
    $password = '';
    $pdo = new PDO('mysql:host=localhost;dbname=blogdb', $user, $password, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ]);
    $name_array = array();
    $time_array = array();
    $text_array = array();
    $title_array = array();
    $y = 0;
    $stmt = $pdo->query('SELECT created_by FROM `posts`');
    foreach($stmt->fetchAll() as $nr => $x) {
        $name_array[$nr] =  "$x[0]";
    }  
    $stmt = $pdo->query('SELECT created_at FROM `posts`');
    foreach($stmt->fetchAll() as $nr => $x) {
        $time_array[$nr] =  "$x[0]";
    }  
    $stmt = $pdo->query('SELECT post_text FROM `posts`');
    foreach($stmt->fetchAll() as $nr => $x) {
        $text_array[$nr] =  "$x[0]";
    }  
    $stmt = $pdo->query('SELECT post_title FROM `posts`');
    foreach($stmt->fetchAll() as $nr => $x) {
        $title_array[$nr] =  "$x[0]";
        $y++;
    }  
?>