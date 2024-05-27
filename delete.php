<?php
include 'db.php';

if (isset($_GET['Kd_dokter'])) {
    $Kd_dokter = $_GET['Kd_dokter'];
    $sql = "DELETE FROM tb_dokter WHERE Kd_dokter='$Kd_dokter'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil dihapus'); window.location='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
