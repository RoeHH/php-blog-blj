<div class="card">
    <a style="width: 50%;" href="page.php">Write your own Post</a>
    <?php include '../private/accMenagement/login.php';?>
        <form class="login" action="page.php" method="post">
            <?php if ($isLoggedIn === true) { ?>
                <button class="login" type="submit" name="log" id="log" value="logout"><img src="../public/images/icons8-logout-rounded-left-24.min.png" alt="Logout"></button>
            <?php } else { ?>
                <button class="login" type="submit" name="log" id="log" value="login"><img src="../public/images/icons8-login-26.min.png" alt="Login"></button>    
            <?php } ?>
        </form>
</div>