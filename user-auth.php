<?php
require_once "assets/partials/standart/_head.php";
?>

<body>

    <div class="auth">
        <div class="linear-bg">
            <div class="auth-head">
                <img src="assets/img/icon.png" alt="">
                <strong>CR<span>AI</span>NE</strong>
            </div>
            <div class="auth-body">
                <?php
                $dir = "assets/partials/page/_" . $standart->type . ".php";
                if (file_exists($dir)) {
                    include $dir;
                } else {
                    header('Location: ' . $standart::base . "error/404");
                }
                ?>
            </div>
        </div>
    </div>








    <?php
    require "assets/partials/standart/_script.php";
    ?>
</body>

</html>