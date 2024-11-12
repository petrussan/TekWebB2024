<?php
$cookiename = "user1";
$cookievalue = "Andi";
setcookie($cookiename,$cookievalue,time()+(86400*30))
?>
<html>
    <body>
        <?php
            if (!isset($_COOKIE[$cookiename])) {
                echo "Cookie: ".$cookiename." belum tersedia";
            } else {
                echo "Cookie : ".$cookiename. " tersedia<br>";
                echo "Value: ".$_COOKIE[$cookiename];            }
        ?>
    </body>
</html>