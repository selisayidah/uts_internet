<?php
if( isset($_GET["npsn"])){
    $npsn = $_GET["npsn"];

    $server   = "localhost";
    $user     = "root";
    $password = "";
    $db       = "data_sekolah";

    //koneksi
    $connect  = new mysqli($server, $user, $password, $db);

    $sql = "DELETE FROM sekolah_data WHERE npsn=$npsn";
    $connect->query($sql);
}
header("location: /phpcrud/index 1.php");
exit;
?>