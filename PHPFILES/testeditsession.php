<?php
session_start();
?>
<!DOCTYPE html>
<html><body>
    <?php
        $_SESSION["nama"]="Budi";
        print_r($_SESSION);
    ?>
</body></html>