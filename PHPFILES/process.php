<html>
    <body>
        <!-- Welcome <?php echo $_POST["name"]?> -->
        <?php
            if (empty($_POST["name"])) {
                $msg = "Nama perlu dimasukkan";
            } else {
                $msg = "Welcome ".$_POST["name"];
            }
            echo $msg;

        ?>
    </body>
</html>