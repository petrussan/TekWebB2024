<?php
    $msg="";
    if(isset($_POST['submit'])) {
        $data = $_POST['name'];
        $msg = "Data: ". $data."<BR>";
    }
?>
<html>
    <body>
        <form action="#" method="POST">
        <?php echo $msg;?>
        <input type="text" name="name"/>
        <input type="submit" name="submit"/>
    </body>
</html>