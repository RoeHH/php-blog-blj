<?php
    $dbuser = "d041e_listuder";

    $dbpass = "12345_Db!!!";

    $pdo = new PDO("mysql:host=mysql2.webland.ch;dbname=d041e_listuder", $dbuser, $dbpass, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ]);

    $sqlQuery = $pdo->query("SELECT * FROM `blog_url`");
    $urls = $sqlQuery->fetchAll();
?>
<div class="card">
    <h3>Other amazing Blogs</h3>
    <?php
    foreach ($urls as $key => $value) {
        echo "<a href=\"$value[2]\">$value[0]. $value[1]</a><br>";
    }
    ?>
</div>