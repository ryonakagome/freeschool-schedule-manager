<?php
    if(isset($_SESSION['uid']) != '') {
        require_once('../config/config.php');
        $uid = $_SESSION['uid'];
        $sql = mysqli_query($db_link, "SELECT Permission FROM User WHERE UserID = '$uid'");
        $result = mysqli_fetch_assoc($sql);
        if($result['Permission'] == "1") {
            require_once('../tmp/navparents.php');
        } elseif ($result['Permission'] == "2") {
            require_once('../tmp/navteacher.php');
        }
    } else {
        require_once('tmp/nav.php');
    }
?>