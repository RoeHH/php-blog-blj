<?php  
    if (isset($isLoggedIn) !== true) {
        $isLoggedIn = true; 
    }
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if($_POST[log]=="logout"){
            $isLoggedIn = false;
        }elseif ($_POST[log]=="login") {
            $isLoggedIn = true;
        }
    }
?>