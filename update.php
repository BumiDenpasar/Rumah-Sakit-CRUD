<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Update Dokter</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-5">
        <h1 class="text-2xl font-bold">Update Dokter</h1>
        <?php
        if (isset($_GET['Kd_dokter'])) {
            $Kd_dokter = $_GET['Kd_dokter'];
            $sql = "SELECT * FROM tb_dokter WHERE Kd_dokter='$Kd_dokter'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
            }
        }
        ?>
        <form action="update.php" method="POST">
            <div class="mb-4">
                <label class="block">Kode Dokter</label>
                <input type="text" name="Kd_dokter" class="w-full border px-4 py-2" value="<?php echo $row['Kd_dokter']; ?>" readonly>
            </div>
            <div class="mb-4">
                <label class="block">Nama Dokter</label>
                <input type="text" name="Nama_dokter" class="w-full border px-4 py-2" value="<?php echo $row['Nama_dokter']; ?>" required>
            </div>
            <div class="mb-4">
                <label class="block">Kode Spesialis</label>
                <input type="text" name="Kd_spesialis" class="w-full border px-4 py-2" value="<?php echo $row['Kd_spesialis']; ?>" required>
            </div>
            <div class="mb-4">
                <label class="block">Telepon</label>
                <input type="text" name="Telepon" class="w-full border px-4 py-2" value="<?php echo $row['Telepon']; ?>" required>
            </div>
            <div class="mb-4">
                <label class="block">Jenis Kelamin</label>
                <input type="text" name="Sex" class="w-full border px-4 py-2" value="<?php echo $row['Sex']; ?>" required>
            </div>
            <button type="submit" name="update" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['update'])) {
    $Kd_dokter = $_POST['Kd_dokter'];
    $Nama_dokter = $_POST['Nama_dokter'];
    $Kd_spesialis = $_POST['Kd_spesialis'];
    $Telepon = $_POST['Telepon'];
    $Sex = $_POST['Sex'];

    $sql = "UPDATE dokter SET Nama_dokter='$Nama_dokter', Kd_spesialis='$Kd_spesialis', Telepon='$Telepon', Sex='$Sex' WHERE Kd_dokter='$Kd_dokter'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil diupdate'); window.location='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
