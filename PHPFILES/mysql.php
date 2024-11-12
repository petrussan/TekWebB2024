<?php
$server = "localhost";
$user = "phpuser";
$password = "phppassword";
$dbname = "phpdb";

$conn = new mysqli($server, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal".$conn->connect_error);
}
echo "Koneksi berhasil<P>";

$sql = "SELECT * from user";
$result = $conn->query($sql);

$plaintextpassword = "password";

$userdata = "user02";
$passworddata = password_hash($plaintextpassword,PASSWORD_DEFAULT);

$verify = password_verify($plaintextpassword,$passworddata);

$sqlinsert = "INSERT INTO user(login,password) VALUES('$userdata','$passworddata')";

$sqldelete = "DELETE FROM user WHERE login='user02'";

if ($conn->query($sqlinsert)===TRUE){
    echo "insert berhasil<br>";
} else {
    echo "insert gagal: ".$sqlinsert."<br>";
}

if ($result->num_rows>0) {
    while ($row = $result->fetch_assoc()) {
        echo "id: ".$row["id"]." Login: ".$row["login"]."<BR>";
    }
} else {
    echo "hasil tidak ada";
}

?>