<?php
    session_start();
    if(isset($_SESSION['uid']) == '') {
    } else {
        header("Location: home.php");
    }
?>
<!DOCTYPE HTML>
<html lang="ja">
    <?php
        require_once('tmp/head.php');
    ?>
    <body>
        <?php
            require_once('module/modulenav.php');
        ?>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <form action="module/modulelogin.php" method="POST">
                        <h4>ログイン</h4>
                        <input type="text" name="uid" class="validate" required>
                        <h4>パスワード</h4>
                        <input type="password" name="password" class="validate" required><br>
                        <button type="submit" class="btn">ログイン</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
