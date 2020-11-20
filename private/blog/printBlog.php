<?php
    for ($nr = 0;$nr < $y;$nr++){
        echo"        
        <div class=\"card\">
        <h2>$title_array[$nr]</h2>
        <h5>Created by $name_array[$nr] at $time_array[$nr]</h5>
        <p>$text_array[$nr]</p>
        </div>";
    }  
//Fakeimg: <div class=\"fakeimg\" style=\"height:200px;\">Image</div>
?>
