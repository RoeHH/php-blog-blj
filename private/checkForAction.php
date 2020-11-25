<?php  
    error_reporting(E_ALL ^ E_WARNING);
    if (isset($isLoggedIn) !== true) {
        $isLoggedIn = true; 
    }
    if (isset($createPost) !== true) {
        $createPost = false; 
    }
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if($_POST[log]=="logout"){
            $isLoggedIn = false;
        }elseif ($_POST[log]=="login") {
            $isLoggedIn = true;
        }elseif($_POST[createPost]=="createPost") {
            $createPost = true;
        }elseif($_POST[createPost]=="createEDPost") {
            $createPost = false;
        }
    }
?>