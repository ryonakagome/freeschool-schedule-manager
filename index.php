<?php
    session_start();
    if(isset($_SESSION['uid']) == '') {
    } else {
        header("Location: home.php");
    }
?>
<!DOCTYPE HTML>
<html lang="ja">
    <body>
