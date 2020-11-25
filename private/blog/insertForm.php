

<?php
    error_reporting(E_ALL ^ E_WARNING);
    $form = array(
        "nickname"=> "",
        "title"=> "",
        "text"=> "topsecretkeytoliockwrtitingondbplsdonotuseubadlul",
        "img"=> ""
    );
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        foreach($form as $n => $value){
            $form[$n] = $_POST[$n] ?? "";
        }
    }
    $matches = array();
    //img checker
    $imgbool = false;
    if($form[img] !== ""){
        if (substr($form[img], -3) === "png" | substr($form[img], -3) === "jpg" |substr($form[img], -3) === "gif"){
            $imgbool = true;
        }else{
            $imgbool = false;
        }
    }
    $alert_list = array();
    //check for mistakes
        if ($form[title] == "Title"){
        $alert_list[100] = "Bitte geben Sie einen Titel ein.";
    }
    if ($form[nickname] == "Your Nickname"){
        $alert_list[200] = "Bitte geben Sie einen Nicknamen ein.";
    }
    if ($form[text] == ""){
        $alert_list[300] = "Bitte geben Sie einen Text ein.";
    }
    $textrepeted = false;
    foreach($text_array as $n => $value){
        if ($form[text] == $value){
            $textrepeted = true;
        }
    }
    if($form[text] == "topsecretkeytoliockwrtitingondbplsdonotuseubadlul" ||$textrepeted === true){
        $isalert = true;
        $fakealert = true;
    }else{
        $isalert = isalert($alert_list) ?? "";
        $fakealert = false;
    }
    function isalert($alert_list){
        foreach($alert_list as $value){
            if($value != ""){
                return true;
            }
        }
        return false;
    }
?>
<div class="card formcard">
    <h2>Write your own</h2>
    <?PHP
        //displays errors if mistakes were made
        if ($isalert === true && $fakealert === false){
        echo "<div class=\"panel red\"><ul>";
        foreach($alert_list as $value){
            if ($value != ""){
            echo "<li>" . $value . "</li>";   
            }
        }
        echo "<ul></div>";
        }
    ?>
    <form action="page.php" method="post">
    <table style="width:100%">

    </tr>
        <label for="title"></label>
        <input type="text" id="title" name="title" value="Title" onfocus="this.value='';">
    </tr>
    <tr> 
        <label for="img"></label>
        <input type="text" id="img" name="img" value="Url of Img" onfocus="this.value='';">
    </tr>
    <tr> 
        <label for="nickname"></label>
        <input type="text" id="nickname" name="nickname" value="Your Nickname" onfocus="this.value='';">
    </tr>
    <tr>
        <label for="text"></label>
        <textarea  id="text" name="text" rows="10" cols="50" placeholder="Your Text"></textarea><br>
    </tr>
    <tr>
        <input class="submit" type="submit" value="Submit">
    </tr>

    </table>
    </form> 
</div>