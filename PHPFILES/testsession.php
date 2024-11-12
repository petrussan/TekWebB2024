<?php
session_start();
?>
<!DOCTYPE html>
<html><body>
    <?php
        $_SESSION["favcolor"]="blue";
        $_SESSION["nama"]="Petrus";
        echo "Setting session variable";
    ?>
</body></html>