<nav>
    <div class="container">
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo">FMS</a>
            <a href="#" data-targer="mobilemenu" class="sidenav-trigger"><i class="material-icons">menu</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="attendreport.php">出席票</a></li>
                <li><a href="logout.php">ログアウト</a></li>
                <li><a href="calendar.php" class="btn">カレンダー/出欠登録</a></li>
            </ul>
            <ul id="mobilemenu" class="sidenav">
                <li><a href="calendar.php" class="btn">カレンダー/出欠登録</a></li>
                <li><a href="attendreport.php">出席票</a></li>
            </ul>
        </div>
    </div>
</nav>
<script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
    });
</script>