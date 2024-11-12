<?php
session_start();
?>
<!DOCTYPE html>
<html><body>
    <?php
        echo "Your name: ".$_SESSION["nama"].".<br>";
        echo "Your favourite color: ".$_SESSION["favcolor"]
    ?>
</body></html>