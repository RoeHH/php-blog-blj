<div class="card">
    <?php include '../private/accMenagement/login.php';?>
    <div class="login">
        <form action="page.php" method="post">
            <?php if ($isLoggedIn === true) { ?>
                <button type="submit" name="log" id="log" value="logout"><img src="../public/images/icons8-logout-rounded-left-24.min.png" alt="Logout"></button>
            <?php } else { ?>
                <button type="submit" name="log" id="log" value="login"><img src="../public/images/icons8-login-26.min.png" alt="Login"></button>    
            <?php } ?>
        </form>
    </div>
    
</div>