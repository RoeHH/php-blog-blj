<div id="inline"> 
    <div class="one">
        <form action="page.php" method="post">
            <input class="cloakOfInvisibility" type="text" id="log" name="log" value="nüd">
            <button class="cpostbutton" type="submit" name="createPost" id="createPost" value="createPost">Create your own Post</button>    
        </form>
    </div> 
    <div class="two">
        <?php include '../private/accMenagement/login.php';?>
        <form class="login" action="page.php" method="post">
            <input class="cloakOfInvisibility" type="text" id="createPost" name="createPost" value="nüd">
            <?php if ($isLoggedIn === true) { ?>
                <button class="login" type="submit" name="log" id="log" value="logout"><img src="../public/images/icons8-logout-rounded-left-24.min.png" alt="Logout"></button>
            <?php } else { ?>
                <button class="login" type="submit" name="log" id="log" value="login"><img src="../public/images/icons8-login-26.min.png" alt="Login"></button>    
            <?php } ?>
        </form>
    </div> 
</div> 